@extends('layouts.app')

@section('title', 'News - Jonic')

@section('class', 'blog_grid_page')

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
                            <h1 class="h1-title">News upate</h1>
                        </div>
                        <div class="inner-banner-breadcrumb wow fadeInUp" data-wow-duration=".8s"
                            data-wow-delay=".2s">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}" title="Home">Home</a>
                                </li>
                                <li>
                                    <span>News</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- END OF MAIN BANNER -->
        <!-- START OF BLOG SECTION -->
        <section class="blog-section wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="container">
                <div class="blog-box-wp">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image14.jpg');"
                                        title="New machine will efficient big factory"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#" title="New machine will efficient big factory">New
                                           post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="New machine will efficient big factory"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image4.jpg');"
                                        title="How to build for best new machinery industry"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#"
                                            title="How to build for best new machinery industry">news</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="How to build for best new machinery industry"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image24.jpg');"
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
                                    <a href="#" class="sec-btn icon-lg"
                                        title="We are best any industrial & business solution"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image4.jpg');"
                                        title="Many industry companies engage in development"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#"
                                            title="Many industry companies engage in development">new post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="Many industry companies engage in development"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image17.jpg');"
                                        title="Some industry and factory are best in production"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#"
                                            title="Some industry and factory are best in production">Some industry and
                                            factory are best in production</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="Some industry and factory are best in production"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image34.jpg');"
                                        title="We operating big smart machineries"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#" title="We operating big smart machineries">new post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="We operating big smart machineries"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image7.jpg');"
                                        title="New machine will efficient big factory"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#" title="New machine will efficient big factory">New post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="New machine will efficient big factory"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image12.jpg');"
                                        title="How to build for best new machinery industry"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#"
                                            title="How to build for best new machinery industry">new post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="How to build for best new machinery industry"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-box">
                                <div class="blog-image">
                                    <a href="#" class="back-img"
                                        style="background-image: url('assets/images/products/image9.jpg');"
                                        title="We are best any industrial & business solution"></a>
                                    <p class="blog-published">7 June, 2024</p>
                                </div>
                                <div class="blog-box-content">
                                    <h4 class="h4-title">
                                        <a href="#"
                                            title="We are best any industrial & business solution">new post</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu nisi sem maximus
                                        suscipit.</p>
                                    <a href="#" class="sec-btn icon-lg"
                                        title="We are best any industrial & business solution"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-pagination">
                        <a class="pagination-nav pagination-prev" href="javascript:void(0)" title="Previous">
                            <i class="fas fa-chevron-left" aria-hidden="true"></i>
                        </a>
                        <ul>
                            <li class="current-page">
                                <a href="javascript:void(0)" title="1">1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="2">2</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="3">3</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="4">4</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" title="5">5</a>
                            </li>
                        </ul>
                        <a class="pagination-nav pagination-next" href="javascript:void(0)" title="Next">
                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF BLOG SECTION -->
    </main>
@endsection