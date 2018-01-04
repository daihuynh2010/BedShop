<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\User;
use App\NSX;
use App\Loai_SP;
use App\Hinh_SP;
use Storage;
use Image;
use File;
use Excel;
use Illuminate\Support\Str;


class SanPhamController extends Controller
{
    public function getList(){
        // $sanphamListnew=SanPham::orderBy('created_at','desc')->take(2)->get(); lấy 2 sản phẩm đầu trong danh sách
        $sanphamListnew=SanPham::orderBy('created_at','desc')->get();
        $sanphamListsearch=SanPham::orderBy('sp_ten','desc')->get();
        $sanphamListsale=SanPham::orderBy('sp_km','desc')->get();
        $sanphamList=SanPham::orderBy('id_sp','asc')->get();
        $loaiSPList=Loai_SP::orderBy('id_loaisp','asc')->get();
        $nsxList=NSX::orderBy('id_nsx','asc')->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        // return view('guest.home',['sanphamList'=>$sanphamList]);
        return response(['nsxList'=>$nsxList,'sanphamListsearch'=>$sanphamListsearch,'hinhspList'=>$hinhspList,'loaiSPList'=>$loaiSPList,'sanphamListnew'=>$sanphamListnew,'sanphamListsale'=>$sanphamListsale,'sanphamList'=>$sanphamList]);
    }

    public function getListGuest(){
        $sanphamListnew=SanPham::orderBy('created_at','desc')->get();
        $sanphamListsale=SanPham::orderBy('sp_km','desc')->get();
        $sanphamList=SanPham::orderBy('id_sp','asc')->get();
        $loaiSPList=Loai_SP::orderBy('id_loaisp','asc')->get();
        $nsxList=NSX::orderBy('id_nsx','asc')->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();

        return view('guest.home',compact('sanphamListnew','sanphamListsale','hinhspList')); 
    }

    public function getListUser(){
        $sanphamListnew=SanPham::orderBy('created_at','desc')->get();
        $sanphamListsale=SanPham::orderBy('sp_km','desc')->get();
        $sanphamList=SanPham::orderBy('id_sp','asc')->get();
        $loaiSPList=Loai_SP::orderBy('id_loaisp','asc')->get();
        $nsxList=NSX::orderBy('id_nsx','asc')->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();

        return view('user.home',compact('sanphamListnew','sanphamListsale','hinhspList')); 
    }

    public function getListManage(){
        $sanphamList=SanPham::orderBy('id_sp','asc')->get();
        $loaiSPList=Loai_SP::orderBy('id_loaisp','asc')->get();
        $nsxList=NSX::orderBy('id_nsx','asc')->get();

        return view('manage.list_product',compact('sanphamList','loaiSPList','nsxList')); 
    }

