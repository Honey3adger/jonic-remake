<header id="site_header" class="site-header">
    <div class="header-top">
        <div class="container">
            <div class="top-hader-main-box black-text">
                <p class="m-0">Welcome To Our Jonic Groups website</p>
                <ul class="header-social">
                    <li>
                        <a href="mailto:suppport@jonicgroups.com">
                            <img src="assets/images/mail-icon.svg" width="18" height="13" alt="Mail Icon">
                            <span><span class="__cf_email__" data-cfemail="suppport@jonicgroups.com">suppport@jonicgroups.com</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+919879874987" title="Call on +91 987 9874 987">
                            <img src="assets/images/phone-icon.svg" width="18" height="18" alt="Phone Icon">
                            <span>+234 703 718 4403</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="heder-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="site-branding">
                        <a href="{{route('index')}}" title="Induris">
                            <img src="assets/images/jonic-logo.svg" width="32px" alt="Induris Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-menu">
                        <nav class="main-navigation">
                            <button class="menu-toggle for-mob-flex">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="header-mobile-menu">
                                <ul class="main-menu">
                                    <li class=" {{ Request::is('/') ? 'active-menu' : '' }}">
                                        <a href="{{route('index')}}" title="Home">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li class="active-sub-menu">
                                                <a href="#" title="Home page">Home page</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Home page 2">Home page 2</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class=" {{ Request::is('about-us') ? 'active-menu' : '' }}">
                                        <a href="{{route('about-us')}}" title="About Us">About Us</a>
                                    </li>
                                    <li class=" {{ Request::is('products') ? 'active-menu' : '' }}">
                                        <a href="{{route('products')}}" title="Services">Products</a>
                                        <!-- <ul class="sub-menu"> -->
                                        <!-- <li class="active-sub-menu">
                                                <a href="#" title="Services">Services</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Service Details">Service
                                                    Details</a>
                                            </li> 
                                        </ul>-->
                                    </li>
                                    {{--<li class="{{ Request::is('career') ? 'active-menu' : '' }}">
                                    <a href="{{route('career')}}" title="Pages">Career</a>
                                    <!-- <ul class="sub-menu"> 
                                            <li>
                                                <a href="#" title="Portfolio">Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Portfolio 2">Portfolio 2</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    title="Portfolio Details">Portfolio Details</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Our Team">Our Team</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Team Details">Team Details</a>
                                            </li>
                                            <li>
                                                <a href="#" title="FAQ">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Pricing">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Error 404">Error 404</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="{{ Request::is('news') ? 'active-menu' : '' }}">
                                        <a href="{{route('news')}}" title="Blog">News</a>
                                        <!-- <ul class="sub-menu"> -->
                                        <!-- <li>
                                                <a href="#" title="Blog Grid">Blog Grid</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Blog List">Blog List</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Blog Details">Blog Details</a>
                                            </li>
                                        </ul> -->
                                    </li>--}}

                                    <li class=" {{ isRoute(['de-hero', 'la-jonic'], 'active-menu') }} menu-parent">
                                        <a href="javascript:void(0)" title="Pages">Our Brand</a>
                                        <ul class="sub-menu">
                                            <li class="{{ isRoute(['de-hero'], 'active-sub-menu') }}">
                                                <a href="{{ route('de-hero') }}" title="Portfolio">De Hero</a>
                                            </li>
                                            <li class="{{ isRoute(['la-jonic'], 'active-sub-menu') }}">
                                                <a href="{{ route('la-jonic') }}" title="Portfolio 2">La Jonic</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class=" {{ isRoute(['organization', 'investor', 'coprate-governance'], 'active-menu') }} menu-parent">
                                        <a href="javascript:void(0)" title="Pages">Investors</a>
                                        <ul class="sub-menu">
                                            <li class="{{ isRoute(['organization'], 'active-sub-menu') }}">
                                                <a href="{{ route('organization') }}" title="Portfolio">Our Organization</a>
                                            </li>
                                            <li class="{{ isRoute(['financials'], 'active-sub-menu') }}">
                                                <a href="{{ route('financials') }}" title="Portfolio 2">Financial</a>
                                            </li>
                                            <li class="{{ isRoute(['investor'], 'active-sub-menu') }}">
                                                <a href="{{ route('investor') }}" title="Our Team">Shareholder's corner</a>
                                            </li>
                                            <li class="{{ isRoute(['coprate-governance'], 'active-sub-menu') }}">
                                                <a href="{{ route('coprate-governance') }}" title="Our Team">Coprate Governance</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li>
                                        <a href="#" title="Contact Us">Contact Us</a>
                                    </li> -->
                                </ul>
                                <!-- <div class="header-cta">
                                    <div class="header-search-button">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                                            <img src="assets/images/search-icon.svg" width="20" height="20"
                                                alt="Search Icon">
                                        </button>
                                    </div>
                                    <a href="#" class="sec-btn" title="Get a Quote">Get a Quote</a>
                                </div> -->
                            </div>
                        </nav>
                        <div class="black-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>