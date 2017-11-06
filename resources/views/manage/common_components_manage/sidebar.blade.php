<div class="left_col scroll-view">
   <!--  <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title center"><img src="{{URL('images/banner.png')}}" class="sidebar-banner"></a>
    </div>

    <div class="clearfix"></div> -->

    <!-- menu profile quick info -->
    
    <!-- /menu profile quick info -->

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <ul class="nav side-menu" >
                <li style="float: none;">
                    <a style=" font-variant: normal;font-style: normal;"><i class="fa fa-graduation-cap"></i>Hóa Đơn<span
                                class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">
                        <li class="manage-child-menu"><a href="{{ route('manage_new_order') }}">Đơn Hàng Mới </a></li>
                        <li class="manage-child-menu"><a href="{{ route('manage_pay_order') }}">Thanh Toán Đơn Hàng</a></li><!--  Chốt đơn hàng khi nhận được tiền thanh toán -->
                        <li class="manage-child-menu"><a href="{{ route('manage_statistical_order') }}">Thống kê hóa đơn</a></li>
                    </ul>
                </li>
                <li style="float: none;">
                    <a><i class="fa fa-graduation-cap"></i>Sản Phẩm<span
                                class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">
                        <li class="manage-child-menu"><a href="{{ route('manage_list_product') }}">Danh Sách Sản Phẩm </a></li>
                        <li class="manage-child-menu"><a href="{{ route('manage_add_product') }}">Thêm Sản Phẩm</a></li>
                        <li class="manage-child-menu"><a href="#">Thêm Danh Sách Sản Phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-book"></i>Gửi Email Cho Thành Viên</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- sidebar menu -->

    
</div>
