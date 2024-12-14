@extends('components.front.layouts')
@section('content')
<!-- Banner-Section-Start -->
<section class="banner_section">
    <!-- container start -->
    <div class="container">
        <!-- vertical animation line -->
        <div class="anim_line">
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
            <span><img src="{{ asset('public/front/images/anim_line.png') }}" alt="anim_line"></span>
        </div>
        <!-- row start -->
        <div class="row">
            <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                <!-- banner text -->
                <div class="banner_text">
                    <!-- h1 -->
                    <h1>Grow Your Business Effortlessly With <span>Our E-Commerce System</span></h1>
                    <!-- p -->
                    <p>Take your business online with an easy, powerful solution built to simplify your operations,
                        better the experience of your customer, and improve sales growth. From intuitive design to
                        advanced analytics, all of it at one place is found in our e-commerce system.

                    </p>
                </div>
                <!-- app buttons -->
                <ul class="app_btn">
                    <li>
                        <a href="#">
                            <button class="btn btn-primary">Get a Free Demo</button>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <button class="btn white_btn">Contact Us</button>
                        </a>
                    </li>
                </ul>

                <!-- users -->
                {{-- <div class="used_app">
                        <ul>
                            <li><img src="{{ asset('public/front/images/used01.png') }}" alt="image"></li>
                <li><img src="{{ asset('public/front/images/used02.png') }}" alt="image"></li>
                <li><img src="{{ asset('public/front/images/used03.png') }}" alt="image"></li>
                <li><img src="{{ asset('public/front/images/used04.png') }}" alt="image"></li>
                </ul>
                <p>12M + <br> used this app</p>
            </div> --}}
        </div>

        <!-- banner slides start -->
        <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_slider">
                <!-- <div class="left_icon">
                                                                                                                                                                                                            <img src="images/message_icon.png" alt="image">
                                                                                                                                                                                                          </div>
                                                                                                                                                                                                          <div class="right_icon">
                                                                                                                                                                                                            <img src="images/shield_icon.png" alt="image">
                                                                                                                                                                                                          </div> -->
                <div id="frmae_slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="slider_img">
                            <img src="{{ asset('public/front/images/screen.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider_img">
                            <img src="{{ asset('public/front/images/screen.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider_img">
                            <img src="{{ asset('public/front/images/screen.png') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="slider_frame">
                    <img src="{{ asset('public/front/images/desktop_frame.png') }}" alt="image">
                </div>
            </div>
        </div>
        <!-- banner slides end -->

    </div>
    <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Banner-Section-end -->

<!-- Features-Section-Start -->
<section class="row_am features_section" id="features">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <!-- h2 -->
            <h2>Key Functionality of <span>Our Ecommerce App</span></h2>
            <!-- p -->
            <p>
                Our eCommerce system gives you everything you need to create, manage, and grow your online store. It has
                powerful features and a user-friendly interface that make it easy for you to run your business and give
                your customers a seamless shopping experience.
            </p>
        </div>
        <div class="feature_detail">
            <!-- feature box left -->


            <!-- feature image -->
            <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
            </div>
            <div class="left_data feature_box">

                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/secure_data.png') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Customizable storefront</h4>
                        <p>You can easily create your online store and demonstrate your brand with easy tools and
                            interactive designs.</p>
                    </div>
                </div>

                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/functional.png') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Seamless payment integration</h4>
                        <p>This system offers your customers multiple payment options and an easy, safe checkout
                            procedure.</p>
                    </div>
                </div>


                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/live-chat.png') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Inventory Control</h4>
                        <p>We offer an intuitive dashboard from where one can track their inventory, manage his or her
                            products, and update the inventory.</p>
                    </div>
                </div>

                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/support.png') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Sales Analytics Overview</h4>
                        <p>This system helps you understand your business performance and make the right decisions to
                            boost your growth.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- Features-Section-end -->

<!-- ModernUI-Section-Start -->
<section class="row_am modern_ui_section">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-lg-6">
                <!-- UI content -->
                <div class="ui_text">
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <h2>Advantage of Our <span>E-Commerce System to Your Business</span></h2>
                        <p>
                            Our e-commerce system is designed to streamline activities, enhance customer experiences,
                            and maximize sales. It provides you with the flexibility and tools to stay competitive in
                            the ever-evolving online marketplace.
                        </p>
                    </div>
                    <ul class="design_block">
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Growth in sales and conversion</h4>
                            <p>Our optimized features maximize chances of return customers and increase average order
                                value, which will help your store. </p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Cost Efficiency</h4>
                            <p>You can automate the tracking of inventory, orders, and even reporting, so you have much
                                more time to really grow the business.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Enhance Customer Experience</h4>
                            <p>It provides a rapid loading, secure payment, and specific suggestions for a smooth
                                purchase without hassle.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- UI Image -->
                <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                    <div class="left_img">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern01.png') }}" alt="image">
                    </div>
                    <!-- UI Image -->
                    <div class="right_img">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/secure_data.png') }}" alt="image">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern02.png') }}" alt="image">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern03.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- ModernUI-Section-end -->



<!-- Pricing-Section -->
<section class="row_am pricing_section" id="pricing">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Select the Perfect <span>Pricing Plan</span></h2>
            <!-- p -->
            <p>you can choose a plan that works with your business needs and budget. They are flexible enough to allow
                you to grow up or scale easily.</p>
        </div>
        <!-- toggle button -->
        <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
            <span class="month active">Monthly</span>
            <!-- <div class="tog_block">
                <span class="tog_btn"></span>
            </div>
            <span class="years">Yearly</span>
            <span class="offer">50% off</span> -->
        </div>

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
            <!-- row start -->
            <div class="row">
                @php
                $i = 1;
                @endphp
                @foreach ($packages as $package)
                <!-- pricing box 1 -->
                <div class="col-md-4">
                    <div class="pricing_block">
                        {{-- <div class="icon">
                                    @if ($i % 3 == 1)
                                        <img src="{{ asset('public/front/images/standard.png') }}" alt="image">
                        @elseif($i % 3 == 2)
                        <img src="{{ asset('public/front/images/unlimited.png') }}" alt="image">
                        @else
                        <img src="{{ asset('public/front/images/premium.png') }}" alt="image">
                        @endif
                    </div> --}}
                    <div class="pkg_name">
                        <h3>{{ $package['name'] }}</h3>
                        <span>For the basics</span>
                    </div>
                    <span class="price">R{{ $package['price'] }}</span>
                    <ul class="benifits">
                        <li>
                            <p>Number of section add : {{ $package['number_of_section'] }}</p>

                        </li>
                        <li>
                            <p>Number of category add : {{ $package['number_of_category'] }}</p>
                        </li>
                        <li>
                            <p>Number of product add : {{ $package['number_of_product'] }}</p>
                        </li>
                        <li>
                            <p>{{ $package['description'] }}</p>
                        </li>
                        <li>
                            <p>Support on request</p>
                        </li>
                    </ul>
                    <div>
                        <a data-bs-toggle="modal" data-bs-target="#buyNowModal" class="btn white_btn buy-now-btn"
                            data-route="{{ route('package.saveOwnerDetails', $package->id) }}" data-name="{{ $package['name'] }}">BUY
                            NOW</a>
                    </div>


                </div>
            </div>
            @php
            $i = $i + 1;
            @endphp
            @endforeach

            <!-- pricing box 2 -->
            <!-- <div class="col-md-4">
                                                                                                                                                                                                                <div class="pricing_block highlited_block">
                                                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                                                        <img src="{{ asset('public/front/images/unlimited.png') }}" alt="image">
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="pkg_name">
                                                                                                                                                                                                                        <h3>Unlimited</h3>
                                                                                                                                                                                                                        <span>For the professionals</span>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <span class="price">$99</span>
                                                                                                                                                                                                                    <ul class="benifits">
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>Unlimited Website</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>200 GB disk space</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>20 Customize sub pages</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>10 Domains access</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>24/7 Customer support</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                    <a href="contact.html" class="btn white_btn">BUY NOW</a>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div> -->

            <!-- pricing box 3 -->
            <!-- <div class="col-md-4">
                                                                                                                                                                                                                <div class="pricing_block">
                                                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                                                        <img src="{{ asset('public/front/images/premium.png') }}" alt="image">
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="pkg_name">
                                                                                                                                                                                                                        <h3>Premium</h3>
                                                                                                                                                                                                                        <span>For small team</span>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <span class="price">$55</span>
                                                                                                                                                                                                                    <ul class="benifits">
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>Up to 10 Website</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>100 GB disk space</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>15 Customize sub pages</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>4 Domains access</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                            <p>24/7 Customer support</p>
                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                    <a href="contact.html" class="btn white_btn">BUY NOW</a>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div> -->
        </div>
        <!-- row end -->
    </div>
    <!-- pricing box monthly end -->

    <!-- pricing box yearly start -->
    <div class="pricing_pannel yearly_plan">
        <div class="row">

            <!-- pricing box 1 -->
            <div class="col-md-4">
                <div class="pricing_block">
                    {{-- <div class="icon">
                                <img src="{{ asset('public/front/images/standard.png') }}" alt="image">
                </div> --}}
                <div class="pkg_name">
                    <h3>Standard</h3>
                    <span>For the basics</span>
                </div>
                <span class="price">$150</span>
                <ul class="benifits">
                    <li>
                        <p>Up to 10 Website</p>
                    </li>
                    <li>
                        <p>100 GB disk space</p>
                    </li>
                    <li>
                        <p>25 Customize sub pages</p>
                    </li>
                    <li>
                        <p>4 Domains access</p>
                    </li>
                    <li>
                        <p>Support on request</p>
                    </li>
                </ul>
                <a href="contact.html" class="btn white_btn">BUY NOW</a>
            </div>
        </div>

        <!-- pricing box 2 -->
        <div class="col-md-4">
            <div class="pricing_block highlited_block">
                {{-- <div class="icon">
                                <img src="{{ asset('public/front/images/unlimited.png') }}" alt="image">
            </div> --}}
            <div class="pkg_name">
                <h3>Unlimited</h3>
                <span>For the professionals</span>
            </div>
            <span class="price">$999</span>
            <ul class="benifits">
                <li>
                    <p>Unlimited Website</p>
                </li>
                <li>
                    <p>400 GB disk space</p>
                </li>
                <li>
                    <p>40 Customize sub pages</p>
                </li>
                <li>
                    <p>20 Domains access</p>
                </li>
                <li>
                    <p>24/7 Customer support</p>
                </li>
            </ul>
            <a href="contact.html" class="btn white_btn">BUY NOW</a>
        </div>
    </div>

    <!-- pricing box 3 -->
    <div class="col-md-4">
        <div class="pricing_block">
            {{-- <div class="icon">
                                <img src="{{ asset('public/front/images/premium.png') }}" alt="image">
        </div> --}}
        <div class="pkg_name">
            <h3>Premium</h3>
            <span>For small team</span>
        </div>
        <span class="price">$550</span>
        <ul class="benifits">
            <li>
                <p>Up to 20 Website</p>
            </li>
            <li>
                <p>200 GB disk space</p>
            </li>
            <li>
                <p>25 Customize sub pages</p>
            </li>
            <li>
                <p>8 Domains access</p>
            </li>
            <li>
                <p>24/7 Customer support</p>
            </li>
        </ul>
        <a href="contact.html" class="btn white_btn">BUY NOW</a>
    </div>
    </div>

    </div>
    </div>
    <!-- pricing box yearly end -->

    <p class="contact_text" data-aos="fade-up" data-aos-duration="1500">Not sure what to choose ? <a
            href="contact.html">contact us</a> for custom packages</p>
    </div>
    <!-- container start end -->
</section>
<!-- Pricing-Section end -->

<!-- Beautifull-interface-Section start -->
<section class="row_am interface_section">
    <!-- container start -->
    <div class="container-fluid">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Beautiful Interface Designed for <span>Seamless Shopping</span></h2>
            <!-- p -->
            <p>
                With an interactive design and smooth navigation, your store will provide an exceptional shopping
                experience that keeps customers coming back for more. The interfaces allow smooth navigation through all
                levels of the journey.
            </p>
        </div>

        <!-- screen slider start -->
        <div class="screen_slider">
            <div id="screen_slider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-1.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-2.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-3.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-4.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-5.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-3.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- screen slider end -->
    </div>
    <!-- container end -->
</section>
<!-- Beautifull-interface-Section end -->
<!-- How-It-Workes-Section-Start -->
<section class="row_am how_it_works" id="how_it_work">
    <!-- container start -->
    <div class="container">
        <div class="how_it_inner">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2>How to Get Your <span>ECommerce Store</span></h2>
                <!-- p -->
                <p>Follow these simple steps to get started with your e-commerce store development. Our team will help
                    you through this process to provide a perfect solution for your business.</p>
            </div>
            <div class="step_block">
                <!-- UL -->
                <ul>
                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>Fill the Application Form</h4>
                            <div class="app_icon">
                                <a href="#"><i class="icofont-brand-android-robot"></i></a>
                                <a href="#"><i class="icofont-brand-apple"></i></a>
                                <a href="#"><i class="icofont-brand-windows"></i></a>
                            </div>
                            <p>Please fill out the form below with basic details of you and your company as well as
                                queries you may have.</p>
                        </div>
                        <div class="step_number">
                            <h3>01</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/download_app.jpg') }}" alt="image">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                            <h4>Our Team Will Reach Out</h4>
                            <p>Once we receive your form, our team will contact you in order to address your queries and
                                talk about how we can help you set up an ideal e-commerce system for your business.
                            </p>
                        </div>
                        <div class="step_number">
                            <h3>02</h3>
                        </div>
                        <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/create_account.jpg') }}" alt="image">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                            <h4>Our Team Will Reach Out</h4>
                            <p>Once we receive your form, our team will contact you in order to address your queries and
                                talk about how we can help you set up an ideal e-commerce system for your business.
                            </p>
                        </div>
                        <div class="step_number">
                            <h3>02</h3>
                        </div>
                        <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/create_account.jpg') }}" alt="image">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>Meeting with Team</h4>
                            <p>We will have a meeting with our team in order to discuss your needs, outline the
                                capabilities of our system, and tailor the best solution for your business.</p>
                        </div>
                        <div class="step_number">
                            <h3>03</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/enjoy_app.jpg') }}" alt="image">
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->

