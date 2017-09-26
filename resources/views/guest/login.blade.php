@extends('master_guest')

@section('title', "BedShop | Login")


@section('main_content')
<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
<div class="container_login">
	<div class="left">
	    <h4 style="padding-left: 10px;"><strong>Bạn đã có tài khoản</strong>	
	    </h4>
	    <hr class="in_lineblock"></hr>
	    
	    <form class="login_form">
	    	<div class="row container">
	    		<div class="row">
				    <label class="label_register" ><b>Email :</b></label>
				    <input class="input_register" id="uname" type="text" placeholder="Username" name="uname" required>
			    </div>
			    <div class="row">
				    <label class="label_register"><b>Mật Khẩu :</b></label>
				    <input class="input_register" id="psw" type="password" placeholder="Password" name="psw" required>
				</div>

				<div class="row">
			   	<span id="mess"></span>
				</div>
				<div class="row">
				    <button class="stylelogin">Đăng Nhập</button>
				</div>
			</div>
			
			<div class="container" >
			    <span > 
			    	<a class="forgot_pass" href="#">Quên mật khẩu?</a>
			      	/
			    	<a href="{{ route('guest_register_route') }}" class="forgot_pass" href="#">Đăng Ký</a>
			    </span>
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


@stop