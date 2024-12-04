<?php

$categories = \App\Models\Category::where('parent_id', '0')->orderBy('id', 'asc')->limit(5)->get();
$front_logo = App\Models\Logo::where('type', 'front')->select('image')->first();
$front_logo = $front_logo->image;

$company_details = \App\Models\CompanyAddress::where('id', '1')->first();
if (!empty(\Illuminate\Support\Facades\Auth::user()->id)) {
    $wishlist_count = \App\Models\Wishlist::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->count();
} else {
    $wishlist_count = "0";
}

?>
<!-- Footer Type 2 -->
<footer class="footer footer_type_2">
    <div class="footer-top container">
        <div class="block-newsletter">
            <h3 class="block__title">For special offers and other discount information</h3>
            <p>
                Be the first to get the latest news about trends, promotions, and
                much more!
            </p>
            <form class="block-newsletter__form">
                <input class="form-control" type="email" id="subscriber_email" name="subscriber_email"
                    placeholder="Your email address" />
                <button class="btn btn-secondary fw-medium button" type="button" onclick="addSubscriber()">
                    JOIN
                </button>
            </form>
        </div>
    </div>
    <!-- /.footer-top container -->

    <div class="footer-middle container">
        <div class="row row-cols-lg-5 row-cols-2">
            <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        {{-- <img src="{{ asset('public/front/images/logo.png') }}" alt="appwise"
                        class="logo__image d-block" /> --}}
                        <img src="{{ asset('public/front/images/logo/' . $front_logo) }}" alt="appwise"
                            class="logo__image d-block" />
                    </a>

                </div>
                <!-- /.logo -->
                <p class="footer-address">
                    {{ $company_details['address'] }}, {{ $company_details['city'] }}, {{ $company_details['state'] }},
                    {{ $company_details['country'] }}, {{ $company_details['pincode'] }}
                </p>

                <p class="m-0">
                    <strong class="fw-medium">{{ $company_details['company_email'] }}</strong>
                </p>
                <p>
                    <strong class="fw-medium">{{ $company_details['mobile_number'] }}</strong>
                </p>

                <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
                    <li>
                        <a href="https://www.facebook.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Company</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item">
                        <a href="{{ url('user/account') }}" class="menu-link menu-link_us-s">My Account</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="{{ url('user/orders') }}" class="menu-link menu-link_us-s">My Order</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="{{ url('about-us') }}" class="menu-link menu-link_us-s">About Us</a>
                    </li>
                    {{-- <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Careers</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Affiliates</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Blog</a>
                    </li> --}}
                    <li class="sub-menu__item">
                        <a href="{{ url('contact') }}" class="menu-link menu-link_us-s">Contact Us</a>
                    </li>
                    {{-- <li class="sub-menu__item">
                        <a href="{{ url('faq') }}" class="menu-link menu-link_us-s">FAQ</a>
                    </li> --}}
                </ul>
            </div>
            <!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Shop</h6>
                <ul class="sub-menu__list list-unstyled">
                    {{-- <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">New Arrivals</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Accessories</a>
                    </li> --}}

                    @foreach ($categories as $category)
                    <li class="sub-menu__item">
                        <a href="{{ url($category['url']) }}" class="menu-link menu-link_us-s">{{ $category['category_name'] }}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <!-- /.footer-column -->

            <div class="footer-column footer-menu mb-4 mb-lg-0">
                <h6 class="sub-menu__title text-uppercase">Help</h6>
                <ul class="sub-menu__list list-unstyled">
                    <li class="sub-menu__item">
                        <a href="{{ url('customer-service') }}" class="menu-link menu-link_us-s">Customer Service</a>
                    </li>
                    {{-- <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Find a Store</a>
                    </li> --}}
                    <li class="sub-menu__item">
                        <a href="{{ url('privacy-policy') }}" class="menu-link menu-link_us-s">Legal & Privacy</a>
                    </li>
                    <li class="sub-menu__item">
                        <a href="{{ url('term-condition') }}" class="menu-link menu-link_us-s">Terms & Conditions</a>
                    </li>
                    {{-- <li class="sub-menu__item">
                        <a href="#" class="menu-link menu-link_us-s">Gift Card</a>
                    </li> --}}
                </ul>
            </div>
            <!-- /.footer-column -->

        </div>
        <!-- /.row-cols-5 -->
    </div>
    <!-- /.footer-middle container -->

    <div class="footer-bottom">
        <div class="container d-md-flex align-items-center">
            <span class="footer-copyright me-auto">©2024 E-commerce Solution by Appwise</span>
            {{-- <div class="footer-settings d-md-flex align-items-center">
                <select id="footerSettingsLanguage" class="form-select form-select-sm bg-transparent border-0"
                    aria-label="Default select example" name="store-language">
                    <option class="footer-select__option" selected>
                        United Kingdom | English
                    </option>
                    <option class="footer-select__option" value="1">
                        United States | English
                    </option>
                    <option class="footer-select__option" value="2">German</option>
                    <option class="footer-select__option" value="3">French</option>
                    <option class="footer-select__option" value="4">Swedish</option>
                </select>

                <select id="footerSettingsCurrency" class="form-select form-select-sm bg-transparent border-0"
                    aria-label="Default select example" name="store-language">
                    <option class="footer-select__option" selected>$ USD</option>
                    <option class="footer-select__option" value="1">£ GBP</option>
                    <option class="footer-select__option" value="2">€ EURO</option>
                </select>
            </div> --}}
            <!-- /.footer-settings -->
        </div>
        <!-- /.container d-flex align-items-center -->
    </div>
    <!-- /.footer-bottom container -->
</footer>

<!-- Mobile Fixed Footer -->
<footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
    <div class="row text-center">
        <div class="col-4">
            <a href="{{ route('home') }}" class="footer-mobile__link d-flex flex-column align-items-center">
                <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_home" />
                </svg>
                <span>Home</span>
            </a>
        </div>
        <!-- /.col-3 -->

        <div class="col-4">
            <div class="dropup-center dropup">
                <a href="#" class="footer-mobile__link d-flex flex-column align-items-center dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_hanger" />
                    </svg>
                    <span>Shop</span>
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ url($category['url']) }}">{{ $category['category_name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <!-- /.col-3 -->

        <div class="col-4">
            <a href="{{ route('user_wishlist') }}" class="footer-mobile__link d-flex flex-column align-items-center">
                <div class="position-relative">
                    <svg class="d-block" width="18" height="18" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                    </svg>
                    <span class="wishlist-amount d-block position-absolute js-wishlist-count">{{ $wishlist_count ?? ""}}</span>
                </div>
                <span>Wishlist</span>
            </a>
        </div>
        <!-- /.col-3 -->
    </div>
    <!-- /.row -->
</footer>



<!-- /.footer-mobile container position-fixed d-md-none bottom-0 -->