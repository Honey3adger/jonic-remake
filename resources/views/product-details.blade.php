@extends('layouts.app')

@section('title', 'Financials - Jonic')

@section('class', 'portfolio_details_page')

@section('class-1', 'active-menu')

@section('content')
<main class="site-main">
        <!-- START OF MAIN BANNER -->
        <section class="inner-banner back-img" style="background-image: url('assets/images/products/image1.jpg');">
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
                                <h2 class="h1-title">Product Details</h2>
                            </div>
                            <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                                data-wow-delay=".2s">
                                <ul>
                                    <li>
                                        <a href="index-2.html" title="Home">Home</a>
                                    </li>
                                    <li>
                                        <a href="our-team.html" title="Team">Products</a>
                                    </li>
                                    <li>
                                        <span>Product Details</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF MAIN BANNER -->
        <!-- OUR TEAM START -->
        <section class="team-member">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member-image wow fadeInLeft back-img" data-wow-duration=".8s"
                            data-wow-delay=".2s"
                            style="background-image: url('assets/images/products/image1.jpg');"></div>
                    </div>
                    <div class="col-lg-6 align-self-lg-center">
                        <div class="team-member-info wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="sec-title">
                                <span class="sub-title">
                                    <img src="assets/images/setting-icon.svg" width="18" height="18"
                                        alt="Setting Icon">
                                    De Hero Product
                                </span>
                                <h2 class="h2-title">De Hero Sachet Milk</h2>
                                <p>Phasellus maximus libero nulla, vitae varius nisi mollis vitae. Ut sit amet hendrerit
                                    dui, vitae consequat sapien. In eget risus ac nulla porta porta ornare ut dolor.</p>
                            </div>
                            <div id="counter" class="single-team-member-content skills">
                                <div class="skills-progress">
                                    <div class="skills-progress-box">
                                        <h6 class="h6-title">
                                            Quality
                                            <span>
                                                <span class="skill-count counting" data-count="99">99</span>%</span>
                                        </h6>
                                        <div class="skills-progressbar">
                                            <div class="skills-progressbar-thumb" style="width: 0%;" data-width="80%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skills-progress-box">
                                        <h6 class="h6-title">
                                           Nurtrition
                                            <span>
                                                <span class="skill-count counting" data-count="99">99</span>%</span>
                                        </h6>
                                        <div class="skills-progressbar">
                                            <div class="skills-progressbar-thumb" style="width: 0%;" data-width="90%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="team-member-contact">
                                <ul>
                                    <li>
                                        <div>
                                            <b>Phone:</b>
                                            <a href="tel:+919879874987" title="Call to +91 987 9874 987">+91 987 9874
                                                987</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <b>Email:</b>
                                            <a href="https://html.geekcodelab.com/cdn-cgi/l/email-protection#563f383039162522332033387835393b" title="Mail to info@steven.com"><span class="__cf_email__" data-cfemail="eb82858d84ab989f8e9d8e85c5888486">[email&#160;protected]</span></a>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div>
                                            <b>Experience:</b>
                                            <span>10 Years</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <b>Follow me:</b>
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/" title="Follow on Facebook"
                                                        target="_blank">
                                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/" title="Follow on Instagram"
                                                        target="_blank">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.linkedin.com/" title="Follow on Linkedin"
                                                        target="_blank">
                                                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="about-team-member wow fadeInLeft" data-wow-duration=".8s" data-wow-delay=".2s">
                            <h4 class="h4-title">About Me</h4>
                            <p>Pellentesque rhoncus facilisis risus, sit amet suscipit purus gravida non. In pulvinar,
                                eros sed molestie rhoncus, magna lacus suscipit dui, efficitur scelerisque leo lectus
                                pretium urna. Etiam suscipit suscipit turpis, gravida vulputate metus tincidunt quis.
                                Aenean a sapien neque. Aenean porttitor odio vel lectus fringilla faucibus. Integer
                                viverra tortor justo, non lacinia enim consequat vel. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</p>
                            <p>Fusce commodo, odio nec ultricies aliquam, neque enim pellentesque ante, eget porttitor
                                nisi urna sodales est. Aenean vulputate neque ut velit viverra, quis viverra lorem
                                sollicitudin. Aliquam finibus turpis ac leo elementum consectetur. Vivamus ac odio
                                blandit, tempus tortor vel, laoreet turpis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member-background wow fadeInRight" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <h4 class="h4-title">Professional Background</h4>
                            <p>Praesent quis diam ut libero porttitor faucibus id at tellus. Maecenas imperdiet lorem et
                                augue tempor, eu ultrices eros rhoncus.</p>
                            <ul>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/business-expert.svg" width="30" height="30"
                                            alt="Business Expert Icon">
                                    </span>
                                    <div class="description-text">
                                        <h6 class="h6-title">Business Expert</h6>
                                        <p>Quisque elementum imperdiet dictum sed aliquet mattis.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/team-leader.svg" width="28" height="28"
                                            alt="Team Leader Icon">
                                    </span>
                                    <div class="description-text">
                                        <h6 class="h6-title">Team Leader</h6>
                                        <p>Quisque elementum imperdiet dictum sed aliquet mattis.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/product-expert.svg" width="26" height="30"
                                            alt="Product Expert Icon">
                                    </span>
                                    <div class="description-text">
                                        <h6 class="h6-title">Product Expert</h6>
                                        <p>Quisque elementum imperdiet dictum sed aliquet mattis.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/consultant-advice.svg" width="26" height="26"
                                            alt="Consultant Advice Icon">
                                    </span>
                                    <div class="description-text">
                                        <h6 class="h6-title">Consultant Advice</h6>
                                        <p>Quisque elementum imperdiet dictum sed aliquet mattis.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- OUR TEAM END -->
    </main>
@endsection