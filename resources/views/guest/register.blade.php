@extends('master_guest')

@section('title', "FlatShop | Register")


@section('main_content')
<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
	<div class="container_login">
		<div class="left">
		    <h4 style="padding-left: 10px;"><strong>Tạo tài khoản mới</strong>	
		    </h4>
		    <hr class="in_lineblock"></hr>
		    
		    <form class="login_form" ng-controller="RegisterControllerNG">
		    	<div class="row container">
					<div class="row">
					    <label class="label_register"  ><b>Họ và Tên :</b></label>
					    <input class="input_register" id="name" ng-model="taikhoan.name" type="text" placeholder="Họ và Tên"  required>
				    </div>
					<div class="row">
					    <label class="label_register"  ><b>Số Điện Thoại :</b></label>
					    <input class="input_register" id="sdt" ng-model="taikhoan.sdt" type="number" placeholder="Số Điện Thoại"  required>
				    </div>
		    		<div class="row">
					    <label class="label_register"  ><b>Email :</b></label>
					    <input class="input_register" id="email" ng-model="taikhoan.email" type="Email" placeholder="Username"  required>
				    </div>
				    <div class="row">
					    <label class="label_register"  ><b>Mật Khẩu :</b></label>
					    <input class="input_register" id="psw_register" type="password" ng-model="taikhoan.pws" placeholder="Password"  required>
					</div>
					<div class="row">
					    <label class="label_register"  >Nhập lại mật Khẩu :</label>
					    <input class="input_register" id="confim_psw_register" type="password" placeholder="Comfim Password" required>
					</div>
					<div class="row">
				   		<span id="register_mess"></span>
					</div>
					<div class="row">
					    <label 	   class="label_register"  >Địa chỉ nhận hàng :</label>
					    <textarea  class="input_register"  style="height: 50px;" ng-model="taikhoan.ddnhanhang" type="text" placeholder="Vui lòng nhập rõ địa chỉ"  required></textarea>
					</div>

					<div class="row" style="padding-bottom: 15px;" >
					    <input type="checkbox" name="">
					    <span>Nhận thông tin khuyến mãi qua email</span>
					</div>
					<div class="row">
						<button class="stylelogin" ng-click="register()">Đăng Ký</button>
					</div>
				</div>
		    </form>
	   	</div>
	   	<div class="center">
	   		<!-- <p class="or_center">OR</p> -->
			   <p class="or_center"></p>
	   		<div class="inner"></div>
	   	</div>
	   	<!-- <div class="right">
	   		<h4 style="padding-left: 10px;">Đăng Nhập Bằng</h4>
	   		<hr class="in_lineblock"></hr>
	   		<div class="social_inner">
	   			<div class="fb_wrapper">
	   				<a href="" >
		   				<img style=" width: 30%;" src="{{URL ('images/facebook_icon.png ') }}">
		   				<span style="color: #3B5997;font-weight: 700;margin-left: 15px;text-align: center;font-size: 12px;">Facebook</span>
	   				</a>
	   			</div>
	   			<div class="google_wrapper">
	   				<a href="">
		   				<img style=" width: 30%;" src="{{URL ('images/google_icon.png ') }}">
		   				<span style="color: #ea4335;font-weight: 700;margin-left: 15px;text-align: center;font-size: 12px;">Google</span>
	   				</a>
	   			</div>
	   		</div>
	   	</div> -->
	</div>
</div>
@stop
