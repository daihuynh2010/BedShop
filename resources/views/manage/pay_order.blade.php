@extends('master_manager')

@section('title', "BedShop | Pay Order")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Danh Sách Đơn Đang Chuyển</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content" ng-controller="ThanhToanDonHangControllerNG">
            <table id="class-list-table"class="center datatable table table-striped table-bordered jambo_table">
                <thead>
                    <tr class="headings">
                        <th class="column-title"> STT</th>
                        <th class="column-title"> Mã Đơn Hàng</th>
                        <th class="column-title"> Mã User</th>
                        <th class="column-title"> Tổng Tiền</th>
                        <th class="column-title"> Địa Điểm Nhận Hàng</th>
                        <th class="column-title"> Cách Thanh Toán</th>
                        <th class="column-title"> Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($hoadonList as $hoadonOB)
                    <tr >
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{ $hoadonOB->id_hd }}</td>
                        <td>{{ $hoadonOB->id_user }}</td>
                        <td>{{ number_format($hoadonOB->tongtien) }}</td>
                        <td>{{ $hoadonOB->dd_giao_hang }}</td>
                        <td>{{ $hoadonOB->cach_thanh_toan }}</td>
                        <td class="action-column">
                            <a class="delete_user_button" ng-click="thanhtoan({{$hoadonOB->id_hd}})"><i class="fa fa-edit" title="Thanh Toán"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('modal')
    <!-- Modal Kết Thúc Đơn Hàng -->
    <div ng-controller="ThanhToanDonHangControllerNG">
        <script type="text/ng-template" id="ThanhToan.html">
            <div class="modal-header">
            <div class="cancel pull-right">
            <span class="close" ng-click="cancel()">X</span>
            </div>
            <h2 class="modal-title">Thanh Toán Đơn Hàng</h2>
            </div>
            <div class="modal-body">
                <span>Bạn có chắc chắn muốn <strong>Thanh Toán</strong> đơn hàng có mã: @{{hoadon.id_hd}}</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
                <button type="submit" class="btn btn-success" ng-click="ok()">Thanh Toán</button>
            </div>
        </script>
    </div>
@stop