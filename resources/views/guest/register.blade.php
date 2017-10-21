@extends('master_guest')

@section('title', "BedShop | Register")


@section('main_content')
<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
	<div class="container_login">
		<div class="left">
		    <h4 style="padding-left: 10px;"><strong>Tạo tài khoản mới</strong>	
		    </h4>
		    <hr class="in_lineblock"></hr>
		    
		    <form class="login_form">
		    	<div class="row container">
		    		<div class="row">
					    <label class="label_register"  ><b>Email :</b></label>
					    <input class="input_register" id="uname" type="Email" placeholder="Username" name="uname" required>
				    </div>
				    <div class="row">
					    <label class="label_register"  ><b>Tên :</b></label>
					    <input class="input_register" type="text" placeholder="Your Name" required>
				    </div>
				    <div class="row">
					    <label class="label_register"  ><b>Mật Khẩu :</b></label>
					    <input class="input_register" id="psw" type="password" placeholder="Password"  required>
					</div>
					<div class="row">
					    <label class="label_register"  >Nhập lại mật Khẩu :</label>
					    <input class="input_register" id="psw" type="password" placeholder="Comfim Password" required>
					</div>
					<div class="row">
					    <label 	   class="label_register"  >Địa chỉ nhận hàng :</label>
					    <textarea  class="input_register" style="height: 100px;" type="text" placeholder="Vui lòng nhập rõ địa chỉ"  required></textarea>
					</div>

					<div class="row">
				   		<span id="mess"></span>
					</div>
					<div class="row" style="padding-bottom: 15px;" >
					    <input type="checkbox" name="">
					    <span>Nhận thông tin khuyến mãi qua email</span>
					</div>
					<div class="row">
						<button class="stylelogin">Đăng Ký</button>
					</div>
				</div>
				
				
				
		    </form>
	   	</div>
	   	<div class="center">
	   		<p class="or_center">OR</p>
	   		<div class="inner"></div>
	   	</div>
	   	<div class="right">
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
	   	</div>
	</div>
</div>
@stop
