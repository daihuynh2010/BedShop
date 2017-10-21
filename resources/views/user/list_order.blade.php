@extends('master_user')

@section('title', "BedShop | Order")

@section('main_content')

<div class="clearfix">
</div>

<div class="container_fullwidth" style="background-color: #E8E8E8;padding-top: 0px;">
    <div class="container">
    	<div class="account_menu">
    		<h5>Quốc Đại</h5>
            @include('common_components.sidebar')
    	</div>
    	<div class="account_content">
    		<h4>Các Đơn Hàng Đã Đặt</h4>
    		<div class="list_order_form_content">
    			<table class="list_order_table">
    				<thead>
    					<tr style="background: #F8F8FF">
    						<th class="list_order_table_th col-md-2">Mã Đơn Hàng</th>
    						<th class="list_order_table_th col-md-2">Ngày Đặt Hàng</th>
    						<th class="list_order_table_th col-md-2">Tổng Tiền</th>
    						<th class="list_order_table_th col-md-2">Tình Trạng Đơn Hàng</th>
    						<th></th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<th class="list_order_table_th col-md-2">16518</th>
    						<th class="list_order_table_th col-md-2">10/5/2017</th>
    						<th class="list_order_table_th col-md-2">500.000 VND</th>
    						<th class="list_order_table_th col-md-2" style="color: red;">Thành Công</th>
    						<th class="list_order_table_th col-md-4" ><a href="{{ route('user_follow_order_route') }}" style="float: right; margin-right: 15%;color: #1a9cb7;">Theo Dõi Đơn Hàng</a></th>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop