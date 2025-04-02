@extends('layouts.app')

@section('title', 'Our Organization - Jonic')

@section('class', 'portfolio_details_page')

@section('class-1', 'active-menu')

@section('content')
<main class="site-main">
    <!-- START OF MAIN BANNER -->
    <section class="inner-banner back-img" style="background-image: url('assets/images/products/image3.jpg');">
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
                            <h2 class="h1-title">Our Organization</h2>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <ul>
                                <li>
                                <a href="{{route('index')}}" title="Home">Home</a>
                                </li>
                                <li>
                                    <span>Investors</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF MAIN BANNER -->
    <section class="portfolio-content-wp wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-content">
                        <!-- <div class="portfolio-head">
                            <h1 class="h2-title m-0">Become an investor</h1>
                            <div class="portfolio-sharing">
                                <span>Share:</span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" title="Share on Facebook"
                                            target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" title="Share on Instagram"
                                            target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" title="Share on Linkedin"
                                            target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <p>The Company is committed to promoting Organization’ rights and takes necessary steps in ensuring same. The Board and the Management do significantly benefit from the contributions and advice of the shareholder members of the Audit Committee and contributions of Organization at Annual General Meetings.</p> -->
                        <div class="portfolio-description dark-bg">
                        <h2 class="h2-title text-white">Our Organization</h2>
                           <!--  <ul>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/client-icon.svg" width="20" height="24"
                                            alt="Client Icon">
                                    </span>
                                    <div class="description-text">
                                        <p>
                                            Client :
                                            <span>Oliver Smith</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/category-icon.svg" width="28" height="28"
                                            alt="Category Icon">
                                    </span>
                                    <div class="description-text">
                                        <p>
                                            Category :
                                            <span>Maintenance</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/project-date-icon.svg" width="23" height="25"
                                            alt="Calender Icon">
                                    </span>
                                    <div class="description-text">
                                        <p>
                                            Project Date :
                                            <span>7 March, 2024</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/category-location-icon.svg" width="17" height="25"
                                            alt="Location Icon">
                                    </span>
                                    <div class="description-text">
                                        <p>
                                            Location :
                                            <span>New York, USA</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>-->
                        </div> 
                        <!-- <div class="portfolio-feature-image back-img"
                            style="background-image: url('assets/images/products/image14.jpg');">
                        </div> -->
                        <p>The Company is committed to promoting Organization’ rights and takes necessary steps in ensuring same. The Board and the Management do significantly benefit from the contributions and advice of the shareholder members of the Audit Committee and contributions of Organization at Annual General Meetings.</p>
                        <h5 class="h5-title">Shareholder Rights</h5>
                        <p>All our Organization have the right to receive notice of general meetings, attend general meetings either in person or by proxy, vote at general meetings, receive annual reports, receive dividends if declared and the right to transfer their shares.</p>

                        <h5 class="h5-title">Our Registrars</h5>
                        <p>Organization should endeavor to communicate their inquiries, notice of any change/alteration to the shares or personal information recorded against the shares, and any other such important information to our registrars: First Registrars and Investor Services Limited at Plot 2, Abebe Village Road, Iganmu, Lagos. Organization can also download the information update forms below.</p>
                        <div class="portfolio-points">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/industry-service.svg" width="35" height="35"
                                            alt="Industry Service Icon">
                                    </span>
                                    <h4 class="h4-title m-0">First registrars Organization’ update form</h4>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/technology-process.svg" width="34" height="35"
                                            alt="Technology Process Icon">
                                    </span>
                                    <h4 class="h4-title m-0">E-Dividend Activation form</h4>
                                </li>
                                <li>
                                    <span class="icon">
                                        <img src="assets/images/quality-production.svg" width="30" height="34"
                                            alt="Quality Production Icon">
                                    </span>
                                    <h4 class="h4-title m-0">E- Product Activation form</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description dark-bg">
                        <h2 class="h2-title text-white">Corporate Information</h2>
                        </div>
                        <p>
                        FrieslandCampina WAMCO Nigeria PLC is an affiliate of Royal FrieslandCampina, Netherlands and Nigeria’s foremost dairy company and industry leader. The Company was incorporated in Nigeria under the Companies and Allied Matters Act (Cap. C20) Laws of the Federation of Nigeria 2004 as a Public Limited Liability Company. It has its manufacturing site in Ogba Industrial Estate, Ikeja, Lagos.
                        </p>
                        <p>
                        For over 60 years, FrieslandCampina WAMCO has been providing high quality dairy products through its brands, Peak, Three Crowns and Friso; these brands have become household names. Our primary consideration has always been our consumers therefore our products under these brand names are diverse and carefully tailored to fit into various diets, tastes and health specifications. We have defined our involvement in Nigeria by addressing three global challenges: nutrient security, sustainability and support for farmers.
                        </p>
                        <p>
We have a large portfolio that enjoys continuous growth and increased advantages for our investors.
                        </p>
                        <p>
                        For any investor related enquiries or suggestions based on the content uploaded on the portal, emails can be sent to investors.relations@jonicgroups.com.
                        </p>
                        <!-- <div class="portfolio-sub-images">
                            <a href="assets/images/feature-sub-image-1.jpg" class="popup-image"
                                title="Portfolio Sub Image">
                                <div class="portfolio-sub-image back-img"
                                    style="background-image: url('assets/images/products/image16.jpg');"></div>
                            </a>
                            <a href="assets/images/feature-sub-image-2.jpg" class="popup-image"
                                title="Portfolio Sub Image">
                                <div class="portfolio-sub-image back-img"
                                    style="background-image: url('assets/images/products/image12.jpg');"></div>
                            </a>
                        </div> -->
                        <h4 class="h4-title">Updates</h4>
                        
                        <div class="portfolio-list-item">
                            <ul>
                                <li>
                                    <span>Curabitur eu arcu sit amet orci malesuada posuere at non leo.</span>
                                </li>
                                <li>
                                    <span>Quisque semper lorem nisl, quis interdum quam suscipit at.</span>
                                </li>
                                <li>
                                    <span>Maecenas aliquet nunc ut dui euismod condimentum.</span>
                                </li>
                                <li>
                                    <span>Phasellus sem metus, hendrerit a posuere a, rutrum vel sem.</span>
                                </li>
                                <li>
                                    <span>Curabitur eu arcu sit amet orci malesuada posuere at non leo.</span>
                                </li>
                                <li>
                                    <span>Quisque semper lorem nisl, quis interdum quam suscipit at.</span>
                                </li>
                                <li>
                                    <span>Maecenas aliquet nunc ut dui euismod condimentum.</span>
                                </li>
                                <li>
                                    <span>Phasellus sem metus, hendrerit a posuere a, rutrum vel sem.</span>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="portfolio-nav">
                            <div class="portfolio-nav-link portfolio-nav-left">
                                <a href="portfolio-details.html" class="portfolio-nav-preview"
                                    title="Previous Portfolio">
                                    <div class="portfolio-nav-img">
                                        <div class="back-img"
                                            style="background-image: url(assets/images/previous-portfolio-image.jpg);">
                                        </div>
                                    </div>
                                    <span>Previous Portfolio</span>
                                </a>
                            </div>
                            <div class="portfolio-nav-link portfolio-nav-right">
                                <a href="portfolio-details.html" class="portfolio-nav-preview"
                                    title="Next Portfolio">
                                    <span>Next Portfolio</span>
                                    <div class="portfolio-nav-img">
                                        <div class="back-img"
                                            style="background-image: url(assets/images/next-portfolio-image.jpg);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection