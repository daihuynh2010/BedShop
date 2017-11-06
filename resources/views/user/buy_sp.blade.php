@extends('master_user')

@section('title', "BedShop | Buy")

@section('main_content')

<div class="clearfix">
</div>

<div class="container_fullwidth">
    <div class="container">
    	<div class="container_buy" >
    		<div class="ship_form col-md-7">
    			<div class="header_buy">
    				<h3 style="font-size: 16px;font-weight: 700">Địa chỉ giao hàng của quý khách</h3>
    			</div>
    			<div class="infor_buy">
    				<form class="login_form">
	    				<div class="row container">
				    		<div class="row">
							    <label class="label_register label_buy" ><b>Họ và Tên :</b></label>
							    <input class="input_register " type="text" placeholder="Họ & tên"  required>
						    </div>

						    <div class="row">
							    <label class="label_register label_buy" ><b>Địa chỉ giao hàng :</b></label>
							    <textarea class="input_register " style="height: 100px;" type="text" placeholder='Vui lòng điền CHÍNH XÁC "tầng, số nhà, đường" để tránh trường hợp đơn hàng bị hủy ngoài ý muốn'  required></textarea>
							   <!--  <label style="width: 20%; font-weight: 100"></label> -->
						    </div>

						    <div class="row">
							    <label class="label_register label_buy" ><b>Số điện thoại di động :</b></label>
							    <input class="input_register input_buy" type="text" placeholder="Số điện thoại liên lạc khi chúng tôi giao hàng"  required>
							    <!-- <label style="width: 20%; font-weight: 100"></label> -->
						    </div>

                            <div class="row">
                                 <label class="label_register label_buy" ><b>Phương thức thanh toán :</b></label>
                                 <select class="input_register input_buy" style="color: black">
                                     <option selected="selected">Thanh toán khi nhận hàng</option>
                                     <option>Thẻ ATM/Internet Banking</option>
                                 </select>
                            </div>
						   
							<div class="row col-md-offset-3">
							    <button class="stylelogin button_buy">ĐẶT HÀNG</button>
							</div>
						</div>
	    			</form>
    			</div>
    		</div>

    		<div class="title_form col-md-4">
    			<div class="header_buy">
    				<h3 style="font-size: 16px;font-weight: 700">Thông tin đơn hàng</h3>
    			</div>
    			<div class="order_container">
    				<table class="table_order">
    					<thead>
    						<tr style="border-bottom: 1px solid  #CFCFCF;">
    							<th class="table_order_left" >Tên sản phẩm</th>
    							<th class="table_order_center">Số lượng</th>
    							<th class="table_order_right">Giá</th>
    						</tr>
    					</thead>
    				</table>
    				<div class="infor_order">
    					<table class="table_infor_order">
    						<tbody>
    							<tr style="border-bottom: 1px solid  #CFCFCF;">
    								<td class="table_order_left">Đầm</td>
    								<td class="table_order_center">1</td>
    								<td class="table_order_right">450.000 VND</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    				<div class="ship_order">
    					<table class="table_ship_order" style="border-bottom: 1px solid  #CFCFCF;">
	    					<thead>
	    						<tr >
	    							<th class="table_order_left" >Số tiền</th>
	    							<th class="table_order_center"></th>
	    							<th class="table_order_right">450.000 VND</th>
	    						</tr>
	    						<tr style="color: #04bd00;border-bottom: 1px solid  #CFCFCF;">
	    							<th class="table_order_left">Phí vận chuyển</th>
	    							<th class="table_order_center"></th>
	    							<th class="table_order_right">15.000 VND</th>
	    						</tr>
	    						<tr >
	    							<th class="table_order_left" style="font-size: 16px;font-weight: 700">Tổng Cộng</th>
	    							<th class="table_order_center"></th>
	    							<th class="table_order_right" style="font-weight: 500;font-size: 16px;">465.000 VND</th>
	    						</tr>
	    					</thead>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div class="clearfix">
</div>
@stop