@extends('master')

@section('title', "BedShop | Register")

@section('logo')
<div class="logo"><a href="{{ route('guest_home_route') }}"><img src="{{URL ('images/logo.png') }}" alt="FlatShop"></a></div>
@stop

@section('information')
<li><a href="{{ route('guest_login_route') }}" id="LoginModal" class="log ">Đăng Nhập</a></li>
<li><a href="{{ route('guest_register_route') }}" class="reg">Đăng Ký</a></li>
@stop

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
				    <input class="input_register" id="uname" type="text" placeholder="Username" name="uname" required>
			    </div>
			    <div class="row">
				    <label class="label_register"  ><b>Tên :</b></label>
				    <input class="input_register" id="name" type="text" placeholder="Your Name" name="uname" required>
			    </div>
			    <div class="row">
				    <label class="label_register"  ><b>Mật Khẩu :</b></label>
				    <input class="input_register" id="psw" type="password" placeholder="Password" name="psw" required>
				</div>
				<div class="row">
				    <label class="label_register"  >Nhập lại mật Khẩu :</label>
				    <input class="input_register" id="psw" type="password" placeholder="Comfim Password" name="psw" required>
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
   		<div class="inner">
   		</div>
   	</div>
   	<div class="right">
   		<h4 style="padding-left: 10px;">Đăng Nhập Bằng</h4>
   		<hr class="in_lineblock"></hr>
   		<div class="social_inner" style="margin-top: 70px;">
   			<div class="fb_wrapper">
   				<img style=" width: 30%;" src="{{URL ('images/facebook_icon.png ') }}">
   				<span style="color: #3B5997;font-weight: 700;margin-left: 15px;text-align: center;font-size: 12px;">Facebook</span>
   			</div>
   			<div class="google_wrapper">
   				<img style=" width: 30%;" src="{{URL ('images/google_icon.png ') }}">
   				<span style="color: #ea4335;font-weight: 700;margin-left: 15px;text-align: center;font-size: 12px;">Google</span>
   			</div>
   		</div>
   	</div>
</div> 
@stop
