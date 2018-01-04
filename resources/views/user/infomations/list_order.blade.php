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
    		<div class="list_order_form_content" ng-controller="HoaDonControllerNG">
    			<table class="list_order_table">
    				<thead>
    					<tr style="background: #F8F8FF">
    						<th class="list_order_table_th col-md-2">Mã Đơn Hàng</th>
    						<th class="list_order_table_th col-md-2">Ngày Đặt Hàng</th>
    						<th class="list_order_table_th col-md-2">Tổng Tiền</th>
    						<th class="list_order_table_th col-md-2">Tình Trạng Đơn Hàng</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr ng-repeat="donhang in donhangList">
    						<th class="list_order_table_th col-md-2">@{{ donhang.id_hd }}</th>
    						<th class="list_order_table_th col-md-2">@{{ donhang.updated_at }}</th>
    						<th class="list_order_table_th col-md-2">@{{ donhang.tongtien }} VNĐ</th>
    						<th class="list_order_table_th col-md-2" style="color: red;">@{{ donhang.tinh_trang_hang }}</th>
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