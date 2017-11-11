<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="{{ URL ('images/favicon.png') }}"> <!-- icon title -->
      <title> @yield('title')</title>
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
   <body id="home">
      <!-- <app-root>Loading.....</app-root> -->
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
                        <li><a href="{{ route('guest_home_route') }}" class="reg">Đăng Xuất</a></li>
                     </ul>
                  </div>
               </div>
            </div>
          </div>
         <!-- main-content -->
          <div class="clearfix"></div>

          <div class="container_fullwidth" style="background-color: #E8E8E8;padding: 0;">
            <div class="nav-md">
              <div class="container body">
                <div class="main_container">
                  <div class="col-md-3 left_col">
                      @include('manage.common_components_manage.sidebar')
                  </div>
                  <!-- page content -->
                  <div class="right_col" role="main" >
                      @yield('main_content')
                  </div>
                  <!-- page content -->
                </div>
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
      @yield('modal')
      <!-- Bootstrap core JavaScript==================================================-->
      <script type="text/javascript" src="{{URL ('js/jquery-1.10.2.min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.easing.1.3.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.sequence-min.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/custom.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/app.js') }}"></script>
      <script type="text/javascript" src="{{URL ('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
      <script defer src="{{URL ('js/jquery.flexslider.js') }}"></script>
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
      <!-- Custom Theme Scripts -->
      <script src="{{ URL ('admin_design/custom.js') }}"></script>
      
   </body>
</html>