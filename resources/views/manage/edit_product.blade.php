@extends('master_manager')

@section('title', "FlatShop | Product")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
        <div class="x_content"><br />
            <form class="form-horizontal " ng-controller="EditSanPhamControllerNG">
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Tên Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_ten" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Loại Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select ng-model="loaisp.value">
                        	<option ng-value="@{{loaiSPOB.id_loaisp}}"  ng-repeat="loaiSPOB in loaiSPList">@{{ loaiSPOB.loaisp_ten }}</option>
                        </select>
                    </div>
                </div>
               	<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Giá Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_gia" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nhà Sản Xuất : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select ng-model="nsx.value"  >
                        	<option ng-value="@{{nsxOB.id_nsx}}" ng-repeat="nsxOB in nsxList">@{{ nsxOB.nsx_ten }}</option>
                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Hạn Sử Dụng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_hsd" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mô Tả : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_mota" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Giới Thiệu : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_gioithieu" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Số Lượng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" ng-model="product.sp_soluong" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Trọng Lượng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_trongluong" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Kích Thước : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" ng-model="product.sp_kichthuoc" class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Đánh Giá : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px;">
                        <input type="number" ng-model="product.sp_danhgia"   required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Hình Ảnh : </label>
                    <div class="col-md-2 col-sm-6 col-xs-12 btn btn-danger">
                        <input type="file" name="hinhanh" ng-model="product.hinhanh"  id="manager_add_product_image_chinh"  accept="image/*"  onchange="angular.element(this).scope().uploadedFile_chinh(this.files)" style="position:absolute;opacity:0"  required="required">
                        Tải Hình Lên
                    </div>
                    <img class="thumbnail" id="product_img_chinh" style='width:100px;height:auto' ng-src=" @{{hinhsp}} "/>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Hình Ảnh Khác : </label>
                    <div class="col-md-2 col-sm-6 col-xs-12 btn btn-danger">
                        <input type="file" name="hinhanh"  id="manager_add_product_image_orther"  accept="image/*"  onchange="angular.element(this).scope().uploadedFile(this.files)" style="position:absolute;opacity:0"  >
                        Tải Hình Lên
                    </div>
                    <div class="col-md-12" id="manager_product_image_orther">
                        <img class="thumbnail" id="product_img_orther" ng-repeat="hinhsp_orther in hinhspLisp_orther" style='width:auto;height:auto' ng-src=" @{{URL_image_orther}}@{{hinhsp_orther.vitri_hinh}} "/>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 center">
                        <a class="btn btn-primary" href="{{ route('manage_list_product')}}">Cancel</a>
                        <button class="btn btn-success" ng-click="editproduct(product.id_sp)">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop