@extends('frontend.master')
@section('title', 'Home')
@section('content')

 <!-- slider-area-start -->
 <section class="slider-area tpslider-delay">
   <div class="swiper-container slider-active">
      <div class="swiper-wrapper">
         <div class="swiper-slide ">
            <div class="tpslider pt-90 pb-0 grey-bg" data-background="assets/img/slider/shape-bg.jpg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-5 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="tpslider__content pt-20">
                           <span class="tpslider__sub-title mb-35">Top Seller In The Week</span>
                           <h2 class="tpslider__title mb-30">Choose Your Healthy Lifestyle.</h2>
                           <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even better</p>
                           <div class="tpslider__btn">
                              <a class="tp-btn" href="shop-2.html">Shop Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-7 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="tpslider__thumb p-relative pt-15">
                           <img class="tpslider__thumb-img" src="{{asset('/frontend/assets/images/slider/img-revo25.png')}}" alt="slider-bg">
                           <div class="tpslider__shape d-none d-md-block">
                              <img class="tpslider__shape-one" src="{{asset('/frontend/assets/images/slider/icon-img2-1.png')}}" alt="shape">
                              <img class="tpslider__shape-two" src="{{asset('/frontend/assets/images/slider/img-revo11.png')}}" alt="shape">
                              <img class="tpslider__shape-three" src="{{asset('/frontend/assets/images/slider/img-revo13.png')}}" alt="shape">
                              <img class="tpslider__shape-four" src="{{asset('/frontend/assets/images/slider/img-revo41.png')}}" alt="shape">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="tpslider pt-90 pb-0 grey-bg" data-background="assets/img/slider/shape-bg.jpg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-5 col-lg-6 col-md-6 col-sm-6">
                        <div class="tpslider__content pt-20">
                           <span class="tpslider__sub-title mb-35">Top Seller In The Week</span>
                           <h2 class="tpslider__title mb-30">Fresh Bread <br> Oatmeal Crumble. </h2>
                           <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even better</p>
                           <div class="tpslider__btn">
                              <a class="tp-btn" href="shop-2.html">Shop Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-7 col-lg-6  col-md-6 col-sm-6">
                        <div class="tpslider__thumb p-relative">
                           <img class="tpslider__thumb-img" src="{{asset('/frontend/assets/images/slider/img-revo76.png')}}" alt="slider-bg">
                           <div class="tpslider__shape d-none d-md-block">
                           <img class="tpslider__shape-one" src="{{asset('/frontend/assets/images/slider/icon-img2-1.png')}}" alt="shape">
                              <img class="tpslider__shape-two" src="{{asset('/frontend/assets/images/slider/img-revo11.png')}}" alt="shape">
                              <img class="tpslider__shape-three" src="{{asset('/frontend/assets/images/slider/img-revo13.png')}}" alt="shape">
                              <img class="tpslider__shape-four" src="{{asset('/frontend/assets/images/slider/img-revo41.png')}}" alt="shape">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide">
            <div class="tpslider pt-90 pb-0 grey-bg" data-background="assets/img/slider/shape-bg.jpg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="tpslider__content pt-20">
                           <span class="tpslider__sub-title mb-35">Top Seller In The Week</span>
                           <h2 class="tpslider__title mb-30">The Best <br> Health Fresh.</h2>
                           <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and taste even better</p>
                           <div class="tpslider__btn">
                              <a class="tp-btn" href="shop-2.html">Shop Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="tpslider__thumb p-relative">
                           <img class="tpslider__thumb-img" src="{{asset('/frontend/assets/images/slider/img-revo15.png')}}" alt="slider-bg">
                           <div class="tpslider__shape d-none d-md-block">
                              <img class="tpslider__shape-one" src="{{asset('/frontend/assets/images/slider/icon-img2-1.png')}}" alt="shape">
                              <img class="tpslider__shape-two" src="{{asset('/frontend/assets/images/slider/img-revo11.png')}}" alt="shape">
                              <img class="tpslider__shape-three" src="{{asset('/frontend/assets/images/slider/img-revo13.png')}}" alt="shape">
                              <img class="tpslider__shape-four" src="{{asset('/frontend/assets/images/slider/img-revo41.png')}}" alt="shape">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="tpslider__arrow d-none  d-xxl-block">
         <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
         <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
      </div>
      <div class="slider-pagination d-xxl-none"></div>
   </div>
</section>
<!-- slider-area-end -->

