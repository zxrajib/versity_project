@extends('frontend.master')
@section('title', 'Product Details')
@section('content')
    {{--        {{dd($productData)}}--}}


    <main>

<!-- breadcrumb-area-start -->
<div class="breadcrumb__area grey-bg pt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="tp-breadcrumb__content">
               <div class="tp-breadcrumb__list">
                  <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                  <span class="dvdr">/</span>
                  <span class="tp-breadcrumb__active"><a href="index.html">Breakfast & Dairy</a></span>
                  <span class="dvdr">/</span>
                  <span>kldsfgl</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- breadcrumb-area-end -->

<!-- shop-details-area-start -->
<section class="shopdetails-area grey-bg pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-10 col-md-12">
            <div class="tpdetails__area mr-60 pb-30">
               <div class="tpdetails__product mb-30">
                  <div class="tpdetails__title-box">
                     <h3 class="tpdetails__title">{{ $productData->brand->name ?? '' }}</h3>
                     <ul class="tpdetails__brand">
                        <li> Brands: <a href="#">ORFARM</a> </li>
                        <li>
                           <i class="icon-star_outline1"></i>
                           <i class="icon-star_outline1"></i>
                           <i class="icon-star_outline1"></i>
                           <i class="icon-star_outline1"></i>
                           <i class="icon-star_outline1"></i>
                           <b>02 Reviews</b>
                        </li>
                        <li>
                           SKU: <span>ORFARMVE005</span>
                        </li>
                     </ul>
                  </div>
                  <div class="tpdetails__box">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="tpproduct-details__nab">
                              <div class="tab-content" id="nav-tabContents">
                                 <div class="tab-pane fade show active w-img" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                    <img src="assets/img/product/product-details-1.png" alt="">
                                    <div class="tpproduct__info bage">
                                       <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade w-img" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                    <img src="assets/img/product/product-details-2.png" alt="">
                                    <div class="tpproduct__info bage">
                                       <span class="tpproduct__info-discount bage__discount">-90%</span>
                                       <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade w-img" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                    <img src="assets/img/product/product-details-3.png" alt="">
                                    <div class="tpproduct__info bage">
                                       <span class="tpproduct__info-hot bage__hot">HOT</span>
                                    </div>
                                 </div>
                              </div> 
                              <nav>
                                 <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                   <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <img src="assets/img/product/product-detaisl-item1.png" alt="">
                                   </button>
                                   <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    <img src="assets/img/product/product-detaisl-item2.png" alt="">
                                   </button>
                                   <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    <img src="assets/img/product/product-detaisl-item3.png" alt="">
                                   </button>
                                 </div>
                               </nav>                 
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="product__details">
                              <div class="product__details-price-box">
                                 <h5 class="product__details-price">$56.00</h5>
                                 <ul class="product__details-info-list">
                                    <li>Delicious non - dairy cheese sauce</li>
                                    <li>Vegan & Allergy friendly</li>
                                    <li>Smooth, velvety dairy free cheese sauce</li>
                                 </ul>
                              </div>
                              <div class="product__details-cart">
                                 <div class="product__details-quantity d-flex align-items-center mb-15"> 
                                    <b>Qty:</b>
                                    <div class="product__details-count mr-10">
                                       <span class="cart-minus"><i class="far fa-minus"></i></span>
                                       <input class="tp-cart-input" type="text" value="1">
                                       <span class="cart-plus"><i class="far fa-plus"></i></span>
                                    </div>
                                    <div class="product__details-btn">
                                       <a href="cart.html">add to cart</a>
                                    </div>
                                 </div>
                                 <ul class="product__details-check">
                                    <li>
                                       <a href="#"><i class="icon-heart icons"></i> add to wishlist</a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-layers"></i> Add to Compare</a>
                                    </li>
                                    <li> 
                                       <a href="#"><i class="icon-share-2"></i> Share</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="product__details-stock mb-25">
                                 <ul>
                                    <li>Availability: <i>54 Instock</i></li>
                                    <li>Categories: <span>Vegetables, Meat & Eggs, Fruit Drink </span></li>
                                    <li>Tags: <span>Chicken, Natural, Organic</span></li>
                                 </ul>
                              </div>
                              <div class="product__details-payment text-center">
                                 <img src="assets/img/shape/payment-2.png" alt="">
                                 <span>Guarantee safe & Secure checkout</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tpdescription__box">
                  <div class="tpdescription__box-center d-flex align-items-center justify-content-center">
                     <nav>
                        <div class="nav nav-tabs"  role="tablist">
                          <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Product Description</button>
                          <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">ADDITIONAL INFORMATION</button>
                          <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (1)</button>
                        </div>
                      </nav>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                        <div class="tpdescription__content">
                           <p>Designed by Puik in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique chinese armchairs. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia eserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, aque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                        <div class="tpdescription__product-wrapper mt-30 mb-30 d-flex justify-content-between align-items-center">
                           <div class="tpdescription__product-info">
                              <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                              <ul class="tpdescription__product-info">
                                 <li>Material: Plastic, Wood</li>
                                 <li>Legs: Lacquered oak and black painted oak</li>
                                 <li>Dimensions and Weight: Height: 80 cm, Weight: 5.3 kg</li>
                                 <li>Length: 48cm</li>
                                 <li>Depth: 52 cm</li>
                              </ul>
                              <p>Lemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut <br> fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem <br> sequi nesciunt.</p>
                           </div>
                           <div class="tpdescription__product-thumb">
                              <img src="assets/img/product/product-single-1.png" alt="">
                           </div>
                        </div>
                        <div class="tpdescription__video">
                           <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                           <p>Form is an armless modern chair with a minimalistic expression. With a simple and contemporary design Form Chair has a soft and welcoming ilhouette and a distinctly residential look. The legs appear almost as if they are growing out of the shell. This gives the design flexibility and makes it possible to vary the frame. Unika is a mouth blown series of small, glass pendant lamps, originally designed for the Restaurant Gronbech. Est eum itaque maiores qui blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                           <div class="tpdescription__video-wrapper p-relative mt-30 mb-35 w-img">
                              <img src="assets/img/product/product-video1.jpg" alt="">
                              <div class="tpvideo__video-btn">
                                 <a class="tpvideo__video-icon popup-video" href="https://www.youtube.com/watch?v=rLrV5Tel7zw">
                                    <i>
                                       <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M15.6499 6.58886L15.651 6.58953C17.8499 7.85553 18.7829 9.42511 18.7829 10.8432C18.7829 12.2613 17.8499 13.8308 15.651 15.0968L15.6499 15.0975L12.0218 17.195L8.3948 19.2919C8.3946 19.292 8.3944 19.2921 8.3942 19.2922C6.19546 20.558 4.36817 20.5794 3.13833 19.8697C1.9087 19.1602 1.01562 17.5694 1.01562 15.0382V10.8432V6.64818C1.01562 4.10132 1.90954 2.51221 3.13721 1.80666C4.36609 1.1004 6.1936 1.12735 8.3942 2.39416C8.3944 2.39428 8.3946 2.3944 8.3948 2.39451L12.0218 4.49135L15.6499 6.58886Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                       </svg>
                                    </i>
                                 </a>
                              </div>
                           </div>
                           <h5 class="tpdescription__product-title">Product supreme quality</h5>
                           <p>Form is an armless modern chair with a minimalistic expression. With a simple and contemporary design Form Chair has a soft and welcoming ilhouette and a distinctly residential look. The legs appear almost as if they are growing out of the shell. This gives the design flexibility and makes it possible to vary the frame. Unika is a mouth blown series of small, glass pendant lamps, originally designed for the Restaurant Gronbech. Est eum itaque maiores qui blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                           <p>Duis semper erat mauris, sed egestas purus commodo. Cras imperdiet est in nunc tristique lacinia. Nullam aliquam mauris eu accumsan tincidunt. Suspendisse velit ex, aliquet vel ornare vel, dignissim a tortor. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                        <div class="tpdescription__content">
                           <p>Designed by Puik in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique chinese armchairs. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia eserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, aque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                        <div class="tpdescription__product-wrapper mt-30 mb-30 d-flex justify-content-between align-items-center">
                           <div class="tpdescription__product-info">
                              <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                              <ul class="tpdescription__product-info">
                                 <li>Material: Plastic, Wood</li>
                                 <li>Legs: Lacquered oak and black painted oak</li>
                                 <li>Dimensions and Weight: Height: 80 cm, Weight: 5.3 kg</li>
                                 <li>Length: 48cm</li>
                                 <li>Depth: 52 cm</li>
                              </ul>
                              <p>Lemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut <br> fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem <br> sequi nesciunt.</p>
                           </div>
                           <div class="tpdescription__product-thumb">
                              <img src="assets/img/product/product-single-1.png" alt="">
                           </div>
                        </div>
                        <div class="tpdescription__video">
                           <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                           <p>Form is an armless modern chair with a minimalistic expression. With a simple and contemporary design Form Chair has a soft and welcoming ilhouette and a distinctly residential look. The legs appear almost as if they are growing out of the shell. This gives the design flexibility and makes it possible to vary the frame. Unika is a mouth blown series of small, glass pendant lamps, originally designed for the Restaurant Gronbech. Est eum itaque maiores qui blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                        </div>
                     </div>




                     <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                        <div class="tpreview__wrapper">
                           <h4 class="tpreview__wrapper-title">1 review for Cheap and delicious fresh chicken</h4>
                           <div class="tpreview__comment">
                              <div class="tpreview__comment-img mr-20">
                                 <img src="assets/img/testimonial/test-avata-1.png" alt="">
                              </div>
                              <div class="tpreview__comment-text">
                                 <div class="tpreview__comment-autor-info d-flex align-items-center justify-content-between">
                                    <div class="tpreview__comment-author">
                                       <span>admin</span>
                                    </div>
                                    <div class="tpreview__comment-star">
                                       <i class="icon-star_outline1"></i>
                                       <i class="icon-star_outline1"></i>
                                       <i class="icon-star_outline1"></i>
                                       <i class="icon-star_outline1"></i>
                                       <i class="icon-star_outline1"></i>
                                    </div>
                                 </div>
                                 <span class="date mb-20">--April 9, 2022: </span>
                                 <p>very good</p>
                              </div>
                           </div>
                           <div class="tpreview__form">
                              <h4 class="tpreview__form-title mb-25">Add a review </h4>
                              <form action="#">
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <div class="tpreview__input mb-30">
                                          <input type="text" placeholder="Name">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="tpreview__input mb-30">
                                          <input type="email" placeholder="Email">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="tpreview__star mb-20">
                                          <h4 class="title">Your Rating</h4>
                                          <div class="tpreview__star-icon">
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                             <a href="#"><i class="icon-star_outline1"></i></a>
                                          </div>
                                       </div>
                                       <div class="tpreview__input mb-30">
                                          <textarea name="text" placeholder="Message"></textarea>
                                          <div class="tpreview__submit mt-30">
                                             <button class="tp-btn">Submit</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>   
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-12">
            <div class="tpsidebar pb-30">
               <div class="tpsidebar__warning mb-30">
                  <ul>
                     <li>
                        <div class="tpsidebar__warning-item">
                           <div class="tpsidebar__warning-icon">
                              <i class="icon-package"></i>
                           </div>
                           <div class="tpsidebar__warning-text">
                              <p>Free shipping apply to all <br> orders over $90</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="tpsidebar__warning-item">
                           <div class="tpsidebar__warning-icon">
                              <i class="icon-shield"></i>
                           </div>
                           <div class="tpsidebar__warning-text">
                              <p>Guaranteed 100% Organic <br>  from nature farms</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="tpsidebar__warning-item">
                           <div class="tpsidebar__warning-icon">
                              <i class="icon-package"></i>
                           </div>
                           <div class="tpsidebar__warning-text">
                              <p>60 days returns if you change <br> your mind</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tpsidebar__banner mb-30">
                  <img src="assets/img/shape/sidebar-product-1.png" alt="">
               </div>
               <div class="tpsidebar__product">
                  <h4 class="tpsidebar__title mb-15">Recent Products</h4>
                  <div class="tpsidebar__product-item">
                     <div class="tpsidebar__product-thumb p-relative">
                        <img src="assets/img/product/sidebar-pro-1.jpg" alt="">
                        <div class="tpsidebar__info bage">
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                     </div>
                     <div class="tpsidebar__product-content">
                        <span class="tpproduct__product-category">
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpsidebar__product-title">
                           <a href="shop-details-3.html">Fresh Mangosteen 100% Organic From VietNamese</a>
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
                  </div>
                  <div class="tpsidebar__product-item">
                     <div class="tpsidebar__product-thumb p-relative">
                        <img src="assets/img/product/sidebar-pro-2.jpg" alt="">
                        <div class="tpsidebar__info bage">
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                     </div>
                     <div class="tpsidebar__product-content">
                        <span class="tpproduct__product-category">
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpsidebar__product-title">
                           <a href="shop-details-3.html">Fresh Mangosteen 100% Organic From VietNamese</a>
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
                  </div>
                  <div class="tpsidebar__product-item">
                     <div class="tpsidebar__product-thumb p-relative">
                        <img src="assets/img/product/sidebar-pro-3.jpg" alt="">
                        <div class="tpsidebar__info bage">
                           <span class="tpproduct__info-hot bage__hot">HOT</span>
                        </div>
                     </div>
                     <div class="tpsidebar__product-content">
                        <span class="tpproduct__product-category">
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpsidebar__product-title">
                           <a href="shop-details-grid.html">Fresh Mangosteen 100% Organic From VietNamese</a>
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
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- shop-details-area-end -->

