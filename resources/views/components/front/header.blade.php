<?php
// Getting the 'enabled' sections ONLY and their child categories (using the 'categories' relationship method) which, in turn, include their 'subcategories`
$sections = \App\Models\Section::sections();
$i = 1;
foreach ($sections as $section) {
    if (count($section['categories']) > 0) {
        $i = $i + 1;
    }
}
$front_logo = App\Models\Logo::where('type', 'front')->select('image')->first();
$front_logo = $front_logo->image;
?>
<!-- Mobile Header -->
<div class="header-mobile header_sticky">
    <div class="container d-flex align-items-center h-100">
        <a class="mobile-nav-activator d-block position-relative" href="">
            <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_nav" />
            </svg>
            <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
        </a>

        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('public/front/images/logo/' . $front_logo) }}" alt="appwise" class="logo__image d-block" />
            </a>
        </div>
        <!-- /.logo -->

        <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon_cart" />
            </svg>
            <span
                class="cart-amount d-block position-absolute js-cart-items-count totalCartItems">{{ totalCartItems() }}</span>
        </a>
    </div>
    <!-- /.container -->

    <nav
        class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
        <div class="container">
            <form action="#" method="GET" class="search-field position-relative mt-4 mb-3">
                <div class="position-relative">
                    <input class="search-field__input w-100 border rounded-1" type="text" name="search"
                        placeholder="Search products" />
                    <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
                        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_search" />
                        </svg>
                    </button>
                    <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
                </div>

                <div class="position-absolute start-0 top-100 m-0 w-100">
                    <div class="search-result"></div>
                </div>
            </form>
            <!-- /.header-search -->
        </div>
        <!-- /.container -->

        <div class="container">
            <div class="overflow-hidden">
                <ul class="navigation__list list-unstyled position-relative">
                    <li class="navigation__item">
                        <a href="{{ route('home') }}" class="navigation__link js-nav-right d-flex align-items-center">Home<svg
                                class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_next_sm" />
                            </svg></a>
                        <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                            <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                    class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_sm" />
                                </svg>Home</a>
                            <!-- /.box-menu -->
                        </div>
                    </li>

                    <li class="navigation__item">
                        <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Shopping<svg class="ms-auto"
                                width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_next_sm" />
                            </svg></a>
                        <div class="sub-menu position-absolute top-0 start-100 w-100 d-none">
                            <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                    class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_sm" />
                                </svg>Shopping</a>
                            <!-- /.box-menu -->
                            @foreach ($sections as $section)
                            @if (count($section['categories']) > 0)
                            <a href="#" class="navigation__link js-nav-right d-flex align-items-center">{{ $section['name'] }}<svg
                                    class="ms-auto" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></a>
                            <div class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none">
                                <a href="#" class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"><svg
                                        class="me-2" width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_sm" />
                                    </svg>{{ $section['name'] }}</a>
                                @foreach ($section['categories'] as $category)
                                <div class="sub-menu__wrapper">
                                    <a href="{{ url($category['url']) }}"
                                        class="navigation__link js-nav-right d-flex align-items-center">{{ $category['category_name'] }}</a>
                                    <ul class="ps-4 list-unstyled">
                                        @foreach ($category['sub_categories'] as $subcategory)
                                        <li class="">
                                            <a href="{{ url($subcategory['url']) }}" class="">{{ $subcategory['category_name'] }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @endforeach
                            <!-- End section loop -->
                        </div>
                    </li>

                    <li class="navigation__item">
                        <a href="{{ url('about-us') }}" class="navigation__link">About</a>
                    </li>

                    <li class="navigation__item">
                        <a href="{{ url('contact') }}" class="navigation__link">Contact</a>
                    </li>
                </ul>
                <!-- /.navigation__list -->
            </div>
            <!-- /.overflow-hidden -->
        </div>
        <!-- /.container -->

        <div class="border-top mt-auto pb-2 dropdown dropdown-center">
            <span class="dropdown-toggle p-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_user" />
                </svg>
                <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
            </span>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item"
                        href="@if (\Illuminate\Support\Facades\Auth::check()) {{ url('cart') }}@else{{ url('user/login-register') }} @endif"><i
                            class="bi bi-cart d-inline-block lh-1 me-2"></i>My
                        cart</a></li>
                <li><a class="dropdown-item"
                        href="@if (\Illuminate\Support\Facades\Auth::check()) {{ url('checkout') }}@else{{ url('user/login-register') }} @endif"><i
                            class="bi bi-check-circle d-inline-block lh-1 me-2"></i>Checkout</a></li>
                @if (\Illuminate\Support\Facades\Auth::check())
                <li><a class="dropdown-item" href="{{ url('user/account') }}"><i
                            class="bi bi-person-circle d-inline-block lh-1 me-2"></i>My Account</a>
                </li>
                <li><a class="dropdown-item" href="{{ route('user_orders') }}"><i
                            class="bi bi-cart-check d-inline-block lh-1 me-2"></i>My orders</a>
                </li>
                <li><a class="dropdown-item" href="{{ url('user/logout') }}"><i
                            class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Logout</a>
                </li>
                @else
                <li><a class="dropdown-item" href="{{ url('user/login-register') }}"><i
                            class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Customer
                        login</a>
                </li>
                {{-- <li><a class="dropdown-item" href="{{ url('vendor/login-register') }}"><i
                    class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Vendor login</a></li> --}}
                @endif
            </ul>

        </div>
    </nav>
    <!-- /.navigation -->
</div>
<!-- /.header-mobile -->

<!-- Header Type 2 -->
<header id="header" class="header header-fullwidth header-transparent-bg">
    <div class="container">
        <div class="header-desk header-desk_type_1">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('public/front/images/logo/' . $front_logo) }}" alt="appwise" class="logo__image d-block" />
                </a>
            </div>
            <nav class="navigation">
                <ul class="navigation__list list-unstyled d-flex">
                    <li class="navigation__item">
                        <a href="{{ route('home') }}" class="navigation__link">Home</a>
                        <!-- /.box-menu -->
                    </li>
                    {{--
                    @foreach ($sections as $section)
                    @if (count($section['categories']) > 0)
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">{{ $section['name'] }}</a>

                    <div class="mega-menu">
                        <div class="container">
                            <div class="megamenubx">
                                <div class="megamenu-lnkbx">
                                    @foreach ($section['categories'] as $category)
                                    <div class="najteh">
                                        <div class="menu-link gap-1 d-flex align-items-center">
                                            @if (!empty($category['category_image']))
                                            <a class="subcatnme" href="{{ url($category['url']) }}">
                                                <img class="menulinkimg" style="margin-right:10px;"
                                                    src="{{ asset('public/front/images/category_images/'.$category['category_image']) }}" alt="">
                                            </a>
                                            @else
                                            <a class="subcatnme" href="{{ url($category['url']) }}">
                                                <img class="menulinkimg"
                                                    src="{{ asset('public/front/images/product_images/small/no-image.png') }}" alt="">
                                            </a>
                                            @endif
                                            <a href="{{ url($category['url']) }}" class="sub-menu__title mb-0">
                                                {{$category['category_name'] }}
                                            </a>
                                        </div>
                                        <ul class="sub-menu__list list-unstyled">
                                            @foreach ($category['sub_categories'] as $subcategory)
                                            <li class="sub-menu__item menu-link">
                                                @if (!empty($subcategory['category_image']))
                                                <a class="d-flex align-items-center" href="{{ url($subcategory['url']) }}">
                                                    <img class="menulinkimg" style="margin-right:10px;"
                                                        src="{{ asset('public/front/images/category_images/'.$subcategory['category_image']) }}"
                                                        alt="">
                                                </a>
                                                @else
                                                <a class="d-flex align-items-center" href="{{ url($subcategory['url']) }}">
                                                    <img class="menulinkimg"
                                                        src="{{ asset('public/front/images/product_images/small/no-image.png') }}" alt="">
                                                </a>
                                                @endif
                                                <a href="{{ url($subcategory['url']) }}" class="menu-link menu-link_us-s">
                                                    {{ $subcategory['category_name'] }}</a>
                                            </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="megamenu-imgbx">
                                    @if ($section['section_image'])
                                    <div class="mega-menu__media ">
                                        <div class="position-relative">
                                            <img loading="lazy" class="mega-menu__img"
                                                src="{{ asset('public/front/images/section/'.$section['section_image']) }}"
                                                alt="New Horizons" />

                                        </div>
                                    </div>
                                    @else
                                    <div class="mega-menu__media">
                                        <div class="position-relative">
                                            <img loading="lazy" class="mega-menu__img"
                                                src="{{ asset('public/front/images/section/48730.jpg') }}" alt="New Horizons" />
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>



                    </li>
                    @endif
                    @endforeach
                    --}}
                    <li class="navigation__item">
                        <a href="{{ url('about-us') }}" class="navigation__link">About</a>
                    </li>
                    <li class="navigation__item">
                        <a href="{{ url('contact') }}" class="navigation__link">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="header-tools d-flex align-items-center">
                <div class="header-tools__item hover-container">
                    <div class="js-hover__open position-relative">
                        <a class="js-search-popup search-field__actor" href="#">
                            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_search" />
                            </svg>
                            <i class="btn-icon btn-close-lg"></i>
                        </a>
                    </div>

                    <div class="search-popup js-hidden-content">
                        <form action="{{ url('/search-products') }}" method="GET" class="search-field container form-searchbox">
                            <p class="text-uppercase text-secondary fw-medium mb-4">
                                What are you looking for?
                            </p>
                            <div class="position-relative">
                                <input class="search-field__input search-popup__input w-100 fw-medium" type="text" id="search-landscape"
                                    placeholder="Search products" name="search" @if (isset($_REQUEST['search']) &&
                                    !empty($_REQUEST['search'])) value="{{ $_REQUEST['search'] }}" @endif />
                                <button class="btn-icon search-popup__submit" type="submit" id="btn-search">
                                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_search" />
                                    </svg>
                                </button>
                                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
                            </div>

                            <div class="search-popup__results">
                                <div class="sub-menu search-suggestion">
                                    <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                                    <ul class="sub-menu__list list-unstyled">
                                        <li class="sub-menu__item">
                                            <a href="#newarrivals" class="menu-link menu-link_us-s">New Arrivals</a>
                                        </li>
                                        <li class="sub-menu__item">
                                            <a href="#hotdeals" class="menu-link menu-link_us-s">Hot Deals</a>
                                        </li>
                                        <li class="sub-menu__item">
                                            <a href="#bestseller" class="menu-link menu-link_us-s">Best Seller</a>
                                        </li>
                                        <li class="sub-menu__item">
                                            <a href="#featuredproducts" class="menu-link menu-link_us-s">Featured
                                                Products</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="search-result row row-cols-5"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="header-tools__item hover-container dropdown me-0">
                    <span class="header-tools__item dropdown-toggle align-items-center" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_user" />
                        </svg>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item"
                                href="@if (\Illuminate\Support\Facades\Auth::check()) {{ url('cart') }}@else{{ url('user/login-register') }} @endif"><i
                                    class="bi bi-cart d-inline-block lh-1 me-2"></i>My
                                cart</a></li>
                        <li><a class="dropdown-item"
                                href="@if (\Illuminate\Support\Facades\Auth::check()) {{ url('checkout') }}@else{{ url('user/login-register') }} @endif"><i
                                    class="bi bi-check-circle d-inline-block lh-1 me-2"></i>Checkout</a></li>
                        @if (\Illuminate\Support\Facades\Auth::check())
                        <li><a class="dropdown-item" href="{{ url('user/account') }}"><i
                                    class="bi bi-person-circle d-inline-block lh-1 me-2"></i>My Account</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('user_orders') }}"><i
                                    class="bi bi-cart-check d-inline-block lh-1 me-2"></i></i>My orders</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('user/logout') }}"><i
                                    class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Logout</a>
                        </li>
                        @else
                        <li><a class="dropdown-item" href="{{ url('user/login-register') }}"><i
                                    class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Customer
                                login</a>
                        </li>
                        {{-- <li><a class="dropdown-item" href="{{ url('vendor/login-register') }}"><i
                            class="bi bi-box-arrow-in-right d-inline-block lh-1 me-2"></i>Vendor login</a></li> --}}
                        @endif
                    </ul>
                </div>
                @if (\Illuminate\Support\Facades\Auth::check())
                <a class="header-tools__item" href="{{ route('user_wishlist') }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_heart" />
                    </svg>
                </a>
                @endif
                <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_cart" />
                    </svg>
                    <span
                        class="cart-amount d-block position-absolute js-cart-items-count totalCartItems">{{ totalCartItems() }}</span>
                </a>

                {{-- <a class="header-tools__item" href="#" data-bs-toggle="modal" data-bs-target="#siteMap">
                    <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                        <rect width="25" height="2" />
                        <rect y="8" width="20" height="2" />
                        <rect y="16" width="25" height="2" />
                    </svg>
                </a> --}}
            </div>
        </div>
    </div>
    <div class="sub-header container">
        <nav class="navigation">
            @if ($i > 11)
            <button class="subnext"><svg width="18" height="18" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_prev_md"></use>
                </svg></button>
            @endif
            <ul class="navigation__list list-unstyled d-flex">
                @foreach ($sections as $section)
                @if (count($section['categories']) > 0)
                <li class="navigation__item">
                    <a href="#" class="navigation__link">{{ $section['name'] }}</a>
                    <div class="mega-menu">
                        <div class="container">
                            <div class="megamenubx">
                                <div class="megamenu-lnkbx">
                                    @foreach ($section['categories'] as $category)
                                    <div class="najteh">
                                        <div class="menu-link d-flex gap-1 align-items-center">
                                            <a class="subcatnme" href="{{ url($category['url']) }}">
                                                <img class="menulinkimg" style="margin-right:10px;"
                                                    src="{{ asset('public/front/images/category_images/' . ($category['category_image'] ?? 'product_images/small/no-image.png')) }}"
                                                    alt="">
                                            </a>
                                            <a href="{{ url($category['url']) }}" class="sub-menu__title mb-0">
                                                {{ $category['category_name'] }}
                                            </a>
                                        </div>
                                        <ul class="sub-menu__list list-unstyled">
                                            @foreach ($category['sub_categories'] as $subcategory)
                                            <li class="sub-menu__item menu-link">
                                                <a class="d-flex align-items-center" href="{{ url($subcategory['url']) }}">
                                                    <img class="menulinkimg" style="margin-right:10px;"
                                                        src="{{ asset('public/front/images/category_images/' . ($subcategory['category_image'] ?? 'product_images/small/no-image.png')) }}"
                                                        alt="">
                                                </a>
                                                <a href="{{ url($subcategory['url']) }}" class="menu-link menu-link_us-s">
                                                    {{ $subcategory['category_name'] }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="megamenu-imgbx">
                                    <div class="mega-menu__media">
                                        <div class="position-relative">
                                            <img loading="lazy" class="mega-menu__img"
                                                src="{{ asset('public/front/images/section/' . ($section['section_image'] ?? '48730.jpg')) }}"
                                                alt="New Horizons" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
            @if ($i > 11)
            <button class="subprev"><svg width="18" height="18" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_next_md"></use>
                </svg></button>
            @endif
        </nav>
    </div>
</header>







<!-- End Header Type 2 -->