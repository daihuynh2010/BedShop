@extends('master_user')

@section('title', "BedShop | Like")

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
    		<h4>Các Sản Phẩm Bạn Đã Thích</h4>
    		<div class="list_order_form_content">
    			<table class="list_order_table">
    				<thead>
    					<tr style="background: #F8F8FF">
    						<th class="list_order_table_th col-md-2">Mã Sản Phẩm</th>
    						<th class="list_order_table_th col-md-2">Tên Sản Phẩm</th>
    						<th class="list_order_table_th col-md-2">Giá</th>
    						<th class="list_order_table_th col-md-2">Ngày Thích</th>
                            <th class="list_order_table_th col-md-2">Tình trạng hàng</th>
    						<th></th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<th class="list_order_table_th col-md-2">3516</th>
    						<th class="list_order_table_th col-md-2">Đầm</th>
    						<th class="list_order_table_th col-md-2">500.000 VND</th>
                            <th class="list_order_table_th col-md-2">10/5/2016</th>
    						<th class="list_order_table_th col-md-2" style="color: red;">Còn Hàng</th>
    						<th class="list_order_table_th col-md-2" ><a href="#" style="float: right; margin-right: 15%;color: #1a9cb7;">Đăt Hàng Ngay</a></th>
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