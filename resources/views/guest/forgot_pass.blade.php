@extends('master_guest')

@section('title', "FlatShop | Forgot-Password")


@section('main_content')
<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
	<h4 style="padding-left: 10%; font-weight: 400"><strong>Khôi Phục Mật Khẩu</strong></h4>
	<div class="container_login" style="height: 200px; font-size: 14px;">
		<hr></hr>
		<div class="row">
			<label class="label_info" ><b>Email :</b></label>
			<input class="input_register" type="Email" placeholder="Email"  required>
		</div>
		<div class="row">
			<span ></span>
		</div>
		<div class="row">
			<button class="stylelogin" style="background-color: orange;margin-left: 25%;">Reset</button>
		</div>
	</div> 

</div>
@stop