<!-- category-area-start -->
<section class="category-area grey-bg pb-40">
   <div class="container">
      <div class="swiper-container category-active">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-1.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-4.html">Vegetables</a></h5>
                     <span class="category__count">05 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-2.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Fresh Fruits</a></h5>
                     <span class="category__count">06 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-3.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Fruit Drink</a></h5>
                     <span class="category__count">09 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-4.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Fresh Bakery</a></h5>
                     <span class="category__count">11 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-5.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Biscuits Snack</a></h5>
                     <span class="category__count">02 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-6.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Fresh Meat</a></h5>
                     <span class="category__count">16 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-7.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Fresh Milk</a></h5>
                     <span class="category__count">10 items</span>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop-details-3.html"><img src="assets/img/catagory/category-8.jpg" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="shop-details-3.html">Sea Foods</a></h5>
                     <span class="category__count">11 items</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- category-area-end -->

<!-- product-area-start -->
<section class="product-area grey-bg pb-0">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <div class="tpsection mb-35">
               <h4 class="tpsection__sub-title">~ Special Products ~</h4>
               <h4 class="tpsection__title">Weekly Food Offers</h4>
               <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
            </div>
         </div>
      </div>
      <div class="tpproduct__arrow p-relative">
         <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="shop-details-4.html"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details-4.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-50%</span>
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-4.html">Fresh Fruits</a>,
                           <a href="shop-details-4.html">Vagetables</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">Mangosteen Organic From VietNamese</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="shop-details-4.html"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details-4.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-40%</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-4.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">Soda Sparkling Water Maker (Rose Gold)</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="shop-details-4.html"><img src="assets/img/product/products4-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details-4.html"><img src="assets/img/product/products23-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-10%</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-3.html">Vagetables</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-90%</span>
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-4.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="#"><img src="assets/img/product/products16-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-50%</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-4.html">Fresh Fruits</a>,
                           <a href="shop-details-3.html">Vagetables</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">Ginger Fresh, Whole, Organic - 250gram</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tpproduct p-relative">
                     <div class="tpproduct__thumb p-relative text-center">
                        <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                        <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                        <div class="tpproduct__info bage">
                           <span class="tpproduct__info-discount bage__discount">-40%</span>
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                        <div class="tpproduct__shopping">
                           <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                           <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                           <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__content">
                        <span class="tpproduct__content-weight">
                           <a href="shop-details-4.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-4.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                        </h4>
                        <div class="tpproduct__rating mb-5">
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                           <a href="#"><i class="icon-star_outline1"></i></a>
                        </div>
                        <div class="tpproduct__price">
                           <span>$56.00</span>
                           <del>$19.00</del>
                        </div>
                     </div>
                     <div class="tpproduct__hover-text">
                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                           <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                        </div>
                        <div class="tpproduct__descrip">
                           <ul>
                              <li>Type: Organic</li>
                              <li>MFG: August 4.2021</li>
                              <li>LIFE: 60 days</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tpproduct-btn">
            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
         </div>
      </div>
   </div>
</section>
<!-- product-area-end -->

<!-- product-feature-area-start -->
<section class="product-feature-area product-feature grey-bg pt-80 pb-40">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="tpfeature__thumb p-relative pb-40">
               <img src="assets/img/product/feature-thumb-1.png" alt="">
               <div class="tpfeature__shape d-none d-md-block">
                  <img class="tpfeature__shape-one" src="{{asset('/frontend/assets/images/slider/img-revo25.png')}}" alt="">
                  <img class="tpfeature__shape-two" src="{{asset('/frontend/assets/images/slider/img-revo25.png')}}" alt="">
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="tpproduct-feature p-relative pt-45 pb-40">
               <div class="tpsection tpfeature__content mb-35">
                  <h4 class="tpsection__sub-title mb-0">~ The Best For Your ~</h4>
                  <h4 class="tpsection__title tpfeature__title mb-25">Organic Drinks <br> <span>Easy Healthy</span> - Happy Life</h4>
                  <p>The liber tempor cum soluta nobis eleifend option congue <br> doming quod mazim placerat facer possim assum.</p>
               </div>
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="tpfeature__box">
                        <div class="tpfeature__product-item mb-25">
                           <h4 class="tpfeature__product-title">Fresh Fruits:</h4>
                           <span class="tpfeature__product-info">Apples, Berries & Cherries</span>
                        </div>
                        <div class="tpfeature__product-item mb-45">
                           <h4 class="tpfeature__product-title">Expiry Date:</h4>
                           <span class="tpfeature__product-">See on The Bottle Cap</span>
                        </div>
                        <div class="tpfeature__btn">
                           <a class="tp-btn-4" href="cart.html">Add To Cart</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="tpfeature__box">
                        <div class="tpfeature__product-item mb-25">
                           <h4 class="tpfeature__product-title">Ingredient:</h4>
                           <span class="tpfeature__product-info">Energy, Protein, Sugars</span>
                        </div>
                        <div class="tpfeature__product-item mb-45">
                           <h4 class="tpfeature__product-title">Bootle Size:</h4>
                           <span class="tpfeature__product-">500ml – 1000ml</span>
                        </div>
                        <div class="tpfeature__btn">
                           <a class="tp-btn-3" href="shop-2.html">View More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tpfeature__shape d-none d-md-block">
                  <img class="tpfeature__shape-three" src="assets/img/product/feature-shape-3.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product-feature-area-end -->

