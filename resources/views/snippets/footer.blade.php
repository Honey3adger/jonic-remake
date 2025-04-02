<footer class="site-footer white-text">
    <div class="top-footer">
        <div class="banner-shape">
            <span class="stripe"></span>
            <span class="stripe stripe-secondary"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-branding">
                            <a href="{{route('index')}}" title="Jonic">
                                <img src="{{asset('assets/images/jonic-logo.svg')}}" width="40" alt="Induris Logo">
                            </a>
                            <p>We leverage cutting-edge Products</p>
                        </div>
                        <div class="mail-form">
                            <form>
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit" class="sec-btn icon-lg"></button>
                            </form>
                        </div>
                        <div class="footer-socials">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" title="Follow on Facebook" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" title="Follow on Instagram"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" title="Follow on Linkedin" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-links">
                        <h4 class="h4-title">Our Links</h4>
                        <ul>
                            <li class="{{ Request::is('index') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('index')}}" title="Home">Home</a>
                            </li>
                            <li class="{{ Request::is('about-us') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('about-us')}}" title="About Us">About Us</a>
                            </li>
                            <li class="{{ Request::is('products') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('products')}}" title="Services">Products</a>
                            </li>
                            <!-- <li class="{{ Request::is('career') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('career')}}" title="Portfolio">Career</a>
                            </li> -->
                            <!-- <li class="{{ Request::is('news') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('news')}}" title="Blog">News</a>
                            </li> -->
                            <li class=" {{ isRoute(['organization', 'investor', 'coprate-governance'], 'active-menu') }} menu-parent">
                                        <a href="javascript:void(0)" title="Pages"><h4>Investors</h4></a>
                                        <ul class="sub-menu ms-2">
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
                                    
                            <!-- <li class="{{ Request::is('gallery') ? 'active-footer-menu' : '' }}">
                                <a href="{{route('gallery')}}" title="Blog">Gallery</a>
                            </li> -->
                            <li>
                                <a href="#" title="Contact Us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-contact">
                        <h4 class="h4-title">Contact Us</h4>
                        <ul>
                            <li>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <div class="contact-link">
                                        <a href="#"
                                            title="145 45j Street Office 789 De14563, Western Australia"
                                            target="_blank">145 45j Street Office 789 De14563, Nigeria</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <div class="contact-link">
                                        <a href="mailto:suppport@jonicgroups.com"><span class="__cf_email__" data-cfemail="suppport@jonicgroups.com">suppport@jonicgroups.com</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                    <div class="contact-link">
                                        <a href="tel:+912359874512" title="Call to +234 703 718 4403">+234 703 718 4403</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4 class="h4-title">Gallery</h4>
                    <div class="footer-gallery">
                        <ul>
                            <li>
                                <a href="#" class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image11.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image32.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="# class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image20.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image13.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image2.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="popup-image"
                                    title="Gallery Image">
                                    <div class="back-img"
                                        style="background-image: url('assets/images/products/image23.jpg');">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="bottom-footer-content">
                <p class="bottom-footer-text m-0">
                    Copyright © <span id="copy-right-year">2025</span>
                    <a href="{{route('index')}}" title="jonic"
                        target="_blank">Jonic.</a>
                    All rights reserved.
                </p>
                <ul>
                    <li>
                        <a href="javascript:void(0)" title="Privacy Policy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="Terms Of Service">Terms Of Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>