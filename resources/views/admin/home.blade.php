<!DOCTYPE html>
<html ng-app="bedshop_admin">
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="{{ URL ('images/favicon.png') }}"> <!-- icon title -->
      <title>FlatShop | Admin</title>
      <link href="{{ URL('css/bootstrap.css') }}" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="{{ URL ('css/font-awesome.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ URL ('css/flexslider.css') }}" type="text/css" media="screen"/>
      <link href="{{URL ('css/sequence-looptheme.css') }}" rel="stylesheet" media="all"/>
      <link href="{{URL ('css/style.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{URL ('css/custom.css') }}">
       <!-- Bootstrap -->
       <link href="{{ URL ('admin_design/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
       <!-- Font Awesome -->
       <link href="{{ URL ('admin_design/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
       <!-- NProgress -->
       <link href="{{ URL ('admin_design/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
       <!-- iCheck -->
       <link href="{{ URL ('admin_design/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
       <!-- Datatables -->
       <link href="{{ URL ('admin_design/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
       <link href="{{ URL ('admin_design/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
       <!-- bootstrap-progressbar -->
       <link href="{{ URL ('admin_design/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
             rel="stylesheet">
       <!-- JQVMap -->
       <link href="{{ URL ('admin_design/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
       <!-- bootstrap-daterangepicker -->
       <link href="{{ URL ('admin_design/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
       <!-- Jquery UI -->
       <link href="{{ URL ('admin_design/vendors/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
       <!-- Select2 -->
       <link href="{{ URL ('admin_design/vendors/select2/dist/css/select2.css') }}" rel="stylesheet">

       <!-- Custom Theme Style -->
       <link href="{{ URL ('admin_design/custom.css') }}" rel="stylesheet">
   </head>
   <body id="home" ng-controller="AdminControllerNG">
      <div class="wrapper"> 
         <!-- header page -->
         <div class="header" >
            <div class="container">
               <div class="row" style=" padding-left: 5%; padding-right: 2%; "> 
                  <div class="col-md-2 col-sm-2 " style="padding: 0;">
                     <div class="logo" >
                        <a href="{{ route('user_home_route') }}"><img src="{{URL ('images/logo.png') }}" alt="FlatShop"></a>
                     </div>
                  </div>
                  <div class="col-md-1 col-md-offset-9" style="padding: 30px 30px 0 0;">
                     <ul class="btn btn-block usermenu">
                        <li><a href="{{ route('logout') }}" class="reg">Đăng Xuất</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- main-content -->
         <div class="clearfix"></div>

         <div class="container_fullwidth" style="background-color: #E8E8E8;padding:30px 20px 30px 20px;">
            <div class="x_panel">
            <div class="panel_body">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <a id="UserAdd" class="btn btn-block btn-success"><i class="fa fa-plus"></i> Thêm Tài Khoản </a>      
                    </div>
                </div>
            </div>
            </div>
            <div class="x_panel"  >
               <div class="x_title">
                  <h4>Danh sách Các Tài Khoản</h4>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content" >
                  <table id="datatable-checkbox" class="table table-striped table-bordered jambo_table bulk_action">
                     <thead>
                        <tr class="headings">
                           <th></th>
                           <th class="column-title"> STT </th>
                           <th class="column-title"> Họ tên </th>
                           <th class="column-title"> Email </th>
                           <th class="column-title"> Địa Điểm Giao Hàng </th>
                           <th class="column-title"> Số Điểm Tích Lũy </th>
                           <th class="column-title"> Chức Vụ </th>
                           <th class="column-title"> Action </th>
                           <th class="bulk-actions" colspan="8">
                              <a class="antoo" style="color:#fff; font-weight:500;"><span class="action-cnt"> </span></a>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($userList as $userOB)
                        <tr >
                            <td>
                            <input type="checkbox" class="flat" name="table_records" />
                            </td>
                            <td> {{ $loop->index +1 }}</td>
                            <td> {{ $userOB->name }} </td>
                            <td> {{ $userOB->email }} </td>
                            <td> {{ $userOB->dd_giaohang_md }} </td>
                            <td> {{ $userOB->tich_diem }} </td>
                            @if($userOB->chuc_vu==3)
                            <td > Admin </td>
                            @endif
                            @if($userOB->chuc_vu==2)
                            <td > Quản Lý </td>
                            @endif
                            @if($userOB->chuc_vu==1)
                            <td > Thành Viên </td>
                            @endif
                            <td class="action-column">
                            <a class="edit_user_button" ng-click="edit({{$userOB->id}})" ><i class="fa fa-edit" title="Chỉnh Sửa"></i></a>
                            <a class="delete_user_button" ng-click="delete({{$userOB->id}})" ><i class="fa fa-trash" title="Xóa"></i></a>
                            <!-- <a class="send_mail_button" ><i class="fa fa-list" title="Gửi Email"></i></a> -->
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>

         <div class="clearfix"></div>
         <!--footer page -->
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="{{URL ('images/logo.png') }}" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>No. 01, Vo Van Ngan, TPHCM , Vietnam</p>
                        <p>Call Us : (084) 1900 1008</p>
                        <p>Email : michael@leebros.us</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
                     <input type="text" name="" placeholder="Type your email....">
                     <input type="submit" value="SignUp" class="button">
                  </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2012. Designed by <a href="#">Michael Lee</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- modal add User -->
      <div id="add_user_modal" class="modal_add_class" style="display: none;">
        <!-- Modal content -->
         <div class="modal-content_add_class">
            <div class="modal-header_add_class">
               <span class="close_add_class">&times;</span>
               <h2>Nhập Thông Tin Tài Khoản</h2>
            </div>
            <div class="modal-body_add_class">
               <div class="x_panel">
                  <div class="x_content"><br/>
                     <form class="form-horizontal" action="" method="POST">
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Email : </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control" ng-model="add.email" required >
                           </div>
                        </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Mật Khẩu : </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="password" class="form-control" ng-model="add.pws" required >
                        </div>
                     </div>
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Họ Tên : </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control" ng-model="add.hoten" required >
                           </div>
                        </div>
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Số Điện Thoại : </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" class="form-control" ng-model="add.sdt" required >
                           </div>
                        </div>
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Chức Vụ : </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="ChooseChucVu_Add" ng-init="add.chuc_vu='1'" ng-change="chucvu_add(add.chuc_vu)" ng-model="add.chuc_vu">
                                 <option value="1">Thành Viên</option>
                                 <option value="2">Quản Lý</option>
                                 <option value="3">Quản Trị Viên</option>
                              </select>
                           </div>
                        </div>
                        <div class="item form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Điểm tích lũy : </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" class="form-control" ng-model="add.tich_diem" required >
                            </div>
                        </div>
                        <div class="item form-group " >
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Địa Điểm Giao Hàng :</label>
                           <div class="col-md-6 col-sm-6 col-xs-12"> 
                              <input type="text" class="form-control" ng-model="add.dd_giaohang" required >
                           </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-xs-12 center">
                              <button type="button" class="btn btn-primary btncancel">Cancel</button>
                              <button type="button" class="btn btn-success" ng-click="add()">Submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="modal-footer_add_class"></div>
         </div>
      </div>
      <!--  Model Edit User -->
      <script type="text/ng-template" id="EditUser.html">
        <div class="modal-header" >
            <div class="cancel pull-right">
                <span class="close" ng-click="cancel()">X</span>
            </div>
            <h2 class="modal-title">Thông Tin Tài Khoản</h2>
        </div>
        <div class="modal-body">
            <div class="x_panel">
                    <div class="x_content"><br/>
                        <form class="form-horizontal" action="" method="POST">
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Email : </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" ng-model="user.email" required >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Họ Tên : </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" ng-model="user.name"  required >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Số Điện Thoại : </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" ng-model="user.sdt" required >
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Chức Vụ : </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <select  ng-if="user.chuc_vu==1" ng-init="chuc_vu='1'" ng-change="chucvu(chuc_vu)" ng-model="chuc_vu" >
                                    <option value="1" selected>Thành Viên</option>
                                    <option value="2">Quản Lý</option>
                                    <option value="3">Quản Trị Viên</option>
                                </select>
                                <select  ng-if="user.chuc_vu==2" ng-init="chuc_vu='2'" ng-change="chucvu(chuc_vu)" ng-model="chuc_vu">
                                    <option value="1" >Thành Viên</option>
                                    <option value="2" selected>Quản Lý</option>
                                    <option value="3">Quản Trị Viên</option>
                                </select>
                                <select ng-if="user.chuc_vu==3" ng-init="chuc_vu='3'" ng-change="chucvu(chuc_vu)" ng-model="chuc_vu">
                                    <option value="1" >Thành Viên</option>
                                    <option value="2" >Quản Lý</option>
                                    <option value="3" selected>Quản Trị Viên</option>
                                </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Điểm tích lũy : </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" class="form-control" ng-model="user.tich_diem" required >
                                </div>
                            </div>
                            <div class="item form-group " id="ChooseUser_Add">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Địa Điểm Giao Hàng :</label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                <input type="text" class="form-control" ng-model="user.dd_giaohang_md" required >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
            <button type="submit" class="btn btn-success" ng-click="ok()">Submit</button>
        </div>
      </script>
      <!-- Model Send Email -->
      <div id="send_mail_modal" class="modal_add_class" style="display: none;">
        <!-- Modal content -->
         <div class="modal-content_add_class">
            <div class="modal-header_add_class">
               <span class="close_add_class">&times;</span>
               <h2>Gửi Email Cho Thành Viên</h2>
            </div>
            <div class="modal-body_add_class">
               <div class="x_panel">
                  <div class="x_content"><br/>
                     <form class="form-horizontal" action="#" method="">
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Tiêu Đề :</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control" required value="Hello ">
                           </div>
                        </div>
                        <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-3">Nội Dung :</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea type="text" class="form-control" required ></textarea>
                           </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-xs-12 center">
                              <button type="button" class="btn btn-primary btncancel">Cancel</button>
                              <button id="btnSubmit" type="button" class="btn btn-success">Submit</button>
                           </div>
                        </div>
                     </form>
                 </div>
             </div>
            </div>
            <div class="modal-footer_add_class">
            </div>
        </div>
      </div>
       <!-- Form confirm delete User -->
       <script type="text/ng-template" id="DeleteUser.html">
        <div class="modal-header">
            <div class="cancel pull-right">
            <span class="close" ng-click="cancel()">X</span>
            </div>
            <h2 class="modal-title">Xóa Tài Khoản</h2>
        </div>
        <div class="modal-body">
            <span>Bạn có chắc chắn muốn xóa @{{userdelete.email}}</span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btncancel" ng-click="cancel()">Hủy</button>
            <button type="submit" class="btn btn-success" ng-click="ok()">Xoá</button>
        </div>
       </script>
      <!-- /Form confirm delete User -->

      <!-- bootstrap in angularjs -->
      <!-- <script src="{{URL ('app/lib/ui-bootstrap-tpls-2.5.0.js')}}"></script> -->
      <script src="{{ URL ('app/lib/ui-bootstrap-tpls-2.5.0.min.js')}}"></script>
      <script src="{{ URL ('app/lib/angular-sanitize.js')}}"></script>
      <script src="{{ URL ('app/lib/angular.js')}}"></script>
      <script src="{{ URL ('app/lib/angular-animate.js')}}"></script>
      <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>

      <!-- Bootstrap core JavaScript==================================================-->
      <script type="text/javascript" src="{{URL ('js/jquery-3.2.1.min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.easing.1.3.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.sequence-min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/custom.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/app.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
      <script src="{{URL ('js/jquery.flexslider.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/script.min.js') }}" ></script>
      <script type="text/javascript" src="{{URL ('js/jquery.elevatezoom.js') }}"></script>
      
      <!-- jQuery -->
      <script src="{{ URL ('admin_design/vendors/jquery/dist/jquery.min.js') }}"></script>
      <!--JQuery UI -->
      <script src="{{ URL ('admin_design/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
      <!-- Bootstrap -->
      <script src="{{ URL ('admin_design/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- FastClick -->
      <script src="{{ URL ('admin_design/vendors/fastclick/lib/fastclick.js') }}"></script>
     
      <!-- Chart.js -->
      <script src="{{ URL ('admin_design/vendors/Chart.js/dist/Chart.min.js') }}"></script>
      <!-- gauge.js -->
      <script src="{{ URL ('admin_design/vendors/gauge.js/dist/gauge.min.js') }}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{ URL ('admin_design/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
      <!-- iCheck -->
      <script src="{{ URL ('admin_design/vendors/iCheck/icheck.min.js') }}"></script>
      <!-- Datatables -->
      <script src="{{ URL ('admin_design/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
      <!-- Skycons -->
      <script src="{{ URL ('admin_design/vendors/skycons/skycons.js') }}"></script>
      <!-- Flot -->
      <script src="{{ URL ('admin_design/vendors/Flot/jquery.flot.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/Flot/jquery.flot.pie.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/Flot/jquery.flot.time.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/Flot/jquery.flot.stack.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/Flot/jquery.flot.resize.js') }}"></script>
      <!-- Flot plugins -->
      <script src="{{ URL ('admin_design/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/flot.curvedlines/curvedLines.js') }}"></script>
      <!-- DateJS -->
      <script src="{{ URL ('admin_design/vendors/DateJS/build/date.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ URL ('admin_design/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{ URL ('admin_design/vendors/moment/min/moment.min.js') }}"></script>
      <script src="{{ URL ('admin_design/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
      <!-- Select2 -->
      <script src="{{ URL ('admin_design/vendors/select2/dist/js/select2.js') }}"></script>
      <!-- TinyMCE -->
      <script src="{{ URL ('admin_design/vendors/tinymce/tinymce.min.js') }}"></script>
      <!-- js-xslx -->
      <!-- <script src="{{ URL ('admin_design/vendors/js-xlsx/dist/xlsx.full.min.js') }}"></script> -->
      <!-- Custom Theme Scripts -->
      <script src="{{ URL ('admin_design/custom.js') }}"></script>

      <!--AngularJS-->
      <script src="{{ URL ('app/lib/angular.min.js') }}"></script>
        <script>
            var UrlAngular="{{URL ('/')}}/";
        </script>
        <script src="{{ URL ('app/app.js') }}"></script>
   </body>
</html>