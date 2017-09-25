@extends('master')

@section('title', "BedShop | Login")

@section('information')
<li><a id="LoginModal" class="log ">Login</a></li>
<li><a class="reg">Register</a></li>
@stop

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
				    <label style="width: 12% ;text-align: right;"><b>Email :</b></label>
				    <input id="uname" type="text" placeholder="Enter Username" name="uname" required>
			    </div>
			    <div class="row">
				    <label style="width: 12%;text-align: right;"><b>Mật Khẩu :</b></label>
				    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
				</div>

				<div class="row">
			   	<span id="mess"></span>
				</div>
				<div class="row">
				    <button class="stylelogin">Login</button>
				</div>
			</div>
			
			<div class="container" >
			    <span > 
			    	<a class="forgot_pass" href="#">Forgot password?</a>
			      	/
			    	<a class="forgot_pass" href="#">Register</a>
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