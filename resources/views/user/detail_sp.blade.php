@extends('master_user')

@section('title', "FlatShop | Detail")

@section('main_content')

      <div class="clearfix">
      </div>
      <div class="container_fullwidth"  >
      <div class="container" >
        <div class="row">
          <div class="col-md-9" ng-controller="DetailSanPhamControllerNG">
            <div class="products-details">
            <div class="preview_image">
              <div class="preview-small">
                <img id="zoom_03" ng-src="@{{ URL_image }}medium/@{{ hinhsp_chinh.vitri_hinh }}" data-zoom-image="@{{ URL_image }}large/@{{ hinhsp_chinh.vitri_hinh }}" alt="">
              </div>
              <div class="thum-image">
                <ul id="gallery_01" class="prev-thum">
                    @foreach($hinhspLisp_orther as $hinhsp_orther)
                      <li style="height:40px;width:40px">
                        <a href=""  >
                          <img ng-src="@{{ URL_image }}thum/{{ $hinhsp_orther->vitri_hinh }}" alt="">
                        </a>
                      </li>
                      @endforeach
                </ul>
                <a class="control-left" id="thum-prev" href="javascript:void(0);">
                  <i class="fa fa-chevron-left">
                  </i>
                </a>
                <a class="control-right" id="thum-next" href="javascript:void(0);">
                  <i class="fa fa-chevron-right">
                  </i>
                </a>
              </div>
            </div>
              <div class="products-description" >
                <h3 class="name">@{{Detailsanpham.sp_ten}}</h3>
                <div class="row">
                  <div class="review_num col-md-2"  ng-switch="Detailsanpham.sp_danhgia">
                    <p class="rating" ng-switch-when="0">
                      <i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                    </p>
                    <p class="rating" ng-switch-when="1">
                      <i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                    </p>
                    <p class="rating" ng-switch-when="2">
                      <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                    </p>
                    <p class="rating" ng-switch-when="3">
                      <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                    </p>
                    <p class="rating" ng-switch-when="4">
                      <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i>
                    </p>
                    <p class="rating" ng-switch-when="5">
                      <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i>
                    </p>
                  </div>
                  <div class="review_num col-md-2" style="padding:0px;margin:0px;font-size:14px;">
                    @{{ bl_nx_yt.length }} đánh giá
                  </div>  
                </div>
                <p>
                  <span class=" light-red" ng-if="Detailsanpham.sp_soluong>0">
                    Còn @{{Detailsanpham.sp_soluong}} sản phẩm
                  </span>
                  <span class=" light-red" ng-if="Detailsanpham.sp_soluong<=0">
                    Hết Hàng
                  </span>
                </p>
                <p style="color: orange;font-size: 17px;">
                  Mua hàng tích 10 Gcoin
                </p>
                <p>
                  @{{Detailsanpham.sp_mota}}
                </p>
                <hr class="border">
                <div class="price">
                  <span class="new_price" >@{{ Detailsanpham.sp_gia -Detailsanpham.sp_gia * Detailsanpham.sp_km/100|number }} VNĐ</span>
                  <span class="old_price">@{{ Detailsanpham.sp_gia|number }} VNĐ</span>
                </div>
                <hr class="border">
                <div class="wided">
                  <div class="qty">
                    Số lượng &nbsp;&nbsp;: 
                    <input type="number" ng-model="soluong"/>
                  </div>
                  <button ng-if="isthich==0" ng-click="thich(Detailsanpham.id_sp,iduser,'1')" class="button favorite">
                    <i class="fa fa-heart-o">
                    </i>
                  </button>
                  <button ng-if="isthich==1" ng-click="thich(Detailsanpham.id_sp,iduser,'0')" class="button_like favorite">
                    <i class="fa fa-heart-o">
                    </i>
                  </button>
                  <div class="button_group">
                    <button  onclick="location.href ='{{ route('user_home_route') }}'" ng-click="dathang(iduser,Detailsanpham.id_sp,Detailsanpham.sp_gia -Detailsanpham.sp_gia * Detailsanpham.sp_km/100)" class="button" style="border-radius: 0px;background-color: orange" >
                      Thêm Vào Giỏ
                    </button>
                    <button  onclick="location.href ='{{ route('user_buy_sp_route') }}'" ng-click="dathang(iduser,Detailsanpham.id_sp,Detailsanpham.sp_gia -Detailsanpham.sp_gia * Detailsanpham.sp_km/100)" class="button" style="border-radius: 0px;background-color: orange" >
                      Đặt Hàng
                    </button>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <hr class="border">
                <div class="pull-right">
                  <span style="padding-right: 10px;font-size: 12px;">Chia sẻ với</span>
                  <img src="{{ URL ('images/share.png') }}" alt="" >
                </div>
              </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="tab-box">
              <div id="tabnav">
                <ul>
                  <li>
                    <a href="#Descraption">
                      Giới thiệu sản phẩm
                    </a>
                  </li>
                  <li>
                    <a href="#Reviews">
                      Đánh Giá
                    </a>
                  </li>
                  <li>
                    <a href="#tags">
                      Bình Luận
                    </a>
                  </li>
                </ul>
              </div>
              <div class="tab-content-wrap">
                <div class="tab-content" id="Descraption">
                  <p>
                     @{{Detailsanpham.sp_gioithieu}}
                  </p>
                </div>
                <div class="tab-content" id="Reviews">
                  <form>
                    <table>
                      <thead>
                        <tr>
                          <th>
                            1 star
                          </th>
                          <th>
                            2 stars
                          </th>
                          <th>
                            3 stars
                          </th>
                          <th>
                            4 stars
                          </th>
                          <th>
                            5 stars
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="radio" name="quality" ng-model="danhgiasp" value="1"></td>
                          <td><input type="radio" name="quality" ng-model="danhgiasp" value="2"></td>
                          <td><input type="radio" name="quality" ng-model="danhgiasp" value="3"></td>
                          <td><input type="radio" name="quality" ng-model="danhgiasp" value="4"></td>
                          <td><input type="radio" name="quality" ng-model="danhgiasp" value="5"></td>
                        </tr>
                      </tbody>
                    </table>
                    <div style="margin-left: 78%;">
                      <button class="change_pass_button_luu" ng-click="danhgia(Detailsanpham.id_sp,iduser)" >Đánh Giá</button>
                    </div>
                  </form>
                </div>
                
                <div class="tab-content" id="tags" >
                  <div style="margin-bottom: 20px;">
                    <h5 style="font-weight: 300;margin-bottom: 10px;"><strong>Bình Luận Về Sản Phẩm Này  </strong></h5>
                    <div style="width: 100%;padding-left: 5%">
                      <input style="width: 70%; border-radius: 0px;" ng-model="binhluanadd" type="text" >
                      <button class="change_pass_button_luu" style="width: 20%;" ng-click="addbinhluansp(Detailsanpham.id_sp,iduser)" >Bình Luận</button>
                    </div>
                  </div>
                  <h6 style="border-bottom:  2px solid #F1F1F1;margin-bottom: 20px;padding-bottom: 10px;">Các bình luận khác về sản phẩm</h6>
                  <div class="review" style="border-bottom:  1px solid  #F1F1F1;" ng-repeat="bl_nx_yt in bl_nx_yt">
                    <!-- hiện đánh giá -->
                    <div ng-switch="bl_nx_yt.pivot.danh_gia">
                      <p class="rating" ng-switch-when="0">
                        <span class="light-red">Chưa đánh giá cho sản phẩm này</span>
                      </p>
                      <p class="rating" ng-switch-when="1">
                        <i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                      </p>
                      <p class="rating" ng-switch-when="2">
                        <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                      </p>
                      <p class="rating" ng-switch-when="3">
                        <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i><i class="fa fa-star-o gray"></i>
                      </p>
                      <p class="rating" ng-switch-when="4">
                        <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star-o gray"></i>
                      </p>
                      <p class="rating" ng-switch-when="5">
                        <i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i><i class="fa fa-star light-red"></i>
                      </p>
                    </div>
                      <h4 class="reviewer">
                        @{{bl_nx_yt.email}}
                      </h4>
                      <br>
                      <p class="review-date">
                        @{{bl_nx_yt.pivot.created_at}}
                      </p>
                      <p>
                      @{{bl_nx_yt.pivot.noi_dung}}
                      </p>
                  </div>
                </div>
               

              </div>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="col-md-3" >
            <div class="special-deal leftbar" ng-controller="HoaDonControllerNG">
              <h4 class="title">
                Sản phẩm bạn đã chọn
              </h4>
              <div class="special-item"  ng-repeat="detail_hoadon in detail_hoadonList">
                <div class="product-image">
                  <a >
                  <img ng-repeat="hinhOB in hinhspList" ng-if="hinhOB.hinh_idsp==detail_hoadon.pivot.id_sp" ng-src="@{{ URL_image }}thum/@{{ hinhOB.vitri_hinh }}" alt="">
                  </a>
                </div>
                <div class="product-info" style="width:50%;float:left">
                  <p>Tên Sản Phẩm:
                    <span class="light-red"> @{{ detail_hoadon.sp_ten }}</span>
                  </p>
                  <p>Size: <span class="light-red">@{{ detail_hoadon.sp_kichthuoc }}</span></p>
                  <p >
                  Giá: <span class="light-red">@{{ (detail_hoadon.sp_gia -detail_hoadon.sp_gia * detail_hoadon.sp_km/100)*detail_hoadon.pivot.so_luong |number }}</span>
                  </p>
                </div>
                <div class="right" style="width:15%;float:right">
                  <a href="" class="remove" ng-click="removeSP(detail_hoadon.id_sp,iduser)"><img src="{{URL ('images/remove.png') }}" alt=""></a>
                </div>                
              </div>
            </div>
           
            <div class="clearfix">
            </div>
           
            <div class="clearfix">
            </div>
          </div>
        </div>
        
            <div class="clearfix">
            </div>
            <div id="productsDetails" class="hot-products" ng-controller="SanPhamTimKiemByLoaiControllerNG">
              <h3 class="title">
                Bạn có thể thích những sản phẩm này
              </h3>
              <div class="control">
                <a  class="prev" href="">
                  &lt;
                </a>
                <a  class="next" href="">
                  &gt;
                </a>
              </div>
              <ul id="hot">
              @php $i=0; @endphp
              @foreach ($sanphamList as $sanphamOb)
                    @if($i==0)
                    <li>
                        <div class="row" >
                    @endif
                       <div class="col-md-3 col-sm-6">
                          <div class="products" ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})">
                             <div class="offer" >- {{ $sanphamOb->sp_km }} %</div>
                             <div class="thumbnail">
                                <a href=" " ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})">
                                    @foreach($hinhspList as $hinhOB)
                                        @if($hinhOB->hinh_idsp==$sanphamOb->id_sp)
                                    <img ng-src="@{{ URL_image }}small/{{ $hinhOB->vitri_hinh }}" >
                                        @endif
                                    @endforeach
                                </a>
                             </div>
                             <div class="productname" >{{ $sanphamOb->sp_ten }} </div>
                             <h4 class="price" >{{ $sanphamOb->sp_gia - $sanphamOb->sp_gia * $sanphamOb->sp_km/100 }}</h4>
                             <div class="button_group">
                                 <button class="button add-cart" ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})" type="button" >Mua Ngay</button>

                             </div>
                          </div>
                       </div>
                       @if($i==3)
                       </div>
                    </li>
                       @php $i=0; @endphp
                    @else
                       @php $i++; @endphp
                    @endif
                @endforeach
              </ul>
            </div>
        <div class="clearfix">
        </div>
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
      <div class="clearfix">
      </div>
@stop