@extends('master_user')

@section('title', "BedShop | Follow-Order")

@section('main_content')

<div class="clearfix">
</div>

<div class="container_fullwidth" style="background-color:  #DDDDDD;padding-top: 0px;">
    <div class="container">
    	<div class="account_menu">
    		<h5>Quốc Đại</h5>
            @include('common_components.sidebar')
    	</div>

    	<div class="account_content">
    		<h4>Chi Tiết Đơn Hàng</h4>
    		<div class="follow_order_form_head">
                <table class="follow_order_table">
                    <thead>
                        <tr>
                            <th class="list_order_table_th col-md-4">Đơn Hàng: 16518</th>
                            <th class="list_order_table_th col-md-4" style="text-align: center;">Ngày Đặt: 10/5/2017</th>
                            <th class="list_order_table_th col-md-4" style="text-align: right;">Tổng Tiền: 500.000 VND</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="follow_order_form_content">
                <div class="status_order">Tình trạng đơn hàng</div>
                <div class="follow_order_info">
                    <div class="follow_order_detail_progress">
                        <div class="follow_order_detail_state">
                            <div class="follow_order_detail_state_name">Đang Xử Lý</div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop