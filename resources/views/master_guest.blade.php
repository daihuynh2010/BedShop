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
   </head>
    <body id="home">
      <div class="wrapper">
         <!-- header page -->
         <div class="header" >
            <div class="container">
               <div class="row" style=" padding-left: 5%; padding-right: 2%;"> 
                  <div class="col-md-2 col-sm-2 " style="padding: 0;">
                     <div class="logo" >
                        <a href="{{ route('guest_home_route') }}"><img src="{{URL ('images/logo.png') }}" alt="FlatShop"></a>
                     </div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-7 col-md-offset-1" style="padding: 0px" >
                              <div class="col-md-10" style="padding: 0px;">
                                 <input style="width: 100%" placeholder="Nhập sản phẩm hay thương hiệu ..." type="text" value="" name="search">
                              </div>
                              <div class="col-md-2" style="padding-top:2px;padding-bottom: 0px;padding-right: 5px;padding-left: 2px;">
                                 <input style="width: 100%;background-color: #FF3399" class="search-submit" type="submit" value="">
                              </div>
                           </div>
                           <div class="col-md-3 col-md-offset-1">
                              <ul class="btn btn-block usermenu">
                                 <li><a href="{{ route('guest_login_route') }}" id="LoginModal" class="log ">Đăng Nhập</a></li>
                                 <li><a href="{{ route('guest_register_route') }}" class="reg">Đăng Ký</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li class="option-cart">
                              <a href="#" class="cart-icon">cart <span class="cart_no">02</span></a>
                              <ul class="option-cart-item">
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="{{URL ('images/products/thum/products-01.png') }}" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">$30.00</p>
                                          <a href="#" class="remove"><img src="{{URL ('images/remove.png') }}" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="{{URL ('images/products/thum/products-02.png') }}" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">$30.00</p>
                                          <a href="#" class="remove"><img src="{{URL ('images/remove.png') }}" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li><span class="total">Total <strong>$60.00</strong></span><button class="checkout" onClick="location.href='#'">CheckOut</button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-collapse collapse navbar-menu">
                           <ul class="nav navbar-nav">
                              <li class="active"><a href="{{ route('guest_home_route') }}"  >Trang Chủ</a></li>
                              <li><a href="#">Thời Trang Nam</a></li>
                              <li><a href="#">Thời Trang Nữ</a></li>
                              <li><a href="#">Mỹ Phẩm</a></li>
                              <li><a href="#">Mới Nhất</a></li>
                              <li><a href="#">Khuyến Mãi</a></li>>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- main-content -->
          @yield('main_content')
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
      <!-- modal -->
       @yield('modals')
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
   </body>
</html>