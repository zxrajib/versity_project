<style>
    .carousel {
        height: 300px;
        margin-bottom: 0px;
    }
    .carousel-inner {
        height: 300px;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 10;
    }
    /* Declare heights because of positioning of img element */
    .carousel .item {
        width: 100%;
        height: 300px;
        background-color: #777;
    }
    .carousel-inner > .item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 300px;
    }
    a.carousel-control {
        background: #ffffff;
        opacity: 1;
        height: 100px;
        width: 50px;
        top: 33%;
        font-size: 50px !important;
    }
    a.carousel-control i {
        margin-top: 25px;
    }
    @media (min-width: 768px) {
        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
        }
    }
    img {
        background: red;
    }
</style>

@include('frontend.partials.slider_categories')
<div class="w3l_banner_nav_right">
    <section class="slider">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Menu -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Items -->
            <div class="carousel-inner">
                @foreach( $sliders as $key=>$slider)
                    <div class="item {{ $key==0 ? 'active' : '' }} w3l_banner_nav_right_banner" style="background:url({{ $slider->image ? ( asset( $_ENV['APP_DEV'].'backend/img/slider/'.$slider->image) ) : ( asset( $_ENV['APP_DEV'].'backend/slider.jpg') ) ?? '' }}) no-repeat 0px 0px; background-size: cover; ">
                        <h3 class="text-bold text-dark">{{ $slider->title ?? '' }}</h3>
                        <p class="text-dark">{{ $slider->description ?? '' }}</p>
                        <div class="more">
                            <a href="{{$slider->button_link ?? ''}}" class="button--saqui button--round-l
                                    button--text-thick" data-text="Shop now">{{$slider->button_text ?? ''}}</a>
                        </div>
                     </div>
                @endforeach
                {{--<div class="item">
                    <img src="https://picsum.photos/1500/600?image=2" alt="Slide 2" />
                </div>
                <div class="item">
                    <img src="https://picsum.photos/1500/600?image=3" alt="Slide 3" />
                </div>--}}
            </div>
            <a href="#carousel" class="left carousel-control" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
</div>