<!-- banner-area-start -->
<section class="banner-area pb-60 grey-bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="tpbanner__item mb-30">
               <a href="shop-3.html">
                  <div class="tpbanner__content" data-background="assets/img/banner/banner-1.jpg">
                     <span class="tpbanner__sub-title mb-10">Top offers</span>
                     <h4 class="tpbanner__title mb-30">Eat Green <br> Best For Family</h4>
                     <p>Free Shipping 05km</p>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="tpbanner__item mb-30">
               <a href="shop-3.html"><div class="tpbanner__content" data-background="assets/img/banner/banner-2.jpg">
                  <span class="tpbanner__sub-title tpbanner__white mb-10">Weekend Deals</span>
                  <h4 class="tpbanner__title mb-30">Fresh Food <br> Restore Health</h4>
               </div></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="tpbanner__item mb-30">
               <a href="shop-3.html">
                  <div class="tpbanner__content" data-background="assets/img/banner/banner-3.jpg">
                     <span class="tpbanner__sub-title mb-10">Top seller</span>
                     <h4 class="tpbanner__title mb-30">Healthy <br> Fresh Free Bread</h4>
                     <p>Limited Time: Online Only!</p>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- banner-area-end -->

<!-- product-area-start -->
<section class="weekly-product-area grey-bg pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <div class="tpsection mb-20">
               <h4 class="tpsection__sub-title">~ Special Products ~</h4>
               <h4 class="tpsection__title">Weekly Food Offers</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="tpnavtab__area pb-40">
               <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                     <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All Products</button>
                     <button class="nav-link" id="nav-meat-tab" data-bs-toggle="tab" data-bs-target="#nav-meat" type="button" role="tab" aria-controls="nav-meat" aria-selected="false">Fresh Meat</button>
                     <button class="nav-link" id="nav-vegetables-tab" data-bs-toggle="tab" data-bs-target="#nav-vegetables" type="button" role="tab" aria-controls="nav-vegetables" aria-selected="false">Fresh Vegetables</button>
                     <button class="nav-link" id="nav-snacks-tab" data-bs-toggle="tab" data-bs-target="#nav-snacks" type="button" role="tab" aria-controls="nav-snacks" aria-selected="false">Biscuits Snack</button>
                  </div>
               </nav>
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                     <div class="tpproduct__arrow p-relative">
                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Mangosteen Organic From VietNamese</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-10%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-90%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products12-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products28-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tpproduct-btn">
                           <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                           <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-meat" role="tabpanel" aria-labelledby="nav-meat-tab" tabindex="0">
                     <div class="tpproduct__arrow p-relative">
                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Mangosteen Organic From VietNamese</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products29-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products30-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Mangosteen Organic From VietNamese</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products10-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details.html">Fresh Meat</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products26-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products9-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>,
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tpproduct-btn">
                           <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                           <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-vegetables" role="tabpanel" aria-labelledby="nav-vegetables-tab" tabindex="0">
                     <div class="tpproduct__arrow p-relative">
                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>,
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Mangosteen Organic From VietNamese</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products22-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Soda Sparkling Water Maker (Rose Gold)</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products4-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products23-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-10%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-90%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products16-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products11-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>,
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tpproduct-btn">
                           <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                           <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-snacks" role="tabpanel" aria-labelledby="nav-snacks-tab" tabindex="0">
                     <div class="tpproduct__arrow p-relative">
                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>,
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-3.html">Mangosteen Organic From VietNamese</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products13-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products35-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-10%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products27-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products14-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-90%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products15-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products32-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-50%</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-3.html">Vagetables</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Ginger Fresh, Whole, Organic - 250gram</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products12-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details.html"><img src="assets/img/product/products28-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                       <a href="#"><img src="assets/img/product/products17-min.jpg" alt=""></a>
                                       <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products37-min.jpg" alt=""></a>
                                       <div class="tpproduct__info bage">
                                          <span class="tpproduct__info-discount bage__discount">-40%</span>
                                          <span class="tpproduct__info-hot bage__hot">HOT</span>
                                       </div>
                                       <div class="tpproduct__shopping">
                                          <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                          <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                          <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                       </div>
                                    </div>
                                    <div class="tpproduct__content">
                                       <span class="tpproduct__content-weight">
                                          <a href="shop-details-4.html">Fresh Fruits</a>
                                       </span>
                                       <h4 class="tpproduct__title">
                                          <a href="shop-details-4.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
                                       </h4>
                                       <div class="tpproduct__rating mb-5">
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                          <a href="#"><i class="icon-star_outline1"></i></a>
                                       </div>
                                       <div class="tpproduct__price">
                                          <span>$56.00</span>
                                          <del>$19.00</del>
                                       </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                       <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                          <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                                       </div>
                                       <div class="tpproduct__descrip">
                                          <ul>
                                             <li>Type: Organic</li>
                                             <li>MFG: August 4.2021</li>
                                             <li>LIFE: 60 days</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tpproduct-btn">
                           <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                           <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="tpproduct__all-item text-center">
               <span>Discover thousands of other quality products. 
                  <a href="shop-3.html">Shop All Products <i class="icon-chevrons-right"></i></a>
               </span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product-area-end -->

