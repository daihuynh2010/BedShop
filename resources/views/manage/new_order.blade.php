@extends('master_manager')

@section('title', "FlatShop | New Order")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Danh Sách Đơn Hàng Mới</h4>
            <div class="clearfix"></div>
        </div> 
        <div class="x_content" ng-controller="ManagerControllerNG">
            <table id="class-list-table"class="tablelist center datatable table table-striped table-bordered jambo_table">
                <thead>
                    <tr class="headings" >
                        <th class="column-title"> STT</th>
                        <th class="column-title"> Mã Đơn Hàng</th>
                        <th class="column-title"> Mã User</th>
                        <th class="column-title"> Tổng Tiền</th>
                        <th class="column-title"> Địa Điểm Nhận Hàng</th>
                        <th class="column-title"> Cách Thanh Toán</th>
                        <th class="column-title"> Ngày xuất</th>
                        <th class="column-title"> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadonList as $hoadonOB )
                    <tr >
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{ $hoadonOB->id_hd }}</td>
                        <td>{{ $hoadonOB->id_user }}</td>
                        <td>{{ number_format($hoadonOB->tongtien)  }}</td>
                        <td>{{ $hoadonOB->dd_giao_hang }}</td>
                        <td>{{ $hoadonOB->cach_thanh_toan }}</td>
                        <td>{{ $hoadonOB->created_at }}</td>
                        <td class="action-column">
                        <!-- ng-click="xacnhan(hoadonOB.id_hd)" -->
                            <a class="confim_new_order_button" ng-click="xacnhan({{$hoadonOB->id_hd}})"><i class="fa fa-edit" title="Xác Nhận"></i></a>
                            <a class="delete_new_order_button" ng-click="xoa({{$hoadonOB->id_hd}})"><i class="fa fa-trash" title="Xóa"></i></a>
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
    <div ng-controller="ManagerControllerNG">
        <!-- Modal delete New Order -->
        <script type="text/ng-template" id="DeleteOrder.html">
            <div class="modal-header">
            <div class="cancel pull-right">
            <span class="close" ng-click="cancel()">X</span>
            </div>
            <h2 class="modal-title">Xóa Đơn Hàng</h2>
            </div>
            <div class="modal-body">
                <span>Bạn có chắc chắn muốn <strong>Xóa</strong> đơn hàng mã: @{{hoadon.id_hd}}</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
                <button type="submit" class="btn btn-success" ng-click="ok()">Xóa</button>
            </div>
        </script>
        <!-- Model Comfim New Order -->
        <script type="text/ng-template" id="ConfimOrder.html">
            <div class="modal-header">
            <div class="cancel pull-right">
            <span class="close" ng-click="cancel()">X</span>
            </div>
            <h2 class="modal-title">Xác Nhận Đơn Hàng</h2>
            </div>
            <div class="modal-body">
                <span>Bạn có chắc chắn muốn <strong>Xác Nhận</strong> đơn hàng mã: @{{hoadon.id_hd}}</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
                <button type="submit" class="btn btn-success" ng-click="ok()">Xác Nhận</button>
            </div>
        </script>
    </div>

   
@stop