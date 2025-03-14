<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Induris, Factory Template, Industrial Template">
    <meta name="description" content="Induris - Factory & Industrial HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Default Title')</title>
    <!-- FavIcon Link -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Swiper Slider CSS Link -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnific Popup CSS Link -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Animate CSS Link -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Main Style CSS Link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="fixed @yield('class', 'main class')">
    <!-- START OF LOADER -->
    <div class="loader-box">
        <div class="loader">
            <!-- <img src="assets/images/jonic-logo.svg" width="165" height="34" alt="Loader Main"> -->
        </div>
    </div>
    <!-- LOADER END -->
    <!-- START OF HEADER -->
    <!-- Header -->
    @include('snippets.header')
    <!-- END OF HEADER -->
    <!-- START OF MAIN -->
    @yield('content')
    <!-- END OF MAIN -->
    <!-- START OF FOOTER -->
    @include('snippets.footer')
    <!-- END OF FOOTER -->
    <!-- SEARCH MODAL START -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-search-wp">
                        <div class="modal-search-content">
                            <h2 class="modal-title h3-title" id="searchModalLabel">Search</h2>
                            <form>
                                <div class="modal-search-bar">
                                    <input type="text" placeholder="Type a keyword" required>
                                    <button type="submit">
                                        <img src="assets/images/search-icon.svg" width="20" height="20"
                                            alt="Search Icon">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="banner-shape">
                        <span class="stripe"></span>
                        <span class="stripe stripe-secondary"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SEARCH MODAL END -->
    <!-- SCROLL TO TOP Start -->
    <a href="javascript:void(0);" id="scroll-to-top" class="scroll-to-top" title="Scroll to Top">
        <i class="fas fa-arrow-up"></i>
    </a>
    <!-- SCROLL TO TOP End -->
    <!-- Jquery JS Link -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap and Popper JS Link -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Simplebar JS Link -->
    <script src="assets/js/simplebar.js"></script>
    <!-- Font Awesome JS Link -->
    <script src="assets/js/font-awesome.min.js"></script>
    <!-- Swiper Slider JS Link -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Magnific Popup JS Link -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Wow Animation JS Link -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Counter JS Link -->
    <script src="assets/js/counter.js"></script>
    <!-- Progress Bar JS Link -->
    <script src="assets/js/progress-bar.js"></script>
    <!-- Custom JS Link -->
    <script src="assets/js/custom.js"></script>
</body>
</html>