<section class="contact_page_section">
    <div class="container">
        <div class="contact_inner">
            <div class="contact_form">
                @if (Session::has('success_message'))
                <div class="landing-successmsg">
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" id="successMessage">
                        <strong>Success:</strong> {{ Session::get('success_message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <div class="section_title">
                    <h2>Get Your <span>Online Store</span></h2>
                    <p>Fill out the form below to share your details and queries. Our team will get in touch with you.
                    </p>
                </div>
                <form action="{{ url('inquiry-submit') }}" method="POST" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" name="name" data-parsley-required="true"
                            data-parsley-trigger="change">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name="email" data-parsley-required="true"
                            data-parsley-type="email" data-parsley-trigger="change">
                    </div>
                    <!-- <div class="form-group">
                            <input type="text" placeholder="Company Name" class="form-control">
                        </div> -->
                    <!-- <div class="form-group">
                            <select class="form-control">
                                <option value="">Country</option>
                            </select>
                        </div> -->
                    <div class="form-group">
                        <input type="text" placeholder="Phone" class="form-control" name="phone" data-parsley-required="true"
                            data-parsley-type="digits" data-parsley-length="[10, 15]"
                            data-parsley-length-message="Phone number must be between 10 to 15 digits" data-parsley-trigger="change">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address" class="form-control" name="address" data-parsley-required="true"
                            data-parsley-trigger="change">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your message" name="message" data-parsley-required="true"
                            data-parsley-trigger="change"></textarea>
                    </div>
                    <div class="form-group term_check">
                        <input type="checkbox" id="term">
                        <label for="term">I agree to receive emails, newsletters and promotional messages</label>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button type="submit" class="btn puprple_btn">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="contact_info">
                <div class="icon"><img src="{{ asset('public/front/images/contact_message_icon.png') }}" alt="image"></div>
                <div class="section_title">
                    <h2>Have a <span>question?</span></h2>
                    <p>We're here to help! Reach out to our team, and we'll provide the answers you need to get started
                        with your e-commerce system.</p>
                </div>
                <a href="faq.html" class="btn puprple_btn">READ FAQ</a>
                <ul class="contact_info_list">
                    <li>
                        <div class="img">
                            <img src="{{ asset('public/front/images/mail_icon.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <span>Email Us</span>
                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ asset('public/front/images/call_icon.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <span>Call Us</span>
                            <a href="tel:+1(888)553-46-11">+1 (888) 553-46-11</a>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <img src="{{ asset('public/front/images/location_icon.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <span>Visit Us</span>
                            <p>5687, Business Avenue, New York, USA 5687</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->

<!-- FAQ-Section start -->
<section class="row_am faq_section">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2><span>FAQ</span> - Frequently Asked Questions</h2>
            <!-- p -->
            <p></p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
            <div class="accordion" id="accordionExample">
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                                <i class="icon_faq icofont-plus"></i></i>What is an eCommerce system, and how can it
                                benefit my business?</button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>An eCommerce system enables an individual to build and then run an online shop and
                                simplify operations, track sales, and improve the quality of customer experiences. It
                                grows your business through the automation of processes and information accessibility.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i
                                    class="icon_faq icofont-plus"></i></i> How long would it
                                take to build up my ecommerce store?</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>For most of the time, it will take a few days to a few weeks, depending on your needs. We
                                will guide you through the process for a smooth launch.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>Is the
                                e-commerce system customizable to fit my brand?</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Yes, our system provides themes and templates that can be customized for use as your own
                                company brand.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"><i
                                    class="icon_faq icofont-plus"></i></i>Can I offer
                                different payment options using my website?</button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Absolutely! Our eCommerce system supports a wide range of secure payment gateways to
                                ensure the best checkout experience for your customers.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"><i
                                    class="icon_faq icofont-plus"></i></i> Do I need to be
                                technically knowledgeable to use the eCommerce system?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>It has no technical knowledge, and it's user-friendly; plus, there is a team that can
                                help you manage your store with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"><i
                                    class="icon_faq icofont-plus"></i></i> Once my eCommerce
                                system has been launched, will there be continued support?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                We do provide support for continuous running of your store. Any technical issues or
                                updates, we are here to offer assistance.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- FAQ-Section end -->

<div class="modal fade" id="buyNowModal" tabindex="-1" aria-labelledby="buyNowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyNowModalLabel">Fill Owner Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="ownerDetailsForm" data-parsley-validate>
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="ownerName" class="form-label">Owner Name</label>
                            <input type="text" class="form-control" id="ownerName" name="owner_name" data-parsley-required="true"
                                data-parsley-trigger="change">
                        </div>
                        <div class="mb-3">
                            <label for="ownerShop" class="form-label">Shop Name</label>
                            <input type="text" class="form-control" id="ownerShop" name="shop_name" data-parsley-required="true"
                                data-parsley-trigger="change">
                        </div>
                        <div class="mb-3">
                            <label for="ownerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="ownerEmail" name="shop_email" data-parsley-required="true"
                                data-parsley-type="email" data-parsley-trigger="change">
                        </div>
                        <div class="mb-3">
                            <label for="ownerPhone" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="ownerPhone" name="shop_phone" data-parsley-required="true"
                                data-parsley-type="digits" data-parsley-length="[10, 15]"
                                data-parsley-length-message="Phone number must be between 10 to 15 digits"
                                data-parsley-trigger="change">
                        </div>
                        <div class="mb-3">
                            <label for="ownerDomain" class="form-label">Domain</label>
                            <input type="url" class="form-control" id="ownerDomain" name="domain" data-parsley-required="true"
                                data-parsley-trigger="change">
                        </div>
                        <div class="mb-3">
                            <label for="ownerAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="ownerAddress" name="address" rows="3" data-parsley-required="true"
                                data-parsley-trigger="change"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('buyNowModal');
        const form = document.getElementById('ownerDetailsForm');

        document.querySelectorAll('.buy-now-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const route = this.getAttribute('data-route');
                const packageName = this.getAttribute('data-name');
                // Set the form action dynamically
                form.action = route;

                // Update modal title dynamically
                // modal.querySelector('.modal-title').textContent = `Fill Owner Details for ${packageName}`;
            });
        });
    });
</script>




    {{--  --}}
@endsection

<script>
setTimeout(function() {
          var alert = document.getElementById('successMessage');
          if (alert) {
              var closeButton = alert.querySelector('.btn-close');
              closeButton.click();
          }
      }, 3000); 
   </script>
