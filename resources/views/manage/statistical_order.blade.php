@extends('master_manager')

@section('title', "BedShop | Statistical Order")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Tất Cả Các Đơn Hàng</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="class-list-table"class="center datatable table table-striped table-bordered jambo_table">
                <thead>
                    <tr class="headings">
                        <th class="column-title"> STT</th>
                        <th class="column-title"> Mã Đơn Hàng</th>
                        <th class="column-title"> Mã User</th>
                        <th class="column-title"> Tổng Tiền</th>
                        <th class="column-title"> Địa Điểm Nhận Hàng</th>
                        <th class="column-title"> Cách Thanh Toán</th>
                        <th class="column-title"> Tình Trạng Đơn Hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Action Area -->
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="panel_body">
            <div class="row">
                <div class="col-md-2 col-md-offset-10 col-sm-2 col-sm-offset-1 col-xs-6">
                    <a href="#" class="btn btn-block btn-info">Xuất ra file Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Action Area -->
@stop