<!-- product-coundown-area-start -->
<section class="product-coundown-area tpcoundown__bg grey-bg pb-25" data-background="assets/img/banner/coundpwn-bg-1.png">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="tpcoundown p-relative ml-175">
               <div class="section__content mb-35">
                  <span class="section__sub-title mb-10">~ Deals Of The Day ~</span>
                  <h2 class="section__title mb-25">Premium Drinks <br> Fresh Farm Product</h2>
                  <p>The liber tempor cum soluta nobis eleifend option congue <br>
                     doming quod mazim placerat facere possum assam going through.</p>
               </div>
               <div class="tpcoundown__count">
                  <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                  <div class="tpcoundown__countdown" data-countdown="2022/11/11"></div>
                  <div class="tpcoundown__btn mt-50">
                     <a class="whight-btn" href="shop-details-grid.html">Shop Now</a>
                     <a class="whight-btn border-btn ml-15" href="shop-list-view.html">View Menu</a>
                  </div>
               </div>
               <div class="tpcoundown__shape d-none d-lg-block">
                  <img class="tpcoundown__shape-one" src="assets/img/shape/tree-leaf-1.svg" alt="">
                  <img class="tpcoundown__shape-two" src="assets/img/shape/tree-leaf-2.svg" alt="">
                  <img class="tpcoundown__shape-three" src="assets/img/shape/tree-leaf-3.svg" alt="">
                  <img class="tpcoundown__shape-four" src="assets/img/shape/fresh-shape-1.svg" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- product-coundown-area-end -->

<!-- blog-area-start -->
<section class="blog-area pt-100 pb-100 grey-bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <div class="tpsection mb-35">
               <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
               <h4 class="tpsection__title">Our Latest Post</h4>
               <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
            </div>
         </div>
      </div>
      <div class="swiper-container tpblog-active">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-1.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon, Rich In Nutrients For The Body</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i> </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-2.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of 
                        Fresh Beef For Women's Health</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-3.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                        Seafoods Good For Pregnancy</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-4.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The Healthy  Morning With Tomatoes</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-5.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="#">Foods</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must Drinks Juice Everyday</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-6.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable Price For Your  Family</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-7.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits Seafoods Good For Pregnancy</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="tpblog__item">
                  <div class="tpblog__thumb fix">
                     <a href="blog-details.html"><img src="assets/img/blog/blog-bg-8.jpg" alt=""></a>
                  </div>
                  <div class="tpblog__wrapper">
                     <div class="tpblog__entry-wap">
                        <span class="cat-links"><a href="#">organis</a></span>
                        <span class="author-by"><a href="#">Admin</a></span>
                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                     </div>
                     <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of Fresh Beef For Women’s Health</a></h4>
                     <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                     <div class="tpblog__details">
                        <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- blog-area-end -->

<!-- feature-area-start -->
<section class="feature-area mainfeature__bg grey-bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
   <div class="container">
      <div class="mainfeature__border pb-15">
         <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
            <div class="col">
               <div class="mainfeature__item text-center mb-30">
                  <div class="mainfeature__icon">
                     <img src="assets/img/icon/feature-icon-1.svg" alt="">
                  </div>
                  <div class="mainfeature__content">
                     <h4 class="mainfeature__title">Fast Delivery</h4>
                     <p>Across West & East India</p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="mainfeature__item text-center mb-30">
                  <div class="mainfeature__icon">
                     <img src="assets/img/icon/feature-icon-2.svg" alt="">
                  </div>
                  <div class="mainfeature__content">
                     <h4 class="mainfeature__title">safe payment</h4>
                     <p>100% Secure Payment</p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="mainfeature__item text-center mb-30">
                  <div class="mainfeature__icon">
                     <img src="assets/img/icon/feature-icon-3.svg" alt="">
                  </div>
                  <div class="mainfeature__content">
                     <h4 class="mainfeature__title">Online Discount</h4>
                     <p>Add Multi-buy Discount </p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="mainfeature__item text-center mb-30">
                  <div class="mainfeature__icon">
                     <img src="assets/img/icon/feature-icon-4.svg" alt="">
                  </div>
                  <div class="mainfeature__content">
                     <h4 class="mainfeature__title">Help Center</h4>
                     <p>Dedicated 24/7 Support </p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="mainfeature__item text-center mb-30">
                  <div class="mainfeature__icon">
                     <img src="assets/img/icon/feature-icon-5.svg" alt="">
                  </div>
                  <div class="mainfeature__content">
                     <h4 class="mainfeature__title">Curated items</h4>
                     <p>From Handpicked Sellers</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- feature-area-end -->


