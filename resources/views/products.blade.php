@extends('layouts.app')

@section('title', 'Product - Jonic')

@section('class', 'pservices_listing_page')

@section('content')

<main class="site-main">
    <!-- START OF BANNER -->
    <section class="inner-banner back-img" style="background-image: url('assets/images/products/image30.jpg');">
        <div class="banner-stripes">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="banner-shape-wp wow fadeInRight for-des" data-wow-duration=".8s">
            <div class="banner-shape">
                <span class="stripe"></span>
                <span class="stripe stripe-secondary"></span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-banner-content-wp white-text text-center">
                        <div class="inner-banner-content wow fadeInUp" data-wow-duration=".8s">
                            <h1 class="h1-title">Our Products</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <ul>
                                <li>
                                <a href="{{route('index')}}" title="Home">Home</a>
                                </li>
                                <li>
                                    <span>products</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->
    <!-- START OF SERVICES LISTING -->
    <section class="main-services-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image1.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="38" height="38"
                                alt="All Maintenance Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="All Maintenance">De hero sachet milk</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to All Maintenance"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image10.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="33" height="37"
                                alt="General Contract Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="General Contract">La Jonic sardine</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to General Contract"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image20.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="35" height="35"
                                alt="Automobiles Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="Automobiles">La Jonic vegetable oil (25 liters)</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg" title="Go to Automobiles"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image30.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="35" height="35"
                                alt="Mechanical Parts Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="Mechanical Parts">De Hero pure and fresh ( mango)</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to Mechanical Parts"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image19.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="34" height="34"
                                alt="Petroleum & Gas Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="Petroleum & Gas">De Hero Vegetable oil (25 liters)</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to Petroleum & Gas"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image29.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="33" height="33"
                                alt="Electric Engineer Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="Electric Engineer">De hero beef cube</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to Electric Engineer"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image35.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="26" height="39"
                                alt="smart technology Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="Smart Technology">De Hero pure and fresh (Orange)</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg"
                                title="Go to Smart Technology"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-sm-6">
                    <div class="services-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="services-image">
                            <div class="back-img"
                                style="background-image: url('assets/images/products/image21.jpg');"></div>
                        </div>
                        <div class="services-box-icon">
                            <img src="assets/images/jonic-logo.svg" width="32" height="32"
                                alt="Support 24x7 Icon">
                        </div>
                        <div class="services-box-content">
                            <h4 class="h4-title">
                                <a href="{{route('product-details')}}" title="24x7 Support">La Jonic vegetable oil (10liters)</a>
                            </h4>
                            <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                            <a href="#" class="sec-btn icon-lg" title="Go to 24x7 Support"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF SERVICES LISTING -->
    <!-- START OF OUR WORK SECTION -->
     <!-- <section class="our-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-work-content-wp">
                        <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                Products
                            </span>
                            <h2 class="h2-title m-0">Explore Our Finest Products</h2>
                        </div>
                        <div class="more-work">
                            <a href="#" class="sec-btn wow fadeInUp" data-wow-duration=".8s"
                                data-wow-delay=".2s" title="Discover More">Discover More</a>
                        </div>
                        <div class="our-work-slider-wp wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="swiper our-work-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image7.jpg');"></div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">product category</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image17.jpg');"></div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">product category</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image8.jpg');"></div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">product catergory</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image18.jpg');">
                                            </div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">products category</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image9.jpg');">
                                            </div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">product category</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="our-work-box">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/products/image29.jpg');">
                                            </div>
                                            <div class="our-work-content">
                                                <div class="our-work-name">
                                                    <h4 class="h4-title">
                                                        <a href="#"
                                                            title="our products">our products</a>
                                                    </h4>
                                                    <span class="work-category">product category</span>
                                                </div>
                                                <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF OUR WORK SECTION -->
    <!-- START OF QUALITY SECTION -->
    <section class="best-quality">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                <span class="sub-title">
                    <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                    WHAT WE PROVIDE
                </span>
                <h2 class="h2-title">We Provide Best Quality</h2>
            </div>
            <div class="sec-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="best-quality-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <span class="quality-icon">
                                <img src="assets/images/all-maintenance-icon.svg" width="38" height="38"
                                    alt="All Maintenance Icon">
                            </span>
                            <div class="quality-content">
                                <h4 class="h4-title">High-Quality Products</h4>
                                <p>We prioritize freshness, nutrition, and taste.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="best-quality-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <span class="quality-icon">
                                <img src="assets/images/general-contract-icon.svg" width="33" height="37"
                                    alt="General Contract Icon">
                            </span>
                            <div class="quality-content">
                                <h4 class="h4-title">Excellent Customer Service</h4>
                                <p>Our team is always available to assist with orders and inquiries  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="best-quality-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <span class="quality-icon">
                                <img src="assets/images/automobiles-icon.svg" width="35" height="35"
                                    alt="Automobiles Icon">
                            </span>
                            <div class="quality-content">
                                <h4 class="h4-title">Efficient Supply Chain</h4>
                                <p>We ensure fast and reliable deliveries across Nigeria  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="best-quality-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <span class="quality-icon">
                                <img src="assets/images/mechanical-parts-icon.svg" width="35" height="35"
                                    alt="Mechanical Parts Icon">
                            </span>
                            <div class="quality-content">
                                <h4 class="h4-title">Competitive Prices</h4>
                                <p>We offer the best market rates for retailers and wholesalers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF QUALITY SECTION -->
    <!-- START OF FAQ SECTION -->
    <!-- <section class="faq-section dark-bg">
        <div class="banner-shape">
            <span class="stripe"></span>
            <span class="stripe stripe-secondary"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2 align-self-center">
                    <div class="faq-content wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                FAQ
                            </span>
                            <h2 class="h2-title m-0">Do You Have Any Question ?</h2>
                        </div>
                        <div class="faq-accordian white-text">
                            <div class="faq-accordian-box">
                                <div class="faq-accordian-title">
                                    <h6 class="h6-title">Compliance crucial in product design ?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-accordian-content">
                                    <p>Quisque sed risus gravida, condimentum risus ac, euismod arcu. Proin ornare
                                        arcu non finibus finibus. Nullam et fringilla quam, sit amet feugiat eros.
                                        Maecenas scelerisque, libero at malesuada tempus, nulla ante sollicitudin
                                        tortor, sed placerat leo lacus ac nisi.</p>
                                </div>
                            </div>
                            <div class="faq-accordian-box">
                                <div class="faq-accordian-title">
                                    <h6 class="h6-title">Et harum quidem rerum facilis est et expedita?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-accordian-content">
                                    <p>Quisque sed risus gravida, condimentum risus ac, euismod arcu. Proin ornare
                                        arcu non finibus finibus. Nullam et fringilla quam, sit amet feugiat eros.
                                        Maecenas scelerisque, libero at malesuada tempus, nulla ante sollicitudin
                                        tortor, sed placerat leo lacus ac nisi.</p>
                                </div>
                            </div>
                            <div class="faq-accordian-box">
                                <div class="faq-accordian-title">
                                    <h6 class="h6-title">How do I choose right factory for manufacturing ?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-accordian-content">
                                    <p>Quisque sed risus gravida, condimentum risus ac, euismod arcu. Proin ornare
                                        arcu non finibus finibus. Nullam et fringilla quam, sit amet feugiat eros.
                                        Maecenas scelerisque, libero at malesuada tempus, nulla ante sollicitudin
                                        tortor, sed placerat leo lacus ac nisi.</p>
                                </div>
                            </div>
                            <div class="faq-accordian-box">
                                <div class="faq-accordian-title">
                                    <h6 class="h6-title">What is the process of product manufacturing ?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-accordian-content">
                                    <p>Quisque sed risus gravida, condimentum risus ac, euismod arcu. Proin ornare
                                        arcu non finibus finibus. Nullam et fringilla quam, sit amet feugiat eros.
                                        Maecenas scelerisque, libero at malesuada tempus, nulla ante sollicitudin
                                        tortor, sed placerat leo lacus ac nisi.</p>
                                </div>
                            </div>
                            <div class="faq-accordian-box">
                                <div class="faq-accordian-title">
                                    <h6 class="h6-title">Do we have the best business services ?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-accordian-content">
                                    <p>Quisque sed risus gravida, condimentum risus ac, euismod arcu. Proin ornare
                                        arcu non finibus finibus. Nullam et fringilla quam, sit amet feugiat eros.
                                        Maecenas scelerisque, libero at malesuada tempus, nulla ante sollicitudin
                                        tortor, sed placerat leo lacus ac nisi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="in-touch-form wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <h3 class="h3-title">Get In Touch Now !</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-field">
                                        <input type="text" class="input-field" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-field">
                                        <input type="email" class="input-field" placeholder="Email Address"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-field">
                                        <input type="number" class="input-field" placeholder="Phone No." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-field">
                                        <textarea name="message" class="input-field"
                                            placeholder="Message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-field form-submit-btn">
                                        <button type="submit" class="sec-btn">Submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF FAQ SECTION -->
    <!-- START OF TESTIMONIALS SECTION -->
    <!-- <section class="testimonials">
        <img src="assets/images/globe.svg" class="bg-glob" width="687" height="744" alt="Globe Icon">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <span class="sub-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                            TESTIMONIAL
                        </span>
                        <h2 class="h2-title m-0 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">What
                            Client Say About Us</h2>
                    </div>
                    <div class="swiper testimonial-slider wow fadeInUp" data-wow-duration=".8s"
                        data-wow-delay=".2s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <span class="quote_icon"></span>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <div class="back-img"
                                                style="background-image: url(assets/images/mark-john.jpg);"></div>
                                        </div>
                                        <div class="author-content">
                                            <h4 class="h4-title">Mark John</h4>
                                            <span>Our Client</span>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width: 96%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text overflow-text" data-simplebar>
                                            <p>In hac habitasse platea dictumst. Mauris tortor mauris, ornare non
                                                efficitur et, condimentum ac magna. Vivamus rutrum enim vel elit
                                                pharetra, et mollis tellus porta. Quisque quis augue elementum,
                                                bibendum odio id, lobortis lacus. Ut commodo ac enim sit amet
                                                pellentesque. Aliquam sodales a leo sed aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <span class="quote_icon"></span>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <div class="back-img"
                                                style="background-image: url(assets/images/patrick-palmer.jpg);">
                                            </div>
                                        </div>
                                        <div class="author-content">
                                            <h4 class="h4-title">Mark John</h4>
                                            <span>Our Client</span>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width: 96%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text overflow-text" data-simplebar>
                                            <p>In hac habitasse platea dictumst. Mauris tortor mauris, ornare non
                                                efficitur et, condimentum ac magna. Vivamus rutrum enim vel elit
                                                pharetra, et mollis tellus porta. Quisque quis augue elementum,
                                                bibendum odio id, lobortis lacus. Ut commodo ac enim sit amet
                                                pellentesque. Aliquam sodales a leo sed aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <span class="quote_icon"></span>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <div class="back-img"
                                                style="background-image: url(assets/images/mark-john.jpg);"></div>
                                        </div>
                                        <div class="author-content">
                                            <h4 class="h4-title">Mark John</h4>
                                            <span>Our Client</span>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width: 96%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-text overflow-text" data-simplebar>
                                            <p>In hac habitasse platea dictumst. Mauris tortor mauris, ornare non
                                                efficitur et, condimentum ac magna. Vivamus rutrum enim vel elit
                                                pharetra, et mollis tellus porta. Quisque quis augue elementum,
                                                bibendum odio id, lobortis lacus. Ut commodo ac enim sit amet
                                                pellentesque. Aliquam sodales a leo sed aliquam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF TESTIMONIALS SECTION -->
</main>
@endsection