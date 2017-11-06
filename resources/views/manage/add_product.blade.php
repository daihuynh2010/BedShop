@extends('master_manager')

@section('title', "BedShop | Product")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
        <div class="x_content"><br />
            <form class="form-horizontal " action="" method="">
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Tên Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Loại Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select>
                        	<option>--</option>
                        </select>
                    </div>
                </div>
               	<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Giá Sản Phẩm : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nhà Sản Xuất : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select>
                        	<option>--</option>
                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Hạn Sử Dụng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Ngày Nhập : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" class="form-control"  id="single_cal4" aria-describedby="inputSuccess2Status">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mô Tả : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Giới Thiệu : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Số Lượng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Trọng Lượng : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control" required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Màu Sắc : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px;">
                        <input type="radio"   required="required">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Hình Ảnh : </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="flie"  class="form-control" required="required">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 center">
                        <a class="btn btn-primary" href="{{ route('manage_list_product')}}">Cancel</a>
                        <button type="Submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop