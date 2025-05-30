<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Shop bán giày dép</title>
    <!--
        CSS
        ============================================= -->
    {{-- <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css"/>
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/main.css"> --}}

    @vite([
            'resources/css/store-front/linearicons.css',
            'resources/css/store-front/font-awesome.min.css',
            'resources/css/store-front/themify-icons.css',
            'resources/css/store-front/bootstrap.css',
            'resources/css/store-front/owl.carousel.css',
            'resources/css/store-front/nice-select.css',
            'resources/css/store-front/nouislider.min.css',
            'resources/css/store-front/ion.rangeSlider.css',
            'resources/css/store-front/ion.rangeSlider.skinFlat.css',
            'resources/css/store-front/magnific-popup.css',
            'resources/css/store-front/main.css'
        ]);

</head>

<body>
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h " href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active" ><a class="nav-link" href="index.html">Trang chủ</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="category/Nam/Boots/Boots.html" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                               aria-expanded="false">Nam</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="category/Nam/Boots/Boots.html">Boots</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nam/Sandal/Sandal.html">Sandal</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nam/SportShoe/SportShoe.html">Giày thể thao</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nam/RunningShoes/Runn1.html">Giày chạy bộ</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nam/SoccerShoes/Socc1.html">Giày đá banh</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown ">
                            <a href="category/Nu/Boots/Boots1.html" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                               aria-expanded="false">Nữ</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a class="nav-link" href="category/Nu/Boots/Boots1.html">Boots</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nu/Sandal/Sandal-01.html">Sandal</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nu/SportShoes/SportShoe-01.html">Giày thể thao</a></li>
                                <li class="nav-item"><a class="nav-link" href="category/Nu/RunningShoes/RunningShoes-01.html">Giày chạy bộ - đi bộ</a></li>

                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="category.html" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Khuyến mãi</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!--            <li class="nav-item"><a href="login.html" class="cart" id="cart"><span class="ti-bag"></span></a></li>-->
                        <li><a class="nav-link" href="#" id="cart"><i class="ti-bag" data-toggle="modal" data-target="#cart1"></i><span class="badge"><p><span class="total-count"></span></p></span></a></li>


                        <li class="nav-item"><a href="login.html" class="cart"><span class="ti-user"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Tìm kiếm">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>

</header>
<!-- End Header Area -->

<!--back to top-->
<a href="#" class="cd-top">Back To Top</a>
<!--end back to top-->

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Bộ Sưu tập mới!</h1>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Mô tả chi tiết sản phẩm</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Thêm vào giỏ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon1.png" alt="">
                    </div>
                    <h6>Miễn phí vận chuyển</h6>
                    <!--                    <p>Miễn phí vận chuyển cho tất cả các đơn đặt hàng</p>-->
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Chính sách hoàn trả</h6>
                    <!--                    <p>Free Shipping on all order</p>-->
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon3.png" alt="">
                    </div>
                    <h6>Hỗ trợ 24/7</h6>
                    <!--                    <p>Free Shipping on all order</p>-->
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Phương thức thanh toán</h6>
                    <!--                    <p>Free Shipping on all order</p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- Start category Area -->
<section class="category-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categories/gucci.jpg" alt="">
                            <a href="img/category/gucci.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Gucci</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categories/puma.jpg" alt="">
                            <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Puma</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categories/Nike.jpg" alt="">
                            <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Nike</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categories/adidas.jpg" alt="">
                            <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Adidas</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-deal">
                    <div class="overlay"></div>
                    <img class="img-fluid w-100 last" src="img/categories/LV-Archlight.jpg" alt="" >
                    <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                        <div class="deal-details">
                            <h6 class="deal-title">Louis Vuitton</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End category Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Sản phẩm mới</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>M1</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M1" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>

                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p2.jpg" alt="">
                        <div class="product-details">
                            <h6>M2</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">189.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M2" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
                        <div class="product-details">
                            <h6>M3</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="" class="social-info add-to-cart"
                                   data-name="M3" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
                        <div class="product-details">
                            <h6>M4</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M4" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                        <div class="product-details">
                            <h6>M5</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M5" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>

                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
                        <div class="product-details">
                            <h6>M6</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M6" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>

                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p7.jpg" alt="">
                        <div class="product-details">
                            <h6>M7</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M7" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>

                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>M8</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M8" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>

                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Đang kinh doanh</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p6.jpg" alt="">
                        <div class="product-details">
                            <h6>M9</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M9" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>M10</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M10" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p3.jpg" alt="">
                        <div class="product-details">
                            <h6>M11</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M11" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p5.jpg" alt="">
                        <div class="product-details">
                            <h6>M12</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M12" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>M13</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M13" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p4.jpg" alt="">
                        <div class="product-details">
                            <h6>M14</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M14" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p1.jpg" alt="">
                        <div class="product-details">
                            <h6>M15</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M15" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src="img/product/p8.jpg" alt="">
                        <div class="product-details">
                            <h6>M16</h6>
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info add-to-cart"
                                   data-name="M16" data-price="189">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Thêm vào giỏ</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Thêm vào yêu thích</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Ưu đãi lớn sắp kết thúc</h1>
                        <p> </p>
                        <!--                        <p>Who are in extremely love with eco friendly system.</p>-->
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Ngày</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Giờ</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Phút</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Giây</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua sắm ngay</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <h4>addidas New Hammer sole
                                for Sports person</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Thêm vào giỏ</span>
                            </div>
                        </div>
                    </div>
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>189.000đ</h6>
                                <h6 class="l-through">210.000đ</h6>
                            </div>
                            <h4>addidas New Hammer sole
                                for Sports person</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Thêm vào giỏ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2> Thương hiệu</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="img/brand/puma.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="img/brand/Adidas.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="img/brand/Gucci.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="img/brand/Louis-Vuitton.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="img/brand/Nike.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<!-- Start related-product Area -->
<!-- End related-product Area -->

<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Theo dõi chúng tôi trên các nền tảng</h6>
                    <p></p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <div class="single-footer-widget">
                        <a href="contact.html"><h6>Về chúng tôi</h6></a>
                        <p>Số điện thoại: 0789123456</p>
                        <p>Email: support@shoeshop.com</p>
                        <p>Địa chỉ: khu phố 6, phường Linh Trung, quận Thủ Đức, thành phố Hồ Chí Minh</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<!--Modal-->
<div class="modal fade" id="cart1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Giỏ hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="show-cart table">

                </table>
                <div>Tổng tiền: <span class="total-cart"></span>.000đ</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cart.html" type="button" class="btn btn-primary" style="background-color: #ffba00"> Thanh toán</a>
            </div>
        </div>
    </div>
</div>


<!--Java Script-->
{{-- <script src="js/vendor/jquery-2.2.4.min.js"></script> --}}
@vite(['resources/js/store-front/jquery-2.2.4.min.js'])
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
@vite(['resources/js/store-front/bootstrap.min.js', 'resources/js/store-front/jquery.ajaxchimp.min.js',
    'resources/js/store-front/jquery.nice-select.min.js', 'resources/js/store-front/jquery.sticky.js',
    'resources/js/store-front/nouislider.min.js', 'resources/js/store-front/countdown.js',
    'resources/js/store-front/jquery.magnific-popup.min.js', 'resources/js/store-front/owl.carousel.min.js',
    'resources/js/store-front/gmaps.min.js', 'resources/js/store-front/main.js']);

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

@vite(['resources/js/store-front/gmaps.min.js', 'resources/js/store-front/main.js']);

{{-- <script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!--gmaps Js-->
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script> --}}
</body>

</html>
