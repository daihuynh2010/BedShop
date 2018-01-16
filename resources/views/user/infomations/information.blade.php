@extends('master_user')

@section('title', "FlatShop | Information")

@section('main_content')

<div class="clearfix">
</div>

<div class="container_fullwidth" style="background-color:  #DDDDDD;padding-top: 0px;">
    <div class="container">
    	<div class="account_menu">
    		<h5>Quốc Đại</h5>
            @include('user.common_components_user.sidebar')
    	</div>

    	<div class="account_content">
    		<h4>Quản lý tài khoản</h4>
    		<div class="account_form_content" ng-controller="UserController"> 
    			<div class="row info_change">
    				<h5 class="col-md-9" style="font-weight: 400">Thông tin cá nhân</h5>
    				<a class="col-md-3 " href="{{ route('user_change_info_route') }}" style="padding-left: 85px;">CHỈNH SỬA THÔNG TIN</a>
    			</div>
    			<div class="row container">
    				 <div class="row">
					    <label class="label_info"  ><strong>Tên :</strong></label>
					    <p class="input_info" type="text" value="" disabled="true" >@{{ user.name }}</p>
				    </div>
		    		<div class="row">
					    <label class="label_info"  ><strong>Email :</strong></label>
					    <p class="input_info" type="text" value="" disabled="true">@{{ user.email }}</p>
				    </div>
				    <div class="row">
				    	<label class="label_info"  ><strong>Địa chỉ nhận hàng mặc đinh :</strong></label>
					    <p class="input_info" type="text" value="" disabled="true">@{{ user.dd_giaohang_md }}</p>
				    </div>
				</div>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop