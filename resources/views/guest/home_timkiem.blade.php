@extends('master_guest')

@section('title', "BedShop | Home")

@section('main_content')
<div class="clearfix"></div>
<div class="hom-slider" > 
            <!-- <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris show 2014</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="{{ URL ('images/slider-image-01.png') }}" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="{{ URL ('images/slider-image-02.png') }}" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2013</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="{{ URL ('images/slider-image-03.png') }}" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div> -->
            <!-- <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="{{ URL ('images/promotion-01.png') }}" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="{{ URL ('images/promotion-02.png') }}" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="{{ URL ('images/promotion-03.png') }}" alt=""></div>
                     </div>
                  </div>
               </div>
            </div> -->
</div>

<div class="clearfix"></div>
<div class="container_fullwidth" >
            <div class="container" ng-controller="SanPhamTimKiemByLoaiControllerNG">
               <div class="hot-products">
                  <h3 class="title">@{{colum}} / @{{nameloai}}</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#" style="display: inline;">&lt;</a><a style="display: inline;" id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li> 
                        <div class="row" >
                           <div class="col-md-3 col-sm-6" ng-repeat="sanphamOb in sanphamList">
                              <div class="products" onclick="location.href ='{{ route('user_detail_sp_route') }}';">
                                 <div class="offer">- @{{ sanphamOb.sp_km }} %</div>
                                 <div class="thumbnail"><a href=" {{ route('guest_detail_sp_route') }}"><img src="{{ URL ('images/products/small/products-01.png') }}" alt="Product Name"></a></div>
                                 <div class="productname">@{{ sanphamOb.sp_ten }} </div>
                                 <h4 class="price">@{{ sanphamOb.sp_gia -sanphamOb.sp_gia * sanphamOb.sp_km/100}}</h4>
                                 <div class="button_group"><button class="button add-cart" type="button" onclick="location.href ='{{ route('user_detail_sp_route') }}';">Mua Ngay</button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title">CÁCH THỨC THANH TOÁN</h3>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                                <div class="brand-logo"><img src="{{ URL ('images/envato.png') }}" alt=""></div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
</div>
@stop