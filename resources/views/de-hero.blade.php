
@extends('layouts.app')

@section('title', 'De Hero- Jonic')

@section('class', 'about_us')

@section('content')
<main class="site-main">
    <!-- START OF INNER BANNER -->
    <section class="inner-banner back-img" style="background-image: url('assets/images/products/image28.jpg');">
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
                            <h1 class="h1-title">De Hero</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="index-2.html" title="Home">Home</a>
                                </li>
                                <li>
                                    <span>What We Do</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF INNER BANNER -->
    <!-- START OF De Hero -->
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
                                De Hero
                            </span>
                            <h2 class="h2-title">At Jonic Group,</h2>
                            <p> we are dedicated to delivering top-tier food products that meet the highest industry standards. Our mission is to bring safe, healthy, and delicious food items to every household and business. With years of experience in the industry, we have built strong relationships with expert producers and suppliers, ensuring a steady and reliable supply chain. We take pride in offering a diverse range of vegetable oils, canned tomatoes, seafood, spices, dairy, and beverages, catering to the needs of homes, restaurants, and food retailers.  
                            </p>
                        </div>
                        <div class="engineer-list">
                            <div class="engineer-list-item">
                                <span class="engineer-list-icon">
                                <img src="assets/images/certified-engineer.svg" width="33" height="45"
                                alt="Certified Engineer Logo">
                                </span>
                                <div class="engineer-list-content">
                                    <h4 class="h4-title">Expert Producer</h4>
                                    <p>Jonic Group partners with expert producers who uphold strict quality control measures in food processing and packaging. Our brands, LaJonic and De Hero, are known for their rich flavors, high nutritional value, and hygienic production processes. Whether it's vegetable oil, tomatoes, sardines, or spices, we ensure that our products remain a top choice in the market.</p>
                                </div>
                            </div>
                            <div class="engineer-list-item">
                                <span class="engineer-list-icon">
                                    <img src="assets/images/certified-engineer.svg" width="33" height="45"
                                        alt="Certified Engineer Logo">
                                </span>
                                <div class="engineer-list-content">
                                    <h4 class="h4-title">Certified Producer</h4>
                                    <p>Jonic Group operates under strict compliance with industry regulations, ensuring that all our products are safe, authentic, and high-quality. We are registered with the Corporate Affairs Commission (CAC) and have obtained necessary certifications, including NAFDAC approval and trademark registration. These certifications guarantee that our products are trusted and safe for consumption.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF De Hero -->
    <!-- START OF NEW INNOVATIONS -->
    <div class="marquee-text-wp">
        <div class="marquee-text wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <span class="h1-title">Jonic Groups Jonic Groups Jonic Groups Jonic Groups</span>
            <span class="h1-title">Groups Jonic Groups Jonic Groups Jonic Groups Jonic</span>
        </div>
        <div class="marquee-text wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <span class="h1-title">Groups Jonic Groups Jonic Groups Jonic Groups Jonic</span>
            <span class="h1-title">Jonic Groups Jonic Groups Jonic Groups Jonic Groups</span>
        </div>
    </div>
    <!-- START OF NEW INNOVATIONS -->
    <!-- START OF HOW WE WORK -->
    {{--<section class="how-we-work light-bg">
        <div class="container">
            <div class="sec-title text-center wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                <span class="sub-title">
                    <img src="assets/images/certified-engineer.svg" width="18" height="18" alt="Setting Icon">
                    OUR SUPPLY PROCESS
                </span>
                <h2 class="h2-title">See How To get Supplys</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <span>01</span>
                        <h4 class="h4-title">Get In Touch</h4>
                        <p>Reach out to us via phone, email, or our website to inquire about our premium food products and services. Our team is ready to assist you with your needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <span>02</span>
                        <h4 class="h4-title">Request Our Products</h4>
                        <p>Browse our wide range of high-quality food essentials and place your order. Whether you're a retailer or a wholesaler, we ensure a seamless ordering process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                        <span>03</span>
                        <h4 class="h4-title">Get Your Product Supplied</h4>
                        <p>Enjoy fast and reliable delivery of your selected products. We guarantee quality, freshness, and efficiency in every order we fulfill.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <!-- END OF HOW WE WORK -->
    <!-- START OF JOIN INDUSTRY -->
    {{--<section class="join-us wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
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
                            <h3 class="h3-title" style="font-size: 35px!important;">Want to stock up on premium food products? We’re here for you.</h3>
                        </div>
                        <!-- <img src="assets/images/join-our-team.png" width="271" height="271"
                            alt="Join our team image"> -->
                        <a href="contact-us.html" class="sec-btn" title="Get a Quote">Contact Us</a>
                        <div class="banner-shape">
                            <span class="stripe"></span>
                            <span class="stripe stripe-secondary"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}

    <!-- END OF JOIN INDUSTRY -->
    <!-- START OF INNOVATIONS -->
    {{--<section class="why-choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-content wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                WHY CHOOSE US
                            </span>
                            <h2 class="h2-title">At Jonic Group,</h2>
                        </div>
                        <P> we combine high-quality products with excellent customer service to ensure the best experience for our clients. We prioritize freshness, nutrition, and taste, while our dedicated team is always available to assist with orders and inquiries.</P>
                        <ul>
                            <li>
                                <span>Efficient Supply Chain: We ensure fast and reliable deliveries across Nigeria  
                                .</span>
                            </li>
                            <li>
                                <span>Certified and Trusted: All our products meet industry standards and are NAFDAC-approved  </span>
                            </li>
                            <li>
                                <span>Competitive Prices: We offer the best market rates for retailers and wholesalers  
                                </span>
                            </li>
                        </ul>
                        <a href="services.html" class="sec-btn" title="Discover More">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-lg-center">
                    <div class="why-choose-image-wp wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-8">
                                <div class="why-choose-image why-choose-1 back-img"
                                    style="background-image: url('assets/images/products/image18.jpg');"></div>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="why-choose-image why-choose-2 back-img"
                                    style="background-image: url('assets/images/products/image29.jpg');"></div>
                            </div>
                            <div class="col-12">
                                <div class="why-choose-image why-choose-3 back-img"
                                    style="background-image: url('assets/images/products/image30.jpg');"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    
    {{--<section class="we-are-global">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="world-map-wp wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="world-map">
                            <img src="assets/images/world-map.png" width="899" height="537" alt="World map">
                            <!-- <span class="alaska"></span>
                            <span class="usa"></span>
                            <span class="brazil"></span>
                            <span class="greenland"></span> -->
                            <span class="africa"></span>
                            <!-- <span class="russia"></span>
                            <span class="india"></span>
                            <span class="china"></span>
                            <span class="russia-2"></span>
                            <span class="australia"></span> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-lg-center">
                    <div class="global-content wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="sec-title">
                            <span class="sub-title">
                                <img src="assets/images/certified-engineer.svg" width="18" height="18"
                                    alt="Setting Icon">
                                WE ARE NATIONWIDE
                            </span>
                            <h3 class="h3-title">We Have 3000+ Customers Nationwide</h3>
                        </div>
                        <p>Trusted by 5000+ customers across the nation, we take pride in delivering high-quality products with reliability and excellence. Join our growing network of satisfied clients today!</p>
                        <a href="contact-us.html" class="sec-btn" title="Contact Us">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
   
</main>
@endsection