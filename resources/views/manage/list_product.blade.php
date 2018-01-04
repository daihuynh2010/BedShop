@extends('master_manager')

@section('title', "BedShop | Product")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    	  <div class="x_title">
            <h4>Danh Sách Sản Phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content" >
                  <table id="datatable-checkbox" class="table table-striped table-bordered jambo_table bulk_action" ng-controller="SanPhamManageControllerNG">
                     <thead>
                        <tr class="headings">
                            <th class="column-title"> STT</th>
                            <th class="column-title"> Tên Sản Phẩm</th>
                            <th class="column-title"> Loại Sản Phẩm</th>
                            <th class="column-title"> Nhà Sản Xuất</th>
                            <th class="column-title"> Giá</th>
                            <th class="column-title"> Số Lượng</th>
                            <th class="column-title"> Hạn Sử Dụng</th>
                            <th class="column-title"> Khuyến Mãi</th>
                            <th class="column-title"> Mô Tả</th>
                            <th class="column-title"> Giới Thiệu</th>
                            <th class="column-title"> Trọng Lượng</th>
                            <th class="column-title"> Kích Thước</th>
                            <th class="column-title"> Đánh Giá</th>
                            <th class="column-title"> Action</th>
                            <th class="bulk-actions" colspan="8">
                              <a class="antoo" style="color:#fff; font-weight:500;"><span class="action-cnt"> </span></a>
                            </th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($sanphamList as $sanphamOB )
                        <tr >
                           <td>{{ $loop->index +1}}</td>
                           <td>{{ $sanphamOB->sp_ten }}</td>
                           <td>{{ $sanphamOB->Loai_SP->loaisp_ten }}</td>
                           <td>{{ $sanphamOB->NSX->nsx_ten }}</td>
                           <td>{{ number_format($sanphamOB->sp_gia) }}</td>
                           <td>{{ $sanphamOB->sp_soluong }}</td>
                           <td>{{ $sanphamOB->sp_hsd }}</td>
                           <td>{{ $sanphamOB->sp_km }} %</td>
                           <td>{{ $sanphamOB->sp_mota }}</td>
                           <td>{{ $sanphamOB->sp_gioithieu }}</td>
                           <td>{{ $sanphamOB->sp_trongluong }}</td>
                           <td>{{ $sanphamOB->sp_kichthuoc }}</td>
                           <td>{{ $sanphamOB->sp_danhgia }}</td>
                           <td class="action-column">
                              <a class="edit_user_button" ng-click="editproduct({{$sanphamOB->id_sp}})" ><i class="fa fa-edit" title="Chỉnh Sửa"></i></a>
                              <a class="delete_user_button" ng-click="deleteSP({{$sanphamOB->id_sp}})"><i class="fa fa-trash" title="Xóa"></i></a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
        </div>
    </div>
</div>
<!-- Action Area -->
<div class="col-md-12 col-sm-12 col-xs-12" >
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
          <a href="{{ route('export_list_sp') }}" class="btn btn-block btn-info">Xuất ra file Excel</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Action Area -->
@stop

@section('modal')
    <!-- Form confirm delete User -->
    <script type="text/ng-template" id="DeleteProduct.html" ng-controller="SanPhamManageControllerNG">
      <div class="modal-header">
          <div class="cancel pull-right">
          <span class="close" ng-click="cancel()">X</span>
          </div>
          <h2 class="modal-title">Xóa Sản Phẩm</h2>
      </div>
      <div class="modal-body">
          <span>Bạn có chắc chắn muốn xóa @{{sanphamDetail.sp_ten}}</span>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
          <button type="submit" class="btn btn-success" ng-click="ok()">Xoá</button>
      </div>
    </script>
      <!-- /Form confirm delete User -->
@stop