    public function getSPByLoai($loai){
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$loai)->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        return response(['sanphamList'=>$sanphamList,'hinhspList'=>$hinhspList]);
    }

    public function getSPByLoaiGuest($loai){
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$loai)->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        return view('guest.home_timkiem',compact('sanphamList','hinhspList')); 
    }

    public function getSPByLoaiUser($loai){
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$loai)->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        return view('user.home_timkiem',compact('sanphamList','hinhspList')); 
    }

    public function detailSP($id){
        $sanphamDetail=SanPham::orderBy('id_sp',$id)->find($id);
        $bl_nx_yt=$sanphamDetail->Users;
        $hinhsp_chinh=Hinh_SP::orderBy('id_hinh','asc')->where('hinh_idsp',$id)->where('is_hinhchinh',1)->first();
        $loaiSPList=Loai_SP::orderBy('id_loaisp','asc')->get();
        $nsxList=NSX::orderBy('id_nsx','asc')->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        $hinhspLisp_orther=Hinh_SP::orderBy('id_hinh','asc')->where('hinh_idsp',$id)->where('is_hinhchinh',0)->get();
        return response(['sanphamDetail'=>$sanphamDetail,'hinhspLisp_orther'=>$hinhspLisp_orther,'hinhspList'=>$hinhspList,'nsxList'=>$nsxList,'loaiSPList'=>$loaiSPList,'hinhsp_chinh'=>$hinhsp_chinh,'bl_nx_yt'=>$bl_nx_yt]);
    }

    public function detailSPGuest($id){
        $sanphamDetail=SanPham::orderBy('id_sp',$id)->find($id);
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$sanphamDetail->sp_idloai)->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        $hinhspLisp_orther=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',0)->get();
        return view('guest.detail_sp',compact('sanphamList','hinhspList','hinhspLisp_orther')); 
    }

    public function detailSPUser($id){
        $sanphamDetail=SanPham::orderBy('id_sp',$id)->find($id);
        $sanphamList=SanPham::orderBy('created_at','desc')->where('sp_idloai',$sanphamDetail->sp_idloai)->get();
        $hinhspList=Hinh_SP::orderBy('id_hinh','asc')->where('is_hinhchinh',1)->get();
        $hinhspLisp_orther=Hinh_SP::orderBy('id_hinh','asc')->where('hinh_idsp',$id)->where('is_hinhchinh',0)->get();
        return view('user.detail_sp',compact('sanphamList','hinhspList','hinhspLisp_orther')); 
    }

    public function binhluanSP(Request $request){
        $sanpham=SanPham::find($request->idsp);
        $user=User::find($request->iduser);
        $bl=$user->SanPham->where('id_sp',$request->idsp)->first();
        if($bl){
            $user->SanPham()->updateExistingPivot($sanpham->id_sp,['noi_dung'=>$request->binhluan]);
        }
        else{
            $user->SanPham()->save($sanpham,['noi_dung'=>$request->binhluan,'danh_gia'=>0]);
        }
    }

    public function danhgiaSP(Request $request){
        $sanpham=SanPham::find($request->idsp);
        $user=User::find($request->iduser);
        $tong_danhgia=0;
        $i=1;
        $bl=$user->SanPham->where('id_sp',$request->idsp)->first();
        if($bl){
            $user->SanPham()->updateExistingPivot($sanpham->id_sp,['danh_gia'=>$request->danhgia]);
            $i++;
        }
        else{
            $user->SanPham()->save($sanpham,['noi_dung'=>"",'danh_gia'=>$request->danhgia]);
        }


        foreach($sanpham->Users as $OB){
            $tong_danhgia+=(int)$OB->pivot->danh_gia;
            $i++;
        }
        $sanpham->sp_danhgia=(int)(($tong_danhgia+(int)$request->danhgia)/($i));
        $sanpham->save();
    }

    public function thichSP(Request $request){
        // return((int)$request->thich);
        $sanpham=SanPham::find($request->idsp);
        $user=User::find($request->iduser);
        $bl=$user->SanPham->where('id_sp',$request->idsp)->first();
        if($bl){
            $user->SanPham()->updateExistingPivot($sanpham->id_sp,['is_thich'=>(int)$request->thich]);
        }
        else{
            $user->SanPham()->save($sanpham,['noi_dung'=>"",'is_thich'=>(int)$request->thich]);
        }
    }

    public function deleteSP($id){
        $sanpham=SanPham::orderBy('id_sp',$id)->find($id);
        $sanpham->delete();
    }

    public function themSP(Request $request){
        $sanpham=new SanPham;
        $sanpham->sp_ten=$request->sp_ten;
        $sanpham->sp_gia=$request->sp_gia;
        $sanpham->sp_km=0;
        $sanpham->sp_hsd=$request->sp_hsd;
        $sanpham->sp_mota=$request->sp_mota;
        $sanpham->sp_gioithieu=$request->sp_gioithieu;
        $sanpham->sp_trongluong=$request->sp_trongluong;
        $sanpham->sp_kichthuoc=$request->sp_kichthuoc;
        $sanpham->sp_soluong=$request->sp_soluong;
        $sanpham->sp_danhgia=$request->sp_danhgia;
        $sanpham->sp_idloai=$request->sp_idloai;
        $sanpham->sp_idnsx=$request->sp_idnsx;
        $sanpham->save();
        if($request->hasFile('image_chinh')){
            $fieldfile = $request->file('image_chinh');
            $file = $fieldfile->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $imageName = Str::slug($filename, '-') .'-'. Str::random(10) . '.' . $fieldfile->getClientOriginalExtension();
            $location = public_path(config('options.layout.image'));
            Image::make($fieldfile)->resize(150, 220)->save($location.'/small/' . $imageName);
            Image::make($fieldfile)->resize(330, 313)->save($location.'/medium/' . $imageName);
            Image::make($fieldfile)->resize(41, 60)->save($location.'/thum/' . $imageName);  
            Image::make($fieldfile)->resize(600, 570)->save($location.'/large/' . $imageName); 
            $hinh=new Hinh_SP;
            $hinhsp=SanPham::orderBy('id_sp','desc')->first();
            $hinh->vitri_hinh=$imageName;
            $hinh->hinh_idsp=$hinhsp->id_sp;
            $hinh->is_hinhchinh=1;
            $hinh->save();
        }
        //thêm hình phụ
        for($i=0;$i<$request->length_image_orther;$i++){
            if($request->hasFile('image_orther'.$i)){
                $fieldfile = $request->file('image_orther'.$i);
                $file = $fieldfile->getClientOriginalName();
                $filename = pathinfo($file, PATHINFO_FILENAME);
                $imageName = Str::slug($filename, '-') .'-'. Str::random(10) . '.' . $fieldfile->getClientOriginalExtension();
                $location = public_path(config('options.layout.image'));
                Image::make($fieldfile)->resize(41, 60)->save($location.'/thum/' . $imageName);  
                $hinh=new Hinh_SP;
                $hinhsp=SanPham::orderBy('id_sp','desc')->first();
                $hinh->vitri_hinh=$imageName;
                $hinh->hinh_idsp=$hinhsp->id_sp;
                $hinh->is_hinhchinh=0;
                $hinh->save();
            }
        }
    }

    public function editSP(Request $request,$id){
        $sanpham=SanPham::find($id);
        $sanpham->sp_ten=$request->sp_ten;
        $sanpham->sp_gia=$request->sp_gia;
        $sanpham->sp_km=0;
        $sanpham->sp_hsd=$request->sp_hsd;
        $sanpham->sp_mota=$request->sp_mota;
        $sanpham->sp_gioithieu=$request->sp_gioithieu;
        $sanpham->sp_trongluong=$request->sp_trongluong;
        $sanpham->sp_kichthuoc=$request->sp_kichthuoc;
        $sanpham->sp_soluong=$request->sp_soluong;
        $sanpham->sp_danhgia=$request->sp_danhgia;
        $sanpham->sp_idloai=$request->sp_idloai;
        $sanpham->sp_idnsx=$request->sp_idnsx;
        $sanpham->save();
        if($request->hasFile('image_chinh')){
            $fieldfile = $request->file('image_chinh');
            $file = $fieldfile->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $imageName = Str::slug($filename, '-') .'-'. Str::random(10) . '.' . $fieldfile->getClientOriginalExtension();
            $location = public_path(config('options.layout.image'));
            Image::make($fieldfile)->resize(150, 220)->save($location.'/small/' . $imageName);
            Image::make($fieldfile)->resize(330, 313)->save($location.'/medium/' . $imageName);
            Image::make($fieldfile)->resize(41, 60)->save($location.'/thum/' . $imageName);  
            Image::make($fieldfile)->resize(600, 570)->save($location.'/large/' . $imageName); 

            $hinh=Hinh_SP::where('hinh_idsp',$sanpham->id_sp)->where('is_hinhchinh',1)->first();
            if($hinh){
                $oldFilename = $hinh->vitri_hinh;
                File::delete($location.'/small/'.$oldFilename);
                File::delete($location.'/medium/'.$oldFilename);
                File::delete($location.'/thum/'.$oldFilename);
                File::delete($location.'/large/'.$oldFilename);
                $hinh->vitri_hinh=$imageName;
                $hinh->hinh_idsp=$sanpham->id_sp;
                $hinh->is_hinhchinh=1;
                $hinh->save();
            }
            else{
                $hinhnew=new Hinh_SP;
                $hinhnew->vitri_hinh=$imageName;
                $hinhnew->hinh_idsp=$sanpham->id_sp;
                $hinhnew->is_hinhchinh=1;
                $hinhnew->save();
            }
        }
        //sửa hình phụ
        for($i=0;$i<$request->length_image_orther;$i++){
            if($request->hasFile('image_orther'.$i)){
                $fieldfile = $request->file('image_orther'.$i);
                $file = $fieldfile->getClientOriginalName();
                $filename = pathinfo($file, PATHINFO_FILENAME);
                $imageName = Str::slug($filename, '-') .'-'. Str::random(10) . '.' . $fieldfile->getClientOriginalExtension();
                $location = public_path(config('options.layout.image'));
                Image::make($fieldfile)->resize(41, 60)->save($location.'/thum/' . $imageName);  
                $hinh=new Hinh_SP;
                $hinh->vitri_hinh=$imageName;
                $hinh->hinh_idsp=$sanpham->id_sp;
                $hinh->is_hinhchinh=0;
                $hinh->save();
            }
        }
    }

    public function exportList(){
        $sanphamList=SanPham::orderBy('sp_ten','asc')->get();
        if($sanphamList){
            Excel::create('Danh Sách Sản Phẩm', function($excel) use($sanphamList) {
                $excel->sheet('Danh_Sach_San_Pham', function($sheet) use($sanphamList) {
                    $sheet->row(1, array(
                        'Tên Sản Phẩm','Loại Sản Phẩm','Nhà Sản Xuất','Giá','Số Lượng','Hạn Sử Dụng',
                        'Khuyến Mãi','Mô Tả','Giới Thiệu','Trọng Lượng','Kíck Thước','Đánh Giá'
                    ));
                    foreach($sanphamList as $sanpham) {
                        $row_data = array();
                        array_push($row_data, $sanpham->sp_ten);
                        array_push($row_data, $sanpham->Loai_SP->loaisp_ten);
                        array_push($row_data, $sanpham->NSX->nsx_ten);
                        array_push($row_data, $sanpham->sp_gia);
                        array_push($row_data, $sanpham->sp_soluong);
                        array_push($row_data, $sanpham->sp_hsd);
                        array_push($row_data, $sanpham->sp_km);
                        array_push($row_data, $sanpham->sp_mota);
                        array_push($row_data, $sanpham->sp_gioithieu);
                        array_push($row_data, $sanpham->sp_trongluong);
                        array_push($row_data, $sanpham->sp_kichthuoc);
                        array_push($row_data, $sanpham->sp_danhgia);

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
