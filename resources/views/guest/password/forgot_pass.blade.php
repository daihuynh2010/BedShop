@extends('master_guest')

@section('title', "BedShop | Forgot-Password")


@section('main_content')
<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
	<h4 style="padding-left: 10%; font-weight: 400"><strong>Khôi Phục Mật Khẩu</strong></h4>
	@if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
	@endif
	<form class="container_login" style="height: 200px; font-size: 14px;" ng-controller="ForgotPasswordControllerNG">
	{{ csrf_field() }}
		<hr></hr>
		<div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
			<label class="label_info" ><b>Email :</b></label>
			@if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        	@endif                         
			<input class="input_register" ng-model="email_forgot" type="Email" placeholder="Email"  required>
		</div>
		<div class="row">
			<span ></span>
		</div>
		<div class="row">
			<button class="stylelogin" style="background-color: orange;margin-left: 25%;" ng-click="sendmail()">Gửi Email</button>
			<button class="stylelogin" >Login</button>
		</div>
	</form> 

</div>
@stop