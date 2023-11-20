<style>
    .carousel {
    height: 400px;
        margin-bottom: 60px;
    }
    .carousel-caption {
    z-index: 10;
    }
    .carousel .item {
    width: 100%;
    height: 400px;
        background-color: #777;
    }
    .carousel-inner > .item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
        height: 400px;
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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

                <div class="item active">
                    <img src="https://picsum.photos/1500/600?image=1" alt="Slide 1" />
                </div>
                <div class="item">
                    <img src="https://picsum.photos/1500/600?image=2" alt="Slide 2" />
                </div>
                <div class="item">
                    <img src="https://picsum.photos/1500/600?image=3" alt="Slide 3" />
                </div>
            </div>
            <a href="#carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </section>
</div>
<script>
jQuery("#carousel").carousel();
</script>




