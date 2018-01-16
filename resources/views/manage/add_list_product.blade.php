@extends('master_manager')

@section('title', "FlatShop | Product")

@section('main_content')

<div class="col-md-12 col-sm-12 col-xs-12" >
	<div class="x_panel">
        <div class="x_content"><br />
            <form action="{{ route('post_list_sanpham') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-offset-1 col-md-9 col-sm-6 col-xs-12">
                        <input type="file" name="import" class="form-control" />
                        <a href="{{ URL ('file/mau-import-san-pham.xlsx')}}" download>File import mẫu</a>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <button type="submit"  class="btn btn-success btn-block">Load</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h4>Xem trước danh sách</h4>
        </div>
        <div class="x_content">
            <div class="col-xs-12">
                @if(isset($errors) && count($errors) > 0)
                <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#show-errors">
                        THÔNG TIN LỖI
                        <span style="background-color: #fff; border-radius: 50%; color: #000; padding: 3px;">
                            {{ count($errors) }}
                        </span>
                    </button>
                    <div class="modal fade" id="show-errors">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-red">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">THÔNG TIN LỖI</h4>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        @foreach($errors as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div>
                <table id="datatable-checkbox" class="table table-striped table-bordered jambo_table bulk_action" >
                        <thead>
                            <tr>
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
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($sanphamList) && count($sanphamList > 0))
                        @php
                        $count = 0;;
                        $loaisp_name_arr = array_values($loaisp_name);
                        $nsx_name_arr = array_values($nsx_name);
                        @endphp
                        @foreach($sanphamList as $sanphamOB)
                        <tr>
                            <td>{{ $loop->index +1}}</td>
                           <td>{{ $sanphamOB->sp_ten }}</td>
                           <td>{{ $loaisp_name_arr[$count] or $sanphamOB->sp_idloai }}</td>
                           <td>{{ $nsx_name_arr[$count] or $sanphamOB->sp_idnsx }}</td>
                           <td>{{ number_format($sanphamOB->sp_gia) }}</td>
                           <td>{{ $sanphamOB->sp_soluong }}</td>
                           <td>{{ $sanphamOB->sp_hsd }}</td>
                           <td>{{ $sanphamOB->sp_km }} %</td>
                           <td>{{ $sanphamOB->sp_mota }}</td>
                           <td>{{ $sanphamOB->sp_gioithieu }}</td>
                           <td>{{ $sanphamOB->sp_trongluong }}</td>
                           <td>{{ $sanphamOB->sp_kichthuoc }}</td>
                           <td>{{ $sanphamOB->sp_danhgia }}</td>
                        </tr>
                        @php
                        $count++;
                        @endphp
                        @endforeach
                        @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@if(isset($sanphamList) && count($errors) == 0)
<form action="{{ route('submit_list_sanpham')}}" method="POST">
    {{ csrf_field() }}
    @foreach($sanphamList as $sanpham)
    <input type="hidden" name="sp_ten[]" value="{{ $sanpham->sp_ten }}">
    <input type="hidden" name="sp_idloai[]" value="{{ $sanpham->sp_idloai }}">
    <input type="hidden" name="sp_gia[]" value="{{ $sanpham->sp_gia }}">
    <input type="hidden" name="sp_idnsx[]" value="{{ $sanpham->sp_idnsx }}">
    <input type="hidden" name="sp_soluong[]" value="{{ $sanpham->sp_soluong }}">
    <input type="hidden" name="sp_hsd[]" value="{{ $sanpham->sp_hsd }}">
    <input type="hidden" name="sp_km[]" value="{{ $sanpham->sp_km }}">
    <input type="hidden" name="sp_mota[]" value="{{ $sanpham->sp_mota }}">
    <input type="hidden" name="sp_gioithieu[]" value="{{ $sanpham->sp_gioithieu }}">
    <input type="hidden" name="sp_trongluong[]" value="{{ $sanpham->sp_trongluong }}">
    <input type="hidden" name="sp_kichthuoc[]" value="{{ $sanpham->sp_kichthuoc }}">
    <input type="hidden" name="sp_danhgia[]" value="{{ $sanpham->sp_danhgia }}">
    @endforeach
    <div class="row">
        <div class="col-md-2 pull-right">
            <button class="btn btn-block btn-success" type="submit" id="submit-list">Lưu và Thoát</button>
        </div>
    </div>
</form>
@endif

@stop