{{--    <!-- ==============================product_section - start============================== -->--}}
    <section class="product_section sec_ptb_50 bg_white clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="supermarket_sidebar_tab mb_30">
                        <div class="wrap_heade bg_supermarket_red clearfix">
                            <h2>Top Flash Deal</h2>
                            <span>A wide selection of items</span>
                        </div>
                        <ul class="ul_li_block nav" role="tablist">
                            @forelse($brands as $key=>$brand)
                                <li>
                                    <a class="{{ $key==0?'active':'' }}" data-toggle="tab" href="#key_{{ $key ?? '' }}">
                                        {{ $brand->name }}
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        @forelse($brands as $key=>$brand)
                        <div id="key_{{ $key ?? '' }}" class="tab-pane {{ $key==0?'active':'' }}">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                @forelse($brand->product as $single_product)
                                    <li>
                                        <div class="supermarket_product_item">
                                            <ul class="product_label ul_li_block clearfix">
                                                <li data-bg-color="#cc1414">-70%</li>
                                                <li data-bg-color="#0062bd">NEW</li>
                                            </ul>
                                            <a class="item_image" href="#!">
                                                @if($single_product->image->first())
                                                <img src="{{ file_exists(public_path('backend/img/product/'.$single_product->image->first()->image)) ? asset('backend/img/product/' . $single_product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                                @endif
                                            </a>
                                            <div class="item_content">
                                                <span class="item_type text-uppercase">{{ $brand->name ?? '' }}</span>
                                                <h3 class="item_title">
                                                    <a href="#!">
                                                        {{ $single_product->name ?? '' }}
                                                    </a>
                                                </h3>
                                                @if($single_product->stock)
                                                @if($single_product->stock->stockDetails->count() > 0)
                                                    <div class="item_price">
                                                        <strong>{{ $single_product->stock->stockDetails->min('price') }}</strong>
                                                    </div>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- ==============================slider_section - start============================== -->
    <section class="slider_section supermarket_slider clearfix"
             data-background="assets/images/backgrounds/bg_13.jpg">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="alldepartments_menu_wrap">
                        <div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
                            <div class="card mt-5">
                                <ul class="alldepartments_menulist ul_li_block clearfix">