<!-- product-area-start -->
<section class="product-area whight-product pt-75 pb-80">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h5 class="tpdescription__product-title mb-20">Related Products</h5>
         </div>
      </div>
      <div class="tpproduct__arrow double-product p-relative">
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
                           <a href="shop-details.html">Fresh Meat</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
                           <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose Gold)</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit Vegetables</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter Pounder Burgers</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
                     


                        <a href="#">
                        @forelse($productData->image as $key=>$image)
                                    @if($image->image)
                                        <img id="image{{$key}}" style="display: none" class="imageHide" src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                    @endif
                                @empty
                                @endforelse
                    </a>
                        <a class="tpproduct__thumb-img" href="shop-details.html">
                           
                        @forelse($productData->image as $key=>$image)
                                    @if($image->image)
                                        <img id="image{{$key}}" style="display: none" class="imageHide" src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                    @endif
                                @empty
                                @endforelse
                    </a>
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
                           <a href="shop-details-3.html">Ginger Fresh, Whole, Organic - 250gram</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
                           <a href="shop-details-3.html">Fresh Fruits</a>
                        </span>
                        <h4 class="tpproduct__title">
                           <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone Bananas - 4 Packs</a>
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
                           <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
      </div>
   </div>
</section>
<!-- product-area-end -->



</main>


    <!-- fm_details_section - start
			================================================== -->
    <section class="fm_details_section sec_ptb_50 clearfix">
        <div class="container mb_50">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-5 col-md-7">
                    <div class="details_image">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                @forelse($productData->image as $key=>$image)
                                    @if($image->image)
                                        <img id="image{{$key}}" style="display: none" class="imageHide" src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                    @endif
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-7">
                    <ul class="di_tab_nav ul_li" role="tablist">
                        @forelse($productData->image as $key=>$image)
                            <li onclick="return image_change('image{{ $key }}')">
                                @if($image->image)
                                    <img src="{{ file_exists(public_path('backend/img/product/'.$image->image)) ? asset('backend/img/product/' . $image->image) : asset('backend/product.jpg') }}" alt="image_not_found">
                                @endif
                            </li>
                        @empty
                        @endforelse
                    </ul>
                </div>

                <div class="col-lg-5 col-md-7">
                    <div class="details_content">
                        <span class="item_type">{{ $productData->brand->name ?? '' }}</span>
                        <h2 class="item_title mb_15">{{ $productData->name ?? '' }}</h2>
                        <input type="hidden" id="stock_id" value="{{ $productData->stock->stockDetails->first()->uuid }}" />
                        <input type="hidden" id="total_in" value="{{ $productData->stock->stockDetails->first()->total_in }}" />
                        <input type="hidden" id="total_out" value="{{ $productData->stock->stockDetails->first()->total_out }}" />
                        <span id="main_item_price" class="item_price mb_15">
                            @if($productData->stock->stockDetails->first()->discount > 0)
                                <strong>
                                    TK {{ number_format(($productData->stock->stockDetails->first()->price ?? '') - ($productData->stock->stockDetails->first()->discount ?? ''), 2 ) }}
                                </strong>
                                <del>
                                    TK {{ $productData->stock->stockDetails->first()->price ?? '' }}
                                </del>
                            @else
                                <input type="hidden" id="stock_id" value="{{ $productData->stock->stockDetails->first()->uuid }}" />
{{--                                <input type="hidden" id="price" value="{{ $productData->stock->stockDetails->first()->price ?? '' }}" />--}}
                                <strong>
                                    TK {{ $productData->stock->stockDetails->first()->price ?? '' }}
                                </strong>
                            @endif
                        </span>
                        <hr>
                        <span class="heading">User Rating</span>
                        <span class="fa fa-star {{ $average_review >= 1 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 2 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 3 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star {{ $average_review >= 4 ? 'checked' : '' }}"></span>
                        <span class="fa fa-star" {{ $average_review >= 5 ? 'checked' : '' }}></span>
                        <p>{{ (int)$average_review ?? '' }} average based on {{ $total_review ?? '' }} reviews.</p>
                        <hr>
                        <p class="mb-0">
                            {!! substr($productData->description, 0, 100) ?? '' !!}
                        </p>
                        <hr>
                        @if($productData->category->attribute != null)
                            @foreach($productData->category->attribute as $key=>$attributeData)
                                <div class="card" style="margin: 0px;">
                                    <div class="rating-container">
                                        <div class="rating-text">
                                            <p>{{ $attributeData->name ?? '' }}</p>
                                        </div>
                                        {{--                                        {{ dd($productData->stock->stockDetails->first()->stock_attribute_data->pluck('attr_id')->toArray()) }}--}}
                                        <div id="{{ $attributeData->name ?? '' }}" class="radio-group{{$key}} rg">
                                            @foreach($attributeData->attrValue as $ke=>$attrValueData)
                                                <input type="radio" id="option{{$key.$ke}}" class="option"
                                                       name="{{ $attributeData->name }}"
                                                       value="{{ $attrValueData->id }}" {{ in_array($attrValueData->id, $productData->stock->stockDetails->first()->stock_attribute_data->pluck('attr_id')->toArray()) ? 'checked' : '' }}>
                                                <label for="option{{$key.$ke}}">{{ $attrValueData->value ?? '' }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <ul class="btns_group ul_li clearfix">
                            <li>
                                <div class="quantity_input">
                                    <span class="input_number_decrement">–</span>
                                    <input id="qty" class="input_number" type="text" value="1">
                                    <span class="input_number_increment">+</span>
                                </div>
                            </li>
                            @auth
                                <li>
                                    <button id="add_to_cart" value="{{ $productData->id }}"
                                            class="custom_btn btn_sm bg_fashion2_red text-uppercase">
                                        <i class="fal fa-shopping-cart mr-2"></i>
                                        Add To Cart
                                    </button>
                                </li>
                            @endauth
                            @guest
                            <!-- Button trigger modal -->
                                <button type="button" class="custom_btn btn_sm bg_fashion2_red text-uppercase" data-toggle="modal" data-target="#loginModal">
                                    <i class="fal fa-shopping-cart mr-2"></i>
                                    Add To Cart
                                </button>
                                @include('frontend.partials.modals.login.login_modal')
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fm_details_section - end
    ================================================== -->
    <!-- product_review_section - start
    ================================================== -->
    @auth
    <section class="product_section clearfix mb_50">
        <div class="container-fluid prl_100">
            <div class="fm_section_title text-center mb_15">
                <h6 class="title_text">Product Review</h6>
            </div>
            <div class="row justify-content-center">
                <form action="{{ route('review.store') }}" method="post" style="width: 100%;">
                    @CSRF
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id ?? '' }}" />
                    <input type="hidden" name="product_id" value="{{ $productData->uuid ?? '' }}" />
                    <div class="col-md-12">
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea name="comments" id="comments" rows="2" style="width: 100%;"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endauth
    <!-- product_review_section - end
    ================================================== -->
    <!-- product_section - start
    ================================================== -->
    <section class="product_section clearfix">
        <div class="container-fluid prl_100">
            <div class="fm_section_title text-center mb_15">
                <h4 class="title_text">Related Product</h4>
            </div>

            <div class="row justify-content-center">
                @forelse($related_products as $key=>$related_product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">%</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="{{ route('product.details', $related_product->uuid) }}">
                                    {{-- <img src="{{ file_exists(public_path('backend/img/product/'.$related_product->image->first()->image)) ? asset('backend/img/product/' . $related_product->image->first()->image) : asset('backend/product.jpg') }}" alt="image_not_found"> --}}
                                    <img src="{{asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="{{ route('product.details', $related_product->uuid) }}">
                                        {{ $related_product->name ?? '' }}
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price">
                                        {{-- @if($related_product->stock->stockDetails->first()->discount > 0)
                                            <strong>
                                                TK {{ number_format(($related_product->stock->stockDetails->first()->price ?? '') - ($related_product->stock->stockDetails->first()->discount ?? ''), 2 ) }}
                                            </strong>
                                            <del>
                                                TK {{ $related_product->stock->stockDetails->first()->price ?? '' }}
                                            </del>
                                        @else
                                            <strong>
                                                TK {{ $related_product->stock->stockDetails->first()->price ?? '' }}
                                            </strong>
                                        @endif --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                    <ul class="item_color ul_li clearfix">
                                        <li><a href="#!" data-bg-color="#739f7f"></a></li>
                                        <li><a href="#!" data-bg-color="#eede86"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                                <ul class="product_action_btns ul_li_center clearfix">
                                    <li><a class="addtocart_btn text-uppercase">Add To Cart</a></li>
                                </ul>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="fashion_minimal_product">
                            <ul class="product_label ul_li clearfix">
                                <li data-bg-color="#fb5d5d">-20%</li>
                                <li data-bg-color="#82ca9c">NEW</li>
                            </ul>
                            <div class="item_image">
                                <a class="image_wrap" href="#!">
                                    <img src="{{ asset('backend/product.jpg') }}" alt="image_not_found">
                                </a>
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="#!">Artwork Hawaii Shirt Brutus</a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="item_price"><strong>$19.12</strong> <del>$19.12</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- product_section - end
    ================================================== -->
@endsection

@push('css')
    <style>

        .card {
            display: flex;
            margin: auto;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23);
            background-color: rgb(255, 255, 255);
            padding: 0.8rem;
            width: 33rem;
        }

        .rg > input[type=radio] {
            position: absolute;
            visibility: hidden;
            display: none;
        }

        .rg > label {
            color: #332f90;
            display: inline-block;
            cursor: pointer;
            font-weight: bold;
            padding: 5px 20px;
            margin: 0;
        }

        .rg > input[type=radio]:checked + label {
            color: #ff00ff;
            background: greenyellow;
        }

        .rg > label + input[type=radio] + label {
            border-left: 1px solid #332f90;
        }

        .rg {
            border: 1px solid #332f90;
            display: inline-block;
            margin: 5px;
            border-radius: 10px;
            overflow: hidden;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }


        .rating > input{ display:none;}

        .rating > label {
            position: relative;
            width: 1.1em;
            font-size: 4vw;
            color: #FFD700;
            cursor: pointer;
        }

        .rating > label::before{
            content: "\2605";
            position: absolute;
            opacity: 0;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before {
            opacity: 1 !important;
        }

        .rating > input:checked ~ label:before{
            opacity:1;
        }

        .rating:hover > input:checked ~ label:before{ opacity: 0.4; }

        .checked {
            color: orange;
        }
    </style>
@endpush
@push('js')

    <script>
        $(document).ready(function () {

            $(".option").click(function () {
                $.get("{{ route('attributeAjaxList', $productData->id) }}", function (data) {
                    let strData = JSON.parse(JSON.stringify(data));
                    let attrdom = [];
                    let attrdomarray = [];

                    strData.forEach((attr, index) => {
                        attrdom[index] = document.getElementsByName(attr.name);
                        for (let i = 0; i < attrdom[index].length; i++) {
                            if (attrdom[index][i].checked) {
                                attrdomarray.push(attrdom[index][i].value);
                            }
                        }
                    });

                    $.get("{{ url('attribute/find-price') }}" + "/{{$productData->id}}/" + JSON.stringify(attrdomarray), (dataSet) => {
                        let allData = JSON.parse(JSON.stringify(dataSet));

                        if ($.isEmptyObject(allData)) {
                            let main_item_price = $('#main_item_price').html('')
                            item_price = `
                                <strong class="text-danger">
                                    Stock Unavailable
                                </strong>`;
                            main_item_price.append(item_price)
                        } else {
                            $('#stock_id').val('');
                            if (allData.quantity > 0) {
                                let main_item_price = $('#main_item_price').html('')
                                let item_price = '';
                                let st_id = allData.uuid;
                                if (allData.discount > 0) {
                                    let discount_price = (allData.price) - (allData.discount);
                                    item_price = `
                                        <input type="hidden" id="stock_id" value="` + st_id + `" />
                                        <strong>
                                            TK ` + discount_price.toFixed(2) + `
                                        </strong>
                                        <del>
                                            TK ` + allData.price + `
                                        </del>`;
                                } else {
                                    item_price = `
                                            <input type="hidden" id="stock_id" value="` + st_id + `" />
                                        <strong>
                                            TK ` + allData.price + `
                                        </strong>`;
                                }

                                main_item_price.append(item_price);
                            } else {
                                let main_item_price = $('#main_item_price').html('')
                                item_price = `
                                <strong class="text-danger">
                                    Stock Unavailable
                                </strong>`;
                                main_item_price.append(item_price)
                            }
                        }
                    });
                });
            });


            $('#add_to_cart').click(function () {
                let stock_details_id = $('#stock_id').val();
                let qty = parseInt($("#qty").val());
                let total_in = parseInt($("#total_in").val());
                let total_out = parseInt($("#total_out").val());
                let stock_limit = (total_in - total_out);
                let stock_check = (stock_limit - qty);
                console.log('total_in', total_in)
                console.log('total_out', total_out)
                console.log('stock_limit', stock_limit)
                console.log('stock_check', stock_check)
                if (stock_check > 0) {
                    $('.cart_btn').html('');
                    $.ajax({
                        type: "GET",
                        url: "{{route('ajax_add_to_cart')}}",
                        dataType: "json",
                        data: {id: stock_details_id, qty: qty},
                        success: function (dataResults) {
                            let allData = JSON.parse(JSON.stringify(dataResults));
                            let find_cart = allData.find_cart;
                            let cart = 0;
                            if (find_cart.length > 0){
                                cart = find_cart.length;
                            }
                            let cart_count = `<i class="fal fa-shopping-cart"></i>
                                    <span class="btn_badge myCart">`+cart+`</span>`;
                            $('.cart_btn').append(cart_count);
                            toastr.success(allData.success);
                        }
                    });
                } else{
                    let stock_limit_message = `Stock Limit `+stock_limit+`. Please Enter Limit Quantity.`
                    toastr.error(stock_limit_message);
                }
            });
        })

        /*Image Dynamic Start Here*/
        image_change('image0')
        function image_change(id) {
            $(".imageHide").css("display", "none")
            $("#"+id).css("display", "block")
        }
        /*Image Dynamic End Here*/

        //Toastr Alert Message Start Here
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        toastr.error("{{ $error }}");
        @endforeach
        @endif
        //Toastr Alert Message End Here
    </script>

@endpush
