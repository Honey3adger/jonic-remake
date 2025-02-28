@extends('layouts.app')

@section('title', 'Carreer - Jonic')

@section('class', 'portfolio-2_page')

@section('content')
<main class="site-main">
    <!-- START OF MAIN BANNER -->
    <section class="inner-banner back-img" style="background-image: url('assets/images/inner_banner_image.jpg');">
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
                            <h1 class="h1-title">Portfolio</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}" title="Home">Home</a>
                                </li>
                                <li>
                                    <span>Portfolio</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF MAIN BANNER -->
    <!-- OUR PORTFOLIO START -->
    <section class="explore-work explore-work-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="explore-work-content-wp">
                        <div class="portfolio-tabs wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
                            <div data-simplebar>
                                <ul>
                                    <li data-filter="*">
                                        <a href="javascript:void(0)" class="is-checked" title="All">All</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-filter=".maintenance"
                                            title="Maintenance">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-filter=".technology"
                                            title="Smart Technology">Smart Technology</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-filter=".engineering"
                                            title="Engineering">Engineering</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-filter=".manufacturing"
                                            title="Manufacturing">Manufacturing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="explore-work-projects wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <div class="row grid">
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item technology">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-1.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item technology">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-2.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-sm-6 grid-item manufacturing">
                                    <div class="explore-work-box our-work-box  image-lg">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-3.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-sm-6 grid-item maintenance">
                                    <div class="explore-work-box our-work-box image-lg">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-4.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item maintenance">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-5.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item manufacturing">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-6.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item engineering">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-7.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item engineering">
                                    <div class="explore-work-box our-work-box image-sm">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-8.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-sm-6 grid-item engineering">
                                    <div class="explore-work-box our-work-box  image-lg">
                                        <div class="back-img"
                                            style="background-image: url('assets/images/portfolio-tab-9.jpg');">
                                        </div>
                                        <div class="explore-work-content our-work-content">
                                            <div class="explore-work-name our-work-name">
                                                <h4 class="h4-title">
                                                    <a href="portfolio-details.html"
                                                        title="Electronic Material">Electronic Material</a>
                                                </h4>
                                                <span class="work-category">Industry Work</span>
                                            </div>
                                            <a href="portfolio-details.html"
                                                class="read-more-services sec-btn icon-lg"
                                                title="Go to Electronic Material"></a>
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
    <!-- OUR PORTFOLIO END -->
</main>
@endsection