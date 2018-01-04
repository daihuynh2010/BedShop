
@extends('master_guest')

@section('title', "BedShop | Reset-Password")


@section('main_content')

<div class="clearfix"></div>
<div class="container_fullwidth" style="background:#DDDDDD">
    <h4 style="padding-left: 10%; font-weight: 400"><strong>Khôi Phục Mật Khẩu</strong></h4>
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    <form class="container_login" style="height: 300px; font-size: 14px;" ng-controller="ForgotPasswordControllerNG">
        <hr></hr>
        <div class="row">
            <label class="label_info" ><b>Email :</b></label>
            <input class="input_register" disabled ng-model="emailsendlink" type="Email" placeholder="Email"  required>
        </div>
        <div class="row">
            <label class="label_info" ><b>Mật Khẩu Mới :</b></label>
            <input class="input_register" id="psw_register" ng-model="pws_reset" type="password" placeholder="Pass Word"  required>
        </div>
        <div class="row">
            <label class="label_info" ><b>Nhập Lại Mật Khẩu :</b></label>
            <input class="input_register" id="confim_psw_register" ng-model="confim_pws_reset" type="password" placeholder="Confim Pass Word"  required>
        </div>
        <div class="row">
            <label class="" style="margin-left:35%; margin-bottom:15px;" id="register_mess"></label>
        </div>
        <div class="row">
            <button class="stylelogin" style="background-color: orange;margin-left: 25%;" ng-click="reset()">Reset</button>
            
        </div>
    </form> 

</div>

@stop