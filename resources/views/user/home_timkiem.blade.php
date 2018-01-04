@extends('master_user')

@section('title', "BedShop | Home")

@section('main_content')
<div class="clearfix"></div>

<div class="clearfix"></div>
<div class="container_fullwidth" >
<div class="container" ng-controller="SanPhamTimKiemByLoaiControllerNG">
<div class="hot-products">
   <h3 class="title">@{{colum}} / @{{nameloai}}</h3>
   <div class="control">
        <a  class="prev" href="" style="display: inline;">&lt;</a>
        <a style="display: inline;"  class="next" href="">&gt;</a>
   </div>
   <ul id="hot" >
   @php $i=0; @endphp
   @foreach($sanphamList as $sanphamOb)
     @if($i==0)
      <li>
         <div class="row" >
     @endif
            <div class="col-md-3 col-sm-6"  >
               <div class="products"  ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})">
                  <div class="offer" >- {{ $sanphamOb->sp_km }} %</div>
                  <div class="thumbnail">
                     <a href="" ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})">
                         @foreach($hinhspList as $hinhOB)
                             @if($hinhOB->hinh_idsp==$sanphamOb->id_sp)
                         <img   src="{{URL ('images/products/small/'. $hinhOB->vitri_hinh  )}}" alt="">
                             @endif
                         @endforeach
                     </a>
                  </div>
                  <div  class="productname">{{ $sanphamOb->sp_ten }} </div>
                  <h4 class="price">{{ number_format( $sanphamOb->sp_gia - $sanphamOb->sp_gia * $sanphamOb->sp_km/100) }}</h4>
                  <div class="button_group">
                     <button class="button add-cart" type="button" ng-click="detailsp_user({{$sanphamOb->id_sp}},{{$sanphamOb->sp_idloai}})" >Mua Ngay</button>
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