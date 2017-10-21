@extends('master_user')

@section('title', "BedShop | Change-Password")

@section('main_content')

<div class="clearfix">
</div>

<div class="container_fullwidth" style="background-color: #E8E8E8;padding-top: 0px;">
    <div class="container">
    	<div class="account_menu">
    		<h5>Quốc Đại</h5>
            @include('common_components.sidebar')
    	</div>
    	<div class="account_content">
    		<h4>Đổi Mật Khẩu</h4>
    		<div class="list_order_form_content" style="padding-top: 30px;padding-bottom: 30px;">
                <div class="row">
                    <label class="label_register" ><b>Mật khẩu Hiện Tại :</b></label>
                    <input class="input_register"  type="password"  required>
                </div>
                <div class="row">
                    <label class="label_register"><b>Mật Khẩu Mới :</b></label>
                    <input class="input_register"  type="password"  required>
                </div>
                <div class="row">
                    <label class="label_register"><b>Nhập Lại Mật Khẩu :</b></label>
                    <input class="input_register"  type="password"  required>
                </div>

                <div class="row">
                <span id="mess"></span>
                </div>
                <div class="row change_pass_row">
                    <button class="change_pass_button_huy" type="button">Hủy</button>
                    <button class="change_pass_button_luu" type="button">Lưu</button>
                </div>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop