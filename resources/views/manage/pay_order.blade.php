@extends('master_manager')

@section('title', "BedShop | Pay Order")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Danh Sách Đơn Đang Chuyển</h4>
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
                        <th class="column-title"> Action</th>
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
                        <td class="action-column">
                            <a class="delete_user_button""><i class="fa fa-edit" title="Thanh Toán"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('modal')
    <!-- Modal delete New Order -->
    <div id="dialog-confirm-delete-class" class="jquery-ui-dialog" title="Thanh Toán Đơn Hàng?" hidden>
         <p><span class="ui-icon ui-icon-alert"></span>Bạn có chắc muốn <strong>Thanh Toán Đơn Hàng</strong> này ?</p>
    </div>
@stop