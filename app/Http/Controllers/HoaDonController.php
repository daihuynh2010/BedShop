<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hoa_Don;
use App\SanPham;
use App\Hinh_SP;
use DateTime;
use Excel;

class HoaDonController extends Controller
{
    public function getList($id_user){
        $user=User::find($id_user);
        $hoadon=Hoa_Don::where('id_user',$id_user)->where('is_thanhtoan','0')->first();
        $donhang=Hoa_Don::where('id_user',$id_user)->where('is_thanhtoan','1')->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        if($hoadon){
            $detail_hoadon=$hoadon->SanPham;
            return response(['hinhspList'=>$hinhspList,'hoadon'=>$hoadon,'detail_hoadon'=>$detail_hoadon,'user'=>$user,'donhang'=>$donhang]);
        }
        else
            return response(['hinhspList'=>$hinhspList,'user'=>$user,'donhang'=>$donhang]);
    }

    public function addHoaDon(Request $request){
        $hoadon=Hoa_Don::where('id_user',$request->iduser)->where('is_thanhtoan','0')->first();
        $sanpham=SanPham::where('id_sp',$request->idsp)->first();
        $user=User::find($request->iduser);
        if($hoadon)
        {
           $hoadon->tongtien=($hoadon->tongtien)+(($request->soluong)*($request->gia));
           $hoadon->tong_sp=($hoadon->tong_sp)+($request->soluong);
           $hoadon->save();
           $detail_hoadon=$hoadon->SanPham->where('id_sp',$request->idsp)->first();
           if($detail_hoadon){//sửa lại số luọng sản phẩm
                $hoadon->SanPham()->updateExistingPivot($sanpham->id_sp,['so_luong'=>(($detail_hoadon->pivot->so_luong)+($request->soluong)),'so_tien'=>( ($detail_hoadon->pivot->so_tien) + ($request->gia) * ($request->soluong)), 'updated_at'=>new DateTime()]);
            }
            else{//thêm sản phẩm vào giỏ hàng
                $hoadon->SanPham()->save($sanpham,['so_luong'=>$request->soluong,'so_tien'=>($request->gia)*($request->soluong),         'updated_at'=>new DateTime(), 'created_at'=>new DateTime()]);
            }
        }
        else{//thêm giỏ hàng mới và sản phẩm mới
            $hoadonnew=new Hoa_Don;
            $hoadonnew->tongtien=($request->soluong)*($request->gia);
            $hoadonnew->tong_sp=$request->soluong;
            $hoadonnew->id_user=$request->iduser;
            $hoadonnew->cach_thanh_toan="Thanh toán khi nhận hàng";
            $hoadonnew->tinh_trang_hang="Đang Xử Lý";
            $hoadonnew->dd_giao_hang=$user->dd_giaohang_md;
            $hoadonnew->sdt=$user->sdt;
            $hoadonnew->save();
            $sanpham->HoaDon()->save($hoadonnew,['so_luong'=>$request->soluong,'so_tien'=>($request->gia)*($request->soluong),'updated_at'=>new DateTime(), 'created_at'=>new DateTime()]);
        }
    }

    public function ThanhtoanHoaDon(Request $request){
        $hoadon=Hoa_Don::find($request->id_hoadon);
        $hoadon->cach_thanh_toan=$request->cach_thanhtoan;
        $hoadon->dd_giao_hang=$request->dd_giaohang;
        $hoadon->sdt=$request->sdt;
        $hoadon->is_thanhtoan='1';
        $hoadon->save();
    }

    public function removeSPinHoaDon(Request $request){
        $hoadon=Hoa_Don::where('id_user',$request->iduser)->where('is_thanhtoan','0')->first();
        $sanpham=SanPham::where('id_sp',$request->idsp)->first();
        $detail_hoadon=$sanpham->HoaDon->first()->pivot;
        $hoadon->tong_sp=$hoadon->tong_sp-$detail_hoadon->so_luong;
        $hoadon->tongtien=$hoadon->tongtien-$detail_hoadon->so_tien;
        $detail_hoadon->delete();
        $hoadon->save();
        
    }

    public function getListNew(){
        $hoadonList=Hoa_Don::where('tinh_trang_hang','Đang Xử Lý')->where('is_thanhtoan',1)->orderBy('id_hd','asc')->get();

        // return response(['hoadonList'=>$hoadonList]);
        return view('manage.new_order',compact('hoadonList'));  
    }

    public function getHoaDon($id){
        $hoadon=Hoa_Don::where('id_hd',$id)->first();
        
        return response(['hoadon'=>$hoadon]);
    }

    public function confirmHoaDon($id){
        $hoadon=Hoa_Don::where('id_hd',$id)->first();
        $hoadon->tinh_trang_hang="Đang Giao";
        $hoadon->save();
    }

    public function deleteHoaDon($id){
        $hoadon=Hoa_Don::where('id_hd',$id)->first();
        $hoadon->delete();
    }

    public function getListDangChuyen(){
        $hoadonList=Hoa_Don::where('tinh_trang_hang','Đang Giao')->where('is_thanhtoan',1)->orderBy('id_hd','asc')->get();
        return view('manage.pay_order',compact('hoadonList'));  
    }

    public function ketthucHoaDon($id){
        $hoadon=Hoa_Don::where('id_hd',$id)->first();
        $hoadon->tinh_trang_hang="Đã Kết Thúc";
        $hoadon->save();
    }

    public function getListAll(){
        $hoadonList=Hoa_Don::orderBy('id_hd','asc')->get();
        return view('manage.statistical_order',compact('hoadonList'));  
    }

    public function exportList(){
        $hoadonList=Hoa_Don::orderBy('id_hd','asc')->get();
        if($hoadonList){
            Excel::create('Danh Sách Hóa Đơn', function($excel) use($hoadonList) {
                $excel->sheet('Danh_Sach_Hoa_Don', function($sheet) use($hoadonList) {
                    $sheet->row(1, array(
                        'Mã Hóa Đơn','Tên Khách Hàng','Số Điện Thoại','Tổng Sản Phẩm',
                        'Tổng Tiền','Địa Điểm Giao Hàng','Cách Thanh Toán','Tình Trạng Đơn Hàng'
                    ));
                    foreach($hoadonList as $hoadon) {
                        $row_data = array();
                        array_push($row_data, $hoadon->id_hd);
                        array_push($row_data, $hoadon->Users->name);
                        array_push($row_data,$hoadon->sdt);
                        array_push($row_data,$hoadon->tong_sp);
                        array_push($row_data,$hoadon->tongtien);
                        array_push($row_data,$hoadon->dd_giao_hang);
                        array_push($row_data,$hoadon->cach_thanh_toan);
                        array_push($row_data,$hoadon->tinh_trang_hang);

                        $sheet->appendRow($row_data);
                    }

                    $sheet->setFontSize(13);
                    $sheet->setFontFamily('Times New Roman');
                    $sheet->row(1, function($row) {
                        $row->setFontWeight('bold');
                    });
                });
            })->export('xlsx');
        }
    }
}
