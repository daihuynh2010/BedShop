@extends('master_manager')

@section('title', "BedShop | Product")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	<div class="x_title">
            <h4>Danh Sách Sản Phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
             <table id="datatable-checkbox" class="table table-striped table-bordered jambo_table bulk_action">
                     <thead>
                        <tr class="headings">
                            <th></th>
                            <th class="column-title"> STT</th>
                            <th class="column-title"> Tên Sản Phẩm</th>
                            <th class="column-title"> Loại Sản Phẩm</th>
                            <th class="column-title"> Nhà Sản Xuất</th>
                            <th class="column-title"> Giá</th>
                            <th class="column-title"> Số Lượng</th>
                            <th class="column-title"> Hạn Sử Dụng</th>
                            <th class="column-title"> Action</th>
                            <th class="bulk-actions" colspan="8">
                              <a class="antoo" style="color:#fff; font-weight:500;"><span class="action-cnt"> </span></a>
                            </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <input type="checkbox" class="flat" name="table_records" />
                           </td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td class="action-column">
                              <a class="edit_user_button" href="#" ><i class="fa fa-edit" title="Chỉnh Sửa"></i></a>
                              <a class="delete_user_button" href="#"><i class="fa fa-trash" title="Xóa"></i></a>
                           </td>
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
        <div class="col-md-2 col-sm-2 col-xs-6">
          <a href="{{ route('manage_add_product') }}" class="btn btn-block btn-success"><i class="fa fa-user"></i> Thêm 1 Sản Phẩm </a>
        </div>
        <div class="col-md-2 col-md-offset-1 col-sm-2 col-xs-6">
          <a href="#" class="btn btn-block btn-success"><i class="fa fa-users"></i> Nhập file Sản Phẩm </a>
        </div>                       
        <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-6">
          <a href="#" class="btn btn-block btn-danger" disabled><i class="fa fa-trash"></i> Xóa Sản Phẩm được chọn </a>
        </div>
        <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-6">
          <a href="#" class="btn btn-block btn-info">Xuất ra file Excel</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Action Area -->
@stop

@section('modal')
    <!-- Form confirm delete User -->
      <div id="dialog-confirm-delete-class" class="jquery-ui-dialog" title="Xóa Sản Phẩm?" hidden>
         <p><span class="ui-icon ui-icon-alert"></span>Bạn có chắc muốn <strong>Xóa Sản Phẩm</strong> này ?</p>
      </div>
      <!-- /Form confirm delete User -->
@stop