{{--{{dd($cates)}}       --}}

                                    @forelse($cates as $key=>$child)
{{--                                        {{dd($child)}}--}}
                                        <li class="menu_item_has_child">
                                            <a href="{{ route('category-wise.list', $child->uuid) }}">
                                                <span class="icon">
                                                    <img
                                                        src="{{ asset('frontend/assets/images/icons/supermarket/icon_03.png') }}"
                                                        alt="icon_not_found">
                                                </span>


                                                <strong>{{ $child->name ?? '' }}</strong>
{{--                                                <strong>{{ $child->name ?? '' }}</strong>--}}
                                            </a>
                                            @if (count($child->child) > 0)
                                                @include('frontend.home.category_child',['childs' => $child->child])
                                            @endif
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main_slider clearfix" data-slick='{"arrows": false}'>
                        @if (count($sliders) > 0)
                            @forelse($sliders as $slider)
                                <div class="item clearfix" data-bg-color="#ffc156">
                                    <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                        <img
                                            src="{{ $slider->image ? asset('backend/img/slider/' . $slider->image) : asset('backend/slider.jpg') }}"
                                            alt="image_not_found">
                                    </div>
                                    <div class="slider_content">
                                        <h4 data-animation="fadeInUp" data-delay=".4s">{{ $slider->description ?? '' }}
                                        </h4>
                                        <h3 data-animation="fadeInUp" data-delay=".6s">{{ $slider->title ?? '' }}</h3>
                                        <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                            <small>From</small>
                                            <sup>£</sup>749<sup>99</sup>
                                        </div>
                                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                            <a href="{{ $slider->button_link ?? '#' }}"
                                               class="custom_btn btn_round bg_supermarket_red">{{ $slider->button_text ?? '' }}</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="item clearfix" data-bg-color="#ffc156">
                                    <div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
                                        <img src="{{ asset('frontend/assets/images/slider/supermarket/img_01.png') }}"
                                             alt="image_not_found">
                                    </div>
                                    <div class="slider_content">
                                        <h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
                                        <h3 data-animation="fadeInUp" data-delay=".6s">The Gift you are Wishing</h3>
                                        <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
                                            <small>From</small>
                                            <sup>£</sup>749<sup>99</sup>
                                        </div>
                                        <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
                                            <a href="#!" class="custom_btn btn_round bg_supermarket_red">Start
                                                Buying</a>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        @endif
                    </div>
                </div>

                <div class="col-lg-3">
                    @forelse($productAds->take(3) as $single_ads)
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ file_exists(public_path('backend/img/product/'.$single_ads->product->image->first()->image)) ? asset('backend/img/product/' . $single_ads->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found" height="170px !important">
                            <div class="item_content" style="width: 100%; height: 170px">
                                <h3 class="item_title text-white">
                                    {{ $single_ads->product->name ?? ''}}
                                </h3>
                                <span class="item_price">Price: {{ $single_ads->product->stock->stockDetails->min('price') }} TK</span>
                                <a class="text_btn" href="{{ route('product.details', md5($single_ads->product->id) . $single_ads->product->id) }}">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_01.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sm_offer_item offer_fullimage text-white mb_30">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_02.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_03.jpg') }}"
                                 alt="image_not_found">
                            <div class="item_content">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- ==============================slider_section - end============================== -->


    {{--    <!-- ==============================policy_section - start============================== -->--}}
    <section class="policy_section pb-0 clearfix">
        <div class="container maxw_1600">
            <div class="supermarket_policy clearfix">
                <ul class="ul_li clearfix">
                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_12.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Free Delivery</h3>
                                <p>For all order over $120</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_13.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Safe payment</h3>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_14.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Shop with confidence</h3>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_15.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">24/7 help center</h3>
                                <p>Dedicated 24/7 support</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="supermarket_policy_item clearfix">
                            <div class="item_icon">
                                <img src="{{ asset('frontend/assets/images/icons/supermarket/icon_16.png') }}"
                                     alt="icon_not_found">
                            </div>
                            <div class="item_content">
                                <h3 class="text-uppercase">Friendly services</h3>
                                <p>30 day satisfaction guarantee</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================policy_section - end============================== -->--}}


    {{--    <!-- ==============================deals_section - start==============================-->--}}
    <section class="product_section mb_50 clearfix">
        <div class="container maxw_1600">
            <div class="electronic_section_title clearfix">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <h2 class="title_text bg_supermarket_red text-white mb-0">
                            <span data-bg-color="#e09e9c"><i class="fal fa-plug"></i></span> <strong>New </strong> Arrival
                        </h2>
                    </div>
                </div>
            </div>

            <div class="electronic_content_container">
                <ul class="electronic_product_columns ul_li has_5columns mb_50 clearfix">
                    @forelse($new_arrivals as $new_arrival)
                        <li>
                            <a href="{{ route('product.details', $new_arrival->uuid) }}">
                                <div class="electronic_product_item">
                                    <div class="product_label badge badge-danger clearfix">
                                        New
                                    </div>
                                    <div class="item_image">
                                        @if($new_arrival->image->first())
                                        <img src="{{ file_exists(public_path('backend/img/product/'.$new_arrival->image->first()->image)) ? asset('backend/img/product/' . $new_arrival->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                        @endif
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">
                                            <a href="{{ route('product.details', $new_arrival->uuid) }}">{{ substr($new_arrival->name, 0, 20) ?? '' }}</a>
                                        </h3>
                                        <div class="progress_wrap">
                                            <div class="progress">
                                                <div class="progress_bar wow Rx_width_20 animated" role="progressbar"
                                                     data-wow-duration="0.5s" data-wow-delay=".1s"
                                                     aria-valuenow="{{ $new_arrival->stock->total_out ?? '' }}"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{ (($new_arrival->stock->total_out ?? '') * 100) / ($new_arrival->stock->total_in ?? '') }}% !important;">
                                                </div>
                                            </div>
                                            <span class="value_text">{{ $new_arrival->stock->total_out ?? '' }}
                                                Sold</span>
                                        </div>
                                        <span class="item_price">{{ $new_arrival->stock->stockDetails->min('price') ?? '' }}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        <li>
                            <div class="electronic_product_item">
                                <ul class="product_label ul_li clearfix">
                                    <li>-$30 off</li>
                                </ul>
                                <div class="item_image">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">
                                        <a href="#!">Wireless Audio System Multiroom 360</a>
                                    </h3>
                                    <div class="progress_wrap">
                                        <div class="progress">
                                            <div class="progress_bar wow Rx_width_20 animated" role="progressbar"
                                                 data-wow-duration="0.5s" data-wow-delay=".1s" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <span class="value_text">796 Sold</span>
                                    </div>
                                    <span class="item_price">$685.00</span>
                                </div>
                            </div>
                        </li>
                    @endforelse
                </ul>

                <div class="abtn_wrap text-center clearfix">
                    <a href="{{ route('all_product') }}" class="custom_btn btn_border border_electronic">View All Products</a>
                </div>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}


    {{--    <!-- ==============================deals_section - start============================== -->--}}
    <section class="deals_section sec_ptb_50 clearfix">
        <div class="container maxw_1600">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="supermarket_section_title clearfix">
                        <span class="sub_title text-uppercase">A wide selection of items </span>
                        <h2 class="title_text mb-0">Top Flash Deal</h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="gray_line"></div>
                </div>

                <div class="col-lg-2">
                    <div class="carousel_nav align_right">
                        <button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
                        <button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="supermarket_deals_carousel position-relative clearfix">
                <div class="custom_slider row clearfix" data-slick='{"dots": false}'>
                    @if (count($top_flash_deal_products) > 0)
                        @forelse($top_flash_deal_products as $key=>$top_flash_deal_product)
                            <div class="item_{{$key}} col">
                                <div class="supermarket_deals_item text-center clearfix">
                                    <div class="offer_text">
                                        Flat
                                        {{ $top_flash_deal_product->first()->discount_percentage ?? '0.00' }}
                                        %
                                    </div>
                                    <a href="{{ route('discount-wise.list', $top_flash_deal_product->first()->discount_percentage) }}" class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/product/'.$top_flash_deal_product->first()->product->image->first()->image)) ? asset('backend/img/product/' . $top_flash_deal_product->first()->product->image->first()->image) : asset('backend/product.jpg') }}"
                                             alt="image_not_found">
                                    </a>
                                    <span class="item_instock">{{ count($top_flash_deal_product) }} Products</span>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    @endif
                </div>
            </div>

        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}

    {{--    <!-- ==============================product_section - start============================== -->--}}
    <section class="product_section sec_ptb_50 bg_white clearfix">
        <div class="container maxw_1600">
            <div class="row justify-content-lg-between">
                <div class="col-lg-3">
                    <div class="supermarket_sidebar_tab mb_30">
                        <div class="wrap_heade bg_supermarket_red clearfix">
                            <h2>Top Flash Deal</h2>
                            <span>A wide selection of items</span>
                        </div>
                        <ul class="ul_li_block nav" role="tablist">
                            @forelse($brands as $key=>$brand)
                                <li>
                                    <a class="{{ $key==0?'active':'' }}" data-toggle="tab" href="#key_{{ $key ?? '' }}">
                                        {{ $brand->name }}
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        @forelse($brands as $key=>$brand)
                        <div id="key_{{ $key ?? '' }}" class="tab-pane {{ $key==0?'active':'' }}">
                            <ul class="supermarket_product_columns has_4columns ul_li clearfix">
                                @forelse($brand->product as $single_product)
                                    <li>
                                        <div class="supermarket_product_item">
                                            <ul class="product_label ul_li_block clearfix">
                                                <li data-bg-color="#cc1414">-70%</li>
                                                <li data-bg-color="#0062bd">NEW</li>
                                            </ul>
                                            <a class="item_image" href="#!">
                                                @if($single_product->image->first())
                                                <img src="{{ file_exists(public_path('backend/img/product/'.$single_product->image->first()->image)) ? asset('backend/img/product/' . $single_product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                                @endif
                                            </a>
                                            <div class="item_content">
                                                <span class="item_type text-uppercase">{{ $brand->name ?? '' }}</span>
                                                <h3 class="item_title">
                                                    <a href="#!">
                                                        {{ $single_product->name ?? '' }}
                                                    </a>
                                                </h3>
                                                @if($single_product->stock)
                                                @if($single_product->stock->stockDetails->count() > 0)
                                                    <div class="item_price">
                                                        <strong>{{ $single_product->stock->stockDetails->min('price') }}</strong>
                                                    </div>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <!-- ==============================deals_section - end============================== -->--}}

    {{--    <!-- ==============================advertisement_section - start============================== -->--}}
        <section class="advertisement_section sec_ptb_50 pb-0 clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-center">
                    @forelse($productAds->skip(3) as $single_ads)
                        <div class="col-lg-4">
                            <div class="sm_offer_item offer_fullimage text-white">
                                <div class="img_before">
                                    <img src="{{ file_exists(public_path('backend/img/product/'.$single_ads->product->image->first()->image)) ? asset('backend/img/product/' . $single_ads->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found" height="170px !important">
                                     alt="image_not_found">
                                </div>
                                <div class="item_content" style="width: 86%; top: 50%; height: 170px;">
                                    <h3 class="item_title text-white">
                                        {{ $single_ads->product->name ?? '' }}
                                    </h3>
                                    <span class="item_price">Price: {{ $single_ads->product->stock->stockDetails->min('price') }} TK</span>
                                    <a class="text_btn" href="{{ route('product.details', md5($single_ads->product->id) . $single_ads->product->id) }}">
                                        <span>Pre - Order Now</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_06.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_07.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sm_offer_item offer_fullimage text-white">
                            <img src="{{ asset('frontend/assets/images/offer/supermarket/img_08.jpg') }}"
                                alt="image_not_found">
                            <div class="item_content" style="width: 100%; top: 50%; height: 170px;">
                                <h3 class="item_title text-white">
                                    Smartphone Bestseller Products 2019
                                </h3>
                                <span class="item_price">Price: $298.99</span>
                                <a class="text_btn" href="#!">
                                    <span>Pre - Order Now</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
    {{--    <!-- ==============================advertisement_section - end============================== -->--}}


    {{--    <!-- ==============================supermarket_feature_carousel - start============================== -->--}}
        <section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
                <div class="container maxw_1600">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-7 order-last">
                            <div class="item_image">
                                <img src="{{ asset('frontend/assets/images/feature/supermarket/img_01.png') }}"
                                    alt="image_not_found">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="item_content">
                                <span class="item_price">£99.00</span>
                                <h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
                                <h3 class="item_title text-white mb_30">
                                    Everything you need to Start an online store
                                </h3>
                                <a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{--    <!-- ==============================supermarket_feature_carousel - end============================== -->--}}

    <!-- ==============================bestseller_section - start============================== -->
        <section class="bestseller_section sec_ptb_50 clearfix">
            <div class="container maxw_1600">
                <div class="row justify-content-lg-between">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Products</h2>
                            </div>
                            @forelse($footerProduct->take(3) as $singleProduct)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        @if($singleProduct->first()->product->image)
                                            <img src="{{ file_exists(public_path('backend/img/product/'.$singleProduct->first()->product->image->first()->image)) ? asset('backend/img/product/' . $singleProduct->first()->product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                        @endif
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">
                                                - {{ number_format((($singleProduct->first()->discount ?? '0') * 100) / ($singleProduct->first()->price ?? '1'), 2) }} %
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $singleProduct->first()->product->brand->name ?? '' }}</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('product.details', md5($singleProduct->first()->product->id).$singleProduct->first()->product->id) }}">{{ $singleProduct->first()->product->name ?? '' }}</a>
                                        </h3>
                                        @if($singleProduct->first()->product->stock)
                                            @if($singleProduct->first()->product->stock->stockDetails->count() > 0)
                                                <div class="item_price">
                                                    <strong>{{ $singleProduct->first()->product->stock->stockDetails->min('price') }}</strong>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_22.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_13.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_16.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Brands</h2>
                            </div>
                            @forelse($brands->random(3) as $brand)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/brand/'.$brand->image)) ? asset('backend/img/brand/' . $brand->image) : asset('backend/brand.jpg') }}" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $brand->product->count() ?? 0 }} Products</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('brand-wise.list', $brand->uuid) }}">{{ $brand->name ?? '' }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_11.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_19.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_21.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="bestseller_wrap">
                            <div class="supermarket_section_title mb_50 clearfix">
                                <span class="sub_title text-uppercase">A wide selection of items</span>
                                <h2 class="title_text mb-0">Category</h2>
                            </div>
                            @forelse($footerCategory->random(3) as $category)
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ file_exists(public_path('backend/img/category/'.$category->image)) ? asset('backend/img/category/' . $category->image) : asset('backend/category.jpg') }}" alt="image Not Found">
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">{{ $category->product->count() ?? 0 }}</span>
                                        <h3 class="item_title">
                                            <a href="{{ route('category-wise.list', $category->uuid) }}">{{ $category->name ?? '' }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @empty
                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_23.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_24.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="supermarket_product_small">
                                    <div class="item_image">
                                        <img src="{{ asset('frontend/assets/images/shop/supermarket/img_06.png') }}"
                                             alt="image_not_found">
                                        <ul class="product_label ul_li_block clearfix">
                                            <li data-bg-color="#cc1414">-70%</li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_type">Speakers</span>
                                        <h3 class="item_title">
                                            <a href="#!">Red Wireless Headphone Solo 2 HD</a>
                                        </h3>
                                        <span class="item_price">£2,300</span>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fal fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <!-- ==============================bestseller_section - end============================== -->
@endsection

@push('css')
    <style>
        .electronic_product_item .product_label {
            top: 9px !important;
            right: 0 !important;
            z-index: 1;
            position: absolute;
            transform: rotate(45deg);
        }

        .menu_item_has_child .submenu {
            top: -3% !important;
            left: 110% !important;
        }

    </style>
@endpush
@push('js')
    <script>
        $('.custom_slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endpush
