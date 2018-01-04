@extends('master_user')

@section('title', "BedShop | Change-Information")

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
    		<h4>Thông tin cá nhân</h4>
    		<div class="list_order_form_content" style="padding-top: 30px;padding-bottom: 30px;" ng-controller="UserController">
                <div class="row">
                    <label class="label_info" ><b>Tên :</b></label>
                    <input class="input_register" ng-model="name" value="@{{ user.name }}" type="text"  required>
                </div>
                <div class="row">
                    <label class="label_info"><b>Email :</b></label>
                    <input class="input_register" ng-model="email"  type="Email"  required>
                </div>
                <div class="row">
                    <label class="label_info" ><b>Số Điện Thoại :</b></label>
                    <input class="input_register" ng-model="sdt"  type="text"  required>
                </div>
                <div class="row">
                    <label class="label_info"><b>Địa Chỉ Nhận Hàng :</b></label>
                    <input class="input_register" type="text" ng-model="dd_giaohang"  d  required>
                </div>

                <div class="row">
                <span id="mess"></span>
                </div>
                <div class="row change_info_row">
                    <button class="change_pass_button_huy" onclick="location.href='{{ route('user_info_route') }}'" type="button">Hủy</button>
                    <button class="change_pass_button_luu" onclick="location.href='{{ route('user_info_route') }}'" ng-click="update_info(user.id)" type="button">Lưu</button>
                </div>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop