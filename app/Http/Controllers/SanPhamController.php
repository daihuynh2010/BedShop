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
use DB;
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
        $hinhspLisp_orther=Hinh_SP::orderBy('id_hinh','asc')->where('hinh_idsp',$id)->where('is_hinhchinh',0)->get();
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
        return($request);
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

    public function AddList(Request $request){
        if($request->hasFile('import')) {
            $result = Excel::load($request->import, function($reader) {
            })->get()->toArray();
            $sanphamList = [];
            foreach($result as $sanpham) {
                $sanpham = array_values($sanpham);
                $newsanpham = new sanpham;
                $newsanpham->sp_ten = $sanpham[0];
                $newsanpham->sp_gia = $sanpham[1];
                $newsanpham->sp_km = $sanpham[2];
                $newsanpham->sp_hsd = $sanpham[3];
                $newsanpham->sp_mota = $sanpham[4];
                $newsanpham->sp_gioithieu = $sanpham[5];
                $newsanpham->sp_trongluong = $sanpham[6];
                $newsanpham->sp_kichthuoc = $sanpham[7];
                $newsanpham->sp_soluong = $sanpham[8];
                $newsanpham->sp_danhgia = $sanpham[9];
                $newsanpham->sp_idnsx = $sanpham[10];
                $newsanpham->sp_idloai = $sanpham[11];
                
                array_push($sanphamList, $newsanpham);
            }
            $errors = [];
            $nsx_name = [];
            $loaisp_name = [];
            //Check error
            foreach($sanphamList as $sanpham) {
                //check tồn tại sinh viên
                $check = SanPham::find($sanpham->id_sp);
                if(!is_null($check)) {
                    array_push($errors, "Mã ".$sanpham->id_sp." đã tồn tại.");
                }

                $nsx = NSX::where('id_nsx', $sanpham->sp_idnsx)->first();
                if(is_null($nsx)) {
                    array_push($errors, "Nhà Sản Xuất ".$sanpham->sp_idnsx." không tồn tại.");
                    // array_push($nsx_name, NULL);
                } else {
                    $sanpham->sp_idnsx = $nsx->id_nsx;
                    array_push($nsx_name, $nsx->nsx_ten);
                }

                $loaisp = Loai_SP::where('id_loaisp', $sanpham->sp_idloai)->first();
                if(is_null($loaisp)) {
                    array_push($errors, "Loại Sản phẩm ".$sanpham->sp_idloai." không tồn tại.");
                    // array_push($loaisp_name, NULL);
                } else {
                    $sanpham->sp_idloai = $loaisp->id_loaisp;
                    array_push($loaisp_name, $loaisp->loaisp_ten);
                }
            }

            $this->data['sanphamList'] = $sanphamList;
            $this->data['errors'] = $errors;
            $this->data['nsx_name'] = $nsx_name;
            $this->data['loaisp_name'] = $loaisp_name;

            return view('manage.add_list_product', $this->data);
        }
    }

    public function postSubmitsanphamList(Request $request) {
        DB::beginTransaction();
        try {
            $sp_ten_arr = $request->sp_ten;
            $sp_idloai_arr = $request->sp_idloai;
            $sp_gia_arr = $request->sp_gia;
            $sp_idnsx_arr = $request->sp_idnsx;
            $sp_soluong_arr = $request->sp_soluong;
            $sp_hsd_arr = $request->sp_hsd;
            $sp_km_arr = $request->sp_km;
            $sp_mota_arr = $request->sp_mota;
            $sp_gioithieu_arr = $request->sp_gioithieu;
            $sp_trongluong_arr = $request->sp_trongluong;
            $sp_kichthuoc_arr = $request->sp_kichthuoc;
            $sp_danhgia_arr = $request->sp_danhgia;

            for($i = 0; $i < count($request->sp_ten); $i++) {
                $sanpham = new SanPham;
                $sanpham->sp_ten = $sp_ten_arr[$i];
                $sanpham->sp_idloai = $sp_idloai_arr[$i];
                $sanpham->sp_gia = $sp_gia_arr[$i];
                $sanpham->sp_idnsx = $sp_idnsx_arr[$i];
                $sanpham->sp_soluong = $sp_soluong_arr[$i];
                $sanpham->sp_hsd = $sp_hsd_arr[$i];
                $sanpham->sp_km = $sp_km_arr[$i];
                $sanpham->sp_mota = $sp_mota_arr[$i];
                $sanpham->sp_gioithieu = $sp_gioithieu_arr[$i];
                $sanpham->sp_trongluong = $sp_trongluong_arr[$i];
                $sanpham->sp_kichthuoc = $sp_kichthuoc_arr[$i];
                $sanpham->sp_danhgia = $sp_danhgia_arr[$i];


                $sanpham->save();
            }

            DB::commit();
            return redirect()->route('manage_list_product');
        } catch(Exception $e) {
            DB::rollBack();
            $this->data['error'] = $e->getMessage();
            $this->data['result'] = false;
            return $this->data;

        }
    }
}
