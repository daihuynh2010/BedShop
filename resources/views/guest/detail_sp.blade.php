@extends('master_guest')

@section('title', "BedShop | Welcome")

@section('main_content')

      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                    <img id="zoom_03" src="{{ URL ('images/products/medium/products-01.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-01.jpg') }}" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" data-image="{{ URL ('images/products/medium/products-01.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-01.jpg') }}">
                          <img src="{{ URL ('images/products/thum/products-01.png') }}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="{{ URL ('images/products/medium/products-02.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-02.jpg') }}">
                          <img src="{{ URL ('images/products/thum/products-02.png') }}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="{{ URL ('images/products/medium/products-03.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-03.jpg') }}">
                          <img src="{{ URL ('images/products/thum/products-03.png') }}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="{{ URL ('images/products/medium/products-04.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-04.jpg') }}">
                          <img src="{{ URL ('images/products/thum/products-04.png') }}" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="{{ URL ('images/products/medium/products-05.jpg') }}" data-zoom-image="{{ URL ('images/products/Large/products-05.jpg') }}">
                          <img src="{{ URL ('images/products/thum/products-05.png') }}" alt="">
                        </a>
                      </li>
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
                <div class="products-description">
                  <h5 class="name">
                      <!--name-->
                      Đầm
                  </h5>
                  <p>
                    <img alt="" src="{{ URL ('images/star.png') }}">
                    <a class="review_num" href="#">
                      02 Đánh giá(s)
                    </a>
                  </p>
                  <p>
                    <span class=" light-red">
                      Còn Hàng
                    </span>
                  </p>
                  <p style="color: orange;font-size: 17px;">
                    Mua hàng tích 10 Gcoin
                  </p>
                  <p>
                    Thông tin sản phẩm
                  </p>
                  <hr class="border">
                  <div class="price">
                    <span class="new_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Số lượng &nbsp;&nbsp;: 
                      <select>
                        <option>
                          1
                        </option>
                      </select>
                    </div>
                    <div class="button_group">
                      <button class="button" style="border-radius: 0px;background-color: orange" >
                        MUA NGAY
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
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
                        Bình luận
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                       chi tiết của sản phẩm, thông số
                    </p>
                  </div>
                  <div class="tab-content" id="Reviews">
                    <form>
                      <table>
                        <thead>
                          <tr>
                            <th>
                              &nbsp;
                            </th>
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
                            <td>
                              Quality
                            </td>
                            <td>
                              <input type="radio" name="quality" value="Blue"/>
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Price
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Value
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </form>
                  </div>
                  
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  Bạn có thể thích những sản phẩm này
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-01.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-02.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-03.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-01.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-02.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-03.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-01.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-02.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="{{ URL ('images/products/small/products-03.png') }}" alt="Product Name">
                          </div>
                          <div class="productname">
                            Đầm
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                              
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  Sản phẩm bạn đã chọn
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="{{ URL ('images/products/thum/products-01.png') }}" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Váy
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="{{ URL ('images/products/thum/products-02.png') }}" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Váy
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="{{ URL ('images/products/thum/products-03.png') }}" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Váy
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>

              <div class="clearfix">
              </div>
             
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="{{ URL ('images/fblike.png') }}" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="{{ URL ('images/fbicon.png') }}" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/envato.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/themeforest.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/photodune.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/activeden.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/envato.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/envato.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/themeforest.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/photodune.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/activeden.png') }}" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="{{ URL ('images/envato.png') }}" alt="">
                      </div>
                    </a>
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