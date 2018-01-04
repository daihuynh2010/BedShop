@extends('master_manager')

@section('title', "BedShop | Statistical Order")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Tất Cả Các Đơn Hàng</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content" ng-controller="ThongKeDonHangControllerNG">
            <table id="class-list-table"class="center datatable table table-striped table-bordered jambo_table">
                <thead>
                    <tr class="headings">
                        <th class="column-title"> STT</th>
                        <th class="column-title"> Mã Đơn Hàng</th>
                        <th class="column-title"> Mã User</th>
                        <th class="column-title"> Số Điện Thọai</th>
                        <th class="column-title"> Tổng Sản Phẩm</th>
                        <th class="column-title"> Tổng Tiền</th>
                        <th class="column-title"> Địa Điểm Nhận Hàng</th>
                        <th class="column-title"> Cách Thanh Toán</th>
                        <th class="column-title"> Tình Trạng Đơn Hàng</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hoadonList as $hoadonOB)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $hoadonOB->id_hd }}</td>
                        <td>{{ $hoadonOB->id_user }}</td>
                        <td>{{ $hoadonOB->sdt }}</td>
                        <td>{{ $hoadonOB->tong_sp }}</td>
                        <td>{{ number_format($hoadonOB->tongtien) }}</td>
                        <td>{{ $hoadonOB->dd_giao_hang }}</td>
                        <td>{{ $hoadonOB->cach_thanh_toan }}</td>
                        <td>{{ $hoadonOB->tinh_trang_hang }}</td>
                    </tr>
                @endforeach
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
                    <a href="{{ route('export_list_hoadon') }}" class="btn btn-block btn-info">Xuất ra file Excel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Action Area -->
@stop