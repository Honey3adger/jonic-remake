@extends('layouts.app')

@section('title', 'Home Page')

@section('class', 'index_page')

@section('content')
<main class="site-main">
    <!-- START OF HERO SECTION -->
    <section class="main-banner">
        <div class="banner-stripes">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="banner-shape-wp wow fadeInLeft" data-wow-duration=".8s">
            <div class="banner-shape">
                <span class="stripe"></span>
                <span class="stripe stripe-secondary"></span>
            </div>
        </div>
        <div class="swiper main-banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-banner-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content black-text">
                                    <h1 class="h1-title">
                                        <span>
                                            Welcome to Jonic Group
                                            <img src="assets/images/title-line.svg" width="342" height="13"
                                                alt="Title line">
                                        </span>

                                    </h1>
                                    <p class="text-lg banner-p">Your trusted source for premium food and household products.</p>
                                    <div class="banner-btn">
                                        <a href="{{route('about-us')}}" class="sec-btn" title="Discover More">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-image-path-main">
                                    <div class="banner-image-path-sub">
                                        <div class="banner-image back-img"
                                            style="background-image: url('assets/images/products/image1.jpg');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main-banner-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content black-text">
                                    <h1 class="h1-title">
                                        <span>
                                            Welcome to Jonic Group
                                            <img src="assets/images/title-line.svg" width="342" height="13"
                                                alt="Title line">
                                        </span>

                                    </h1>
                                    <p class="text-lg">We specialize in high-quality vegetable oils, canned tomatoes, seafood, spices, dairy, and fruit juices—featuring our renowned <span class="fw-bold">LaJonic</span> and <span class="fw-bold">De Hero</span> brands.</p>
                                    <div class="banner-btn">
                                        <a href="{{route('about-us')}}" class="sec-btn" title="Discover More">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-image-path-main">
                                    <div class="banner-image-path-sub">
                                        <div class="banner-image back-img"
                                            style="background-image: url('assets/images/products/image5.jpg');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide main-banner-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-content black-text">
                                    <h1 class="h1-title">
                                        <span>
                                            Welcome to Jonic Group
                                            <img src="assets/images/title-line.svg" width="342" height="13"
                                                alt="Title line">
                                        </span>

                                    </h1>
                                    <p class="text-lg">Committed to freshness, nutrition, and great taste, we serve retailers, wholesalers, and home consumers with top-quality essentials.</p>
                                    <div class="banner-btn">
                                        <a href="{{route('about-us')}}" class="sec-btn" title="Discover More">Discover
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-image-path-main">
                                    <div class="banner-image-path-sub">
                                        <div class="banner-image back-img"
                                            style="background-image: url('assets/images/products/image10.jpg');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HERO SECTION -->
    <!-- START OF HERO SECTION -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-images wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="about-top-image back-img"
                            style="background-image: url('assets/images/products/image7.jpg');">
                            <span class="logo-icon">
                                <img src="assets/images/jonic-logo.svg" width="48" height="48" alt="Logo Icon">
                            </span>
                        </div>
                        <div class="about-bottom-image back-img"
                            style="background-image: url('assets/images/products/image17.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                ABOUT US
                            </span>
                            <h2 class="h2-title">What We Do</h2>
                            <p>At Jonic Group, we are committed to delivering top-quality food products that meet the highest industry standards. Our mission is to provide safe, healthy, and delicious food to households and businesses. With years of industry experience, we’ve built strong relationships with expert producers and suppliers, ensuring a reliable supply chain.</p>
                        </div>
                        <div class="engineer-list">
                            <div class="engineer-list-item">
                                <span class="engineer-list-icon">
                                    <img src="assets/images/certified-engineer.svg" width="35" height="43"
                                        alt="Expert Engineer Logo">
                                </span>
                                <div class="engineer-list-content">
                                    <h4 class="h4-title">Expert Producer</h4>
                                    <p>Jonic Group partners with expert producers to ensure strict quality control. Our <span class="fw-bold">LaJonic</span> and <span class="fw-bold">De Hero</span> brands offer rich flavors, high nutrition, and hygiene across vegetable oil, tomatoes, sardines, and spices.</p>
                                </div>
                            </div>
                            <div class="engineer-list-item">
                                <span class="engineer-list-icon">
                                    <img src="assets/images/certified-engineer.svg" width="33" height="45"
                                        alt="Certified Engineer Logo">
                                </span>
                                <div class="engineer-list-content">
                                    <h4 class="h4-title">Certified Producer</h4>
                                    <p>Jonic Group ensures strict compliance with industry regulations for safe, authentic, and high-quality products. Registered with the <span class="fw-bold">CAC</span>, we hold <span class="fw-bold">NAFDAC</span> approval and trademark certifications, guaranteeing trust and safety in every product we offer.</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('about-us')}}" class="sec-btn" title="Discover More">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="company-timeline wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <span class="timeline-text">Since</span>
                        <div class="company-experiance">
                            <img src="assets/images/plus-icon.svg" width="20" height="20" alt="Plus Icon">
                            <div class="company-experiance-content">
                                <svg class="textcircle" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle"
                                            d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle" textLength="900">
                                            28 YEARS OF EXPERIANCE
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <span class="timeline-text">1995</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF HERO SECTION -->
    <!-- START OF SERVICE SECTION -->
    <section class="services light-bg">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title h5-title m-0 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                    <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                    Our Products
                </span>
                <h2 class="h2-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">Wide Range Of Our
                    Products</h2>
            </div>
            <div class="services-slider swiper wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image21.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="38" height="38"
                                    alt="All Maintenance Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="All Maintenance">25 liters vegetable oil </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to All Maintenance"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image22.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="33" height="37"
                                    alt="General Contract Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="General Contract">400g LaJonic tomato </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to General Contract"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image23.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="35" height="35"
                                    alt="Automobiles Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="Automobiles">400g De Hero tomato </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to Automobiles"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image24.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="35" height="35"
                                    alt="Mechanical Parts Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="Mechanical Parts">210g LaJonic tomato </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to Mechanical Parts"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image25.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="34" height="34"
                                    alt="Petroleum & Gas Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="Petroleum & Gas">210g De Hero tomato </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to Petroleum & Gas"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image26.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="33" height="33"
                                    alt="Electric Engineer Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="Electric Engineer">De Hero Chicken Spice </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to Electric Engineer"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image27.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="26" height="39"
                                    alt="smart technology Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="Smart Technology">De Hero Beef Cube </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to Smart Technology"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd">
                        <div class="services-box">
                            <div class="services-image">
                                <div class="back-img"
                                    style="background-image: url('assets/images/products/image28.jpg');"></div>
                            </div>
                            <div class="services-box-icon" style="background-color: black !important;">
                                <img src="assets/images/jonic-logo.svg" width="32" height="32"
                                    alt="Support 24x7 Icon">
                            </div>
                            <div class="services-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="24x7 Support">De Hero Chicken Cube </a>
                                </h4>
                                <!-- <p>Vivamus vari fermentum vestibulum consectetur morbi at odio.</p>
                                <a href="#" class="sec-btn icon-lg"
                                    title="Go to 24x7 Support"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- END OF SERVICE SECTION -->
    <!-- START OF JOINING SECTION -->
    <section class="join-us wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="join-us-content dark-bg">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                    GET SUPPLYS NOW
                            </span>
                            <h3 class="h3-title" style="font-size: 35px!important;">Want to stock up on premium food products? We’re here for you.
                            </h3>
                        </div>
                        <!-- <img src="assets/images/join-our-team.png" width="271" height="271"
                            alt="Join our team image"> -->
                        <a href="#" class="sec-btn" title="Get a Quote">Contact Us</a>
                        <div class="banner-shape">
                            <span class="stripe"></span>
                            <span class="stripe stripe-secondary"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF JOINING SECTION -->
    <!-- START OF SKILLS SECTION -->
    <section class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div id="counter" class="skills-content wow fadeInRight" data-wow-duration=".8s"
                        data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                Quality & Eficiency
                            </span>
                            <h2 class="h2-title">Few Reasons Why You Choose Us</h2>
                            <p>High-Quality Products: We prioritize freshness, nutrition, and taste</p>
                        </div>
                        <div class="skills-progress">
                            <div class="skills-progress-box">
                                <h6 class="h6-title">
                                    Quality
                                    <span>
                                        <span class="skill-count counting" data-count="99">0</span>%</span>
                                </h6>
                                <div class="skills-progressbar">
                                    <div class="skills-progressbar-thumb" style="width: 0%;" data-width="99%"></div>
                                </div>
                            </div>
                            <div class="skills-progress-box">
                                <h6 class="h6-title">
                                    Efficient
                                    <span>
                                        <span class="skill-count counting" data-count="99">0</span>%</span>
                                </h6>
                                <div class="skills-progressbar">
                                    <div class="skills-progressbar-thumb" style="width: 0%;" data-width="99%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-counter">
                            <div class="skills-count projects-done">
                                <div class="counting-wp">
                                    <div class="h3-title">
                                        <strong class="counting" data-count="100">0</strong>
                                        <span>+</span>
                                    </div>
                                    <span>Products</span>
                                </div>
                            </div>
                            <div class="skills-count worker-team">
                                <div class="counting-wp">
                                    <div class="h3-title">
                                        <strong class="counting" data-count="200">0</strong>
                                        <span>+</span>
                                    </div>
                                    <span>Staff</span>
                                </div>
                            </div>
                            <div class="skills-count satisfied-clients">
                                <div class="counting-wp">
                                    <div class="h3-title">
                                        <strong class="counting" data-count="3358">0</strong>
                                        <span>+</span>
                                    </div>
                                    <span>Satisfied Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 align-self-lg-center">
                    <div class="process-content-wp wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="process-item">
                            <div class="process-step">
                                <p class="h4-title">1</p>
                            </div>
                            <div class="process-content">
                                <h4 class="h4-title">Contact Us</h4>
                                <p>Reach out to us via phone, email, or our website to inquire about our premium food products and services. Our team is ready to assist you with your needs.</p>
                            </div>
                        </div>
                        <div class="process-item">
                            <div class="process-step">
                                <p class="h4-title">2</p>
                            </div>
                            <div class="process-content">
                                <h4 class="h4-title">Request Our Products</h4>
                                <p>Browse our wide range of high-quality food essentials and place your order. Whether you're a retailer or a wholesaler, we ensure a seamless ordering process.</p>
                            </div>
                        </div>
                        <div class="process-item">
                            <div class="process-step">
                                <p class="h4-title">3</p>
                            </div>
                            <div class="process-content">
                                <h4 class="h4-title">Get Your Product Supplied</h4>
                                <p>Enjoy fast and reliable delivery of your selected products. We guarantee quality, freshness, and efficiency in every order we fulfill.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF SKILLS SECTION -->
    <!-- START OF OUR WORK SECTION -->
    <section class="our-work">
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
                            <h3 class="h3-title m-0">Choose between La Jonic and De Hero Products</h3>
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
                                                            title="our products">De Hero products</a>
                                                    </h4>
                                                    <!-- <span class="work-category">product category</span> -->
                                                </div>
                                                <!-- <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a> -->
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
                                                            title="our products">La Jonic products</a>
                                                    </h4>
                                                    <!-- <span class="work-category">product catergory</span> -->
                                                </div>
                                                <!-- <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a> -->
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
                                                            title="our products">De Hero Products</a>
                                                    </h4>
                                                    <!-- <span class="work-category">product category</span> -->
                                                </div>
                                                <!-- <a href="#"
                                                    class="read-more-services sec-btn icon-lg"
                                                    title="our products"></a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide">
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
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF OUR WORK SECTION -->
    <!-- START OF PRICING SECTION -->
    <!-- <section class="pricing">
        <div class="container">
            <div class="sec-title">
                <span class="sub-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                    <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                    OUR PRICING
                </span>
                <h2 class="h2-title m-0 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">Find The Right
                    Plan</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="pricing-icon">
                            <span>
                                <img src="assets/images/basic-pricing.svg" width="40" height="40"
                                    alt="Basic pricing icon">
                            </span>
                        </div>
                        <div class="pricing-title">
                            <h4 class="h4-title">For Basic</h4>
                            <p>Vestibulum tempus at arcu nec pellentesque curabitur tellus turpis</p>
                        </div>
                        <div class="pricing-value">
                            <strong class="h3-title">
                                $99
                                <sub>/Monthly</sub>
                            </strong>
                        </div>
                        <div class="pricing-content">
                            <h6 class="h6-title">Your Benefits</h6>
                            <ul>
                                <li>In vitae nunc ornare magna tempor.</li>
                                <li>Integer risus diam, sollicitudin.</li>
                                <li>Mauris auctor tortor tortor.</li>
                                <li>Nam condimentum.</li>
                                <li>Curabitur volutpat.</li>
                            </ul>
                        </div>
                        <a href="pricing.html" class="sec-btn" title="Get Started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="pricing-icon">
                            <span>
                                <img src="assets/images/basic-pricing.svg" width="40" height="40"
                                    alt="Basic pricing icon">
                            </span>
                        </div>
                        <div class="pricing-title">
                            <h4 class="h4-title">For Standard</h4>
                            <p>Vestibulum tempus at arcu nec pellentesque curabitur tellus turpis</p>
                        </div>
                        <div class="pricing-value">
                            <strong class="h3-title">
                                $199
                                <sub>/Monthly</sub>
                            </strong>
                        </div>
                        <div class="pricing-content">
                            <h6 class="h6-title">Your Benefits</h6>
                            <ul>
                                <li>In vitae nunc ornare magna tempor.</li>
                                <li>Integer risus diam, sollicitudin.</li>
                                <li>Mauris auctor tortor tortor.</li>
                                <li>Nam condimentum.</li>
                                <li>Curabitur volutpat.</li>
                            </ul>
                        </div>
                        <a href="pricing.html" class="sec-btn" title="Get Started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="pricing-icon">
                            <span>
                                <img src="assets/images/basic-pricing.svg" width="40" height="40"
                                    alt="Basic pricing icon">
                            </span>
                        </div>
                        <div class="pricing-title">
                            <h4 class="h4-title">For Premium</h4>
                            <p>Vestibulum tempus at arcu nec pellentesque curabitur tellus turpis</p>
                        </div>
                        <div class="pricing-value">
                            <strong class="h3-title">
                                $299
                                <sub>/Monthly</sub>
                            </strong>
                        </div>
                        <div class="pricing-content">
                            <h6 class="h6-title">Your Benefits</h6>
                            <ul>
                                <li>In vitae nunc ornare magna tempor.</li>
                                <li>Integer risus diam, sollicitudin.</li>
                                <li>Mauris auctor tortor tortor.</li>
                                <li>Nam condimentum.</li>
                                <li>Curabitur volutpat.</li>
                            </ul>
                        </div>
                        <a href="pricing.html" class="sec-btn" title="Get Started">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF OUR WORK SECTION -->
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
    <!-- START OF GLOBAL CLIENTS SECTION -->
    <!-- <section class="global-clients light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2 align-self-center">
                    <div class="global-clients-list wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <img src="assets/images/boltshift.svg" width="130" height="34" alt="Boltshift Icon">
                        <img src="assets/images/lightbox.svg" width="130" height="33" alt="Lightbox Icon">
                        <img src="assets/images/shperule.svg" width="130" height="39" alt="Shperule Icon">
                        <img src="assets/images/globalbank.svg" width="130" height="30" alt="Global bank Icon">
                        <img src="assets/images/nietzsche.svg" width="130" height="31" alt="Nietzsche Icon">
                        <img src="assets/images/acme-corp.svg" width="130" height="29" alt="Acme corp Icon">
                        <img src="assets/images/polymath.svg" width="130" height="30" alt="Polymath Icon">
                        <img src="assets/images/featherdev.svg" width="130" height="25" alt="Featherdev Icon">
                        <img src="assets/images/boltshift.svg" width="130" height="34" alt="Boltshift Icon">
                        <img src="assets/images/lightbox.svg" width="130" height="33" alt="Lightbox Icon">
                        <img src="assets/images/shperule.svg" width="130" height="39" alt="Shperule Icon">
                        <img src="assets/images/globalbank.svg" width="130" height="30" alt="Global bank Icon">
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="global-clients-content wow fadeInRight" data-wow-duration=".8s"
                        data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                TRUSTED BY
                            </span>
                            <h2 class="h2-title">Our Global 500+ Clients</h2>
                        </div>
                        <p>Nullam iaculis quis mauris ut imperdiet. Vestibulum et augue pulvinar dui vehicula luctus
                            vel vitae metus. Nunc id pulvinar est, ut placerat lectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF GLOBAL CLIENTS SECTION -->
    <!-- START OF BLOG SECTION -->
    <!-- <section class="blog-section">
        <div class="container">
            <div class="sec-title wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                <span class="sub-title">
                    <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                    OUR NEWS
                </span>
                <h2 class="h2-title m-0">Latest News</h2>
            </div>
            <div class="blog-box-wp">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-image">
                                <a href="#" class="back-img"
                                    style="background-image: url('assets/images/products/image12.jpg');"
                                    title="New machine will efficient big factory"></a>
                                <p class="blog-published">7 June, 2024</p>
                            </div>
                            <div class="blog-box-content">
                                <h4 class="h4-title">
                                    <a href="#" title="New machine will efficient big factory">news</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                    suscipit.</p>
                                <a href="#" class="sec-btn"
                                    title="New machine will efficient big factory"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-image">
                                <a href="#" class="back-img"
                                    style="background-image: url('assets/images/products/image23.jpg');"
                                    title="How to build for best new machinery industry"></a>
                                <p class="blog-published">7 June, 2024</p>
                            </div>
                            <div class="blog-box-content">
                                <h4 class="h4-title">
                                    <a href="#"
                                        title="How to build for best new machinery industry">news post</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                    suscipit.</p>
                                <a href="#" class="sec-btn"
                                    title="How to build for best new machinery industry"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="blog-image">
                                <a href="#" class="back-img"
                                    style="background-image: url('assets/images/products/image15.jpg');"
                                    title="We are best any industrial & business solution"></a>
                                <p class="blog-published">7 June, 2024</p>
                            </div>
                            <div class="blog-box-content">
                                <h4 class="h4-title">
                                    <a href="#"
                                        title="We are best any industrial & business solution">news post</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                    suscipit.</p>
                                <a href="#" class="sec-btn"
                                    title="We are best any industrial & business solution"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END OF BLOG SECTION -->
</main>
@endsection