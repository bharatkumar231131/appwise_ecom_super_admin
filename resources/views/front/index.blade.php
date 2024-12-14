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
                    <div>
                        <img src="{{ asset('public/front/images/bannermain.png') }}" alt="image">
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

                        <div class="text">
                            <h4>Customizable storefront</h4>
                            <p>You can easily create your online store and demonstrate your brand with easy tools and
                                interactive designs.</p>
                        </div>
                    </div>

                    <!-- feature box -->
                    <div class="data_block" data-aos="fade-right" data-aos-duration="1500">

                        <div class="text">
                            <h4>Seamless payment integration</h4>
                            <p>This system offers your customers multiple payment options and an easy, safe checkout
                                procedure.</p>
                        </div>
                    </div>


                    <!-- feature box -->
                    <div class="data_block" data-aos="fade-left" data-aos-duration="1500">

                        <div class="text">
                            <h4>Inventory Control</h4>
                            <p>We offer an intuitive dashboard from where one can track their inventory, manage his or her
                                products, and update the inventory.</p>
                        </div>
                    </div>

                    <!-- feature box -->
                    <div class="data_block" data-aos="fade-left" data-aos-duration="1500">

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
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/advantageimg.png') }}"
                            alt="image">
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
                                    <a data-bs-toggle="modal" data-bs-target="#buyNowModal"
                                        class="btn white_btn buy-now-btn"
                                        data-route="{{ route('package.saveOwnerDetails', $package->id) }}"
                                        data-name="{{ $package['name'] }}">BUY
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
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="screen_frame_img">
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="screen_frame_img">
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="screen_frame_img">
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="screen_frame_img">
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="screen_frame_img">
                            <img src="{{ asset('public/front/images/features_frame.png') }}" alt="image">
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
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert"
                                id="successMessage">
                                <strong>Success:</strong> {{ Session::get('success_message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
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
                            <input type="text" placeholder="Name" class="form-control" name="name"
                                data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" name="email"
                                data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
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
                            <input type="text" placeholder="Phone" class="form-control" name="phone"
                                data-parsley-required="true" data-parsley-type="digits" data-parsley-length="[10, 15]"
                                data-parsley-length-message="Phone number must be between 10 to 15 digits"
                                data-parsley-trigger="change">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Address" class="form-control" name="address"
                                data-parsley-required="true" data-parsley-trigger="change">
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
                    <div class="icon"><img src="{{ asset('public/front/images/contact_message_icon.png') }}"
                            alt="image"></div>
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
                                <button type="button" class="btn btn-link active" data-toggle="collapse"
                                    data-target="#collapseOne">
                                    <i class="icon_faq icofont-plus"></i></i>What is an eCommerce system, and how can it
                                    benefit my business?</button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
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
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How long would it
                                    take to build up my ecommerce store?</button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
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
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, our system provides themes and templates that can be customized for use as your own
                                    company brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>Can I offer
                                    different payment options using my website?</button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Absolutely! Our eCommerce system supports a wide range of secure payment gateways to
                                    ensure the best checkout experience for your customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive"><i class="icon_faq icofont-plus"></i></i> Do I need to be
                                    technically knowledgeable to use the eCommerce system?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>It has no technical knowledge, and it's user-friendly; plus, there is a team that can
                                    help you manage your store with ease.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseSix"><i class="icon_faq icofont-plus"></i></i> Once my eCommerce
                                    system has been launched, will there be continued support?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-parent="#accordionExample">
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


    {{-- privacy policy start --}}
    <div class="bred_crumb blog_detail_bredcrumb d-none">
        <div class="container">
            <div class="bred_text">
                <h1>Privacy policy</h1>
            </div>
        </div>
    </div>
    <section class="blog_detail_section d-none">
        <div class="container">
            <div class="blog_inner_pannel">
                <div class="review">
                    <span>Effective Date: </span>
                    <span>12 December, 2024</span>
                </div>
                <div class="section_title">
                    <h2>Introduction</h2>
                </div>
                <div class="container">
                    <p>My Bilty, operated by Dizixpert Techno Services Pvt. Ltd., is committed to protecting the privacy
                        of its
                        users. This Privacy Policy outlines how we collect, use, store, and safeguard the personal and
                        business
                        information provided by users of the My Bilty Lorry Receipt Management System. By using My
                        Bilty, you
                        agree to the collection and use of your data as described in this policy.</p>

                    <h2>1. Information We Collect</h2>
                    <p>We collect different types of information from users of the My Bilty platform, including:</p>
                    <ul>
                        <li><strong>Personal Information:</strong>
                            <ul>
                                <li>Full Name</li>
                                <li>Contact Information (Email address, Phone number)</li>
                                <li>User Role (Super Admin, Transporter Admin, Driver)</li>
                            </ul>
                        </li>
                        <li><strong>Business Information:</strong>
                            <ul>
                                <li>Company Name</li>
                                <li>Address and Contact Information</li>
                                <li>Business Identification Numbers (e.g., GST number)</li>
                            </ul>
                        </li>
                        <li><strong>Transactional Information:</strong>
                            <ul>
                                <li>Details of Lorry Receipts (Bilty) issued or received</li>
                                <li>Payment and Invoicing Information</li>
                                <li>Account Management details</li>
                            </ul>
                        </li>
                        <li><strong>Device and Usage Information:</strong>
                            <ul>
                                <li>IP Address</li>
                                <li>Browser type and version</li>
                                <li>Device type and operating system</li>
                                <li>Location data (based on device settings)</li>
                            </ul>
                        </li>
                        <li><strong>Communications:</strong>
                            <ul>
                                <li>Messages and other communications sent via the platform between Super Admins,
                                    Transporter Admins,
                                    and Drivers</li>
                            </ul>
                        </li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use the collected information for the following purposes:</p>
                    <ul class="mb-3">
                        <li>To provide and manage the My Bilty platform</li>
                        <li>To process transactions</li>
                        <li>To personalize your experience</li>
                        <li>To communicate with you</li>
                        <li>To ensure security</li>
                    </ul>

                    <h2>3. How We Protect Your Information</h2>
                    <p>We take the security of your personal and business information seriously. Measures include
                        encryption,
                        access controls, and regular audits.</p>

                    <h2>4. Data Retention</h2>
                    <p>We retain your information as long as necessary for the purposes described in this policy and to
                        fulfill
                        legal obligations.</p>

                    <h2>5. Sharing Your Information</h2>
                    <p>We do not sell or rent your data. Information may be shared with service providers, legal
                        authorities, or
                        in business transfers as necessary.</p>

                    <h2>6. Your Data Rights</h2>
                    <ul class="mb-3">
                        <li>Access</li>
                        <li>Correction</li>
                        <li>Deletion</li>
                        <li>Opt-Out</li>
                    </ul>

                    <h2>7. Third-Party Links</h2>
                    <p>We are not responsible for the privacy practices of third-party websites linked from My Bilty.
                    </p>

                    <h2>8. Children's Privacy</h2>
                    <p>My Bilty is not intended for individuals under eighteen. If such data is collected, it will be
                        deleted
                        promptly.</p>

                    <h2>9. Changes to This Privacy Policy</h2>
                    <p>We may update this Privacy Policy. Continued use of the platform indicates acceptance of changes.
                    </p>

                    <h2>10. Contact Us</h2>
                    <p class="mb-0">If you have any questions, please contact us at:</p>
                    <p class="mb-0">
                        Dizixpert Techno Services Pvt. Ltd.</p>
                    <p class="mb-0">Email: <a href="mailto:support@dizixpert.com">support@dizixpert.com</a></p>
                    <p class="mb-0">Phone: +91 9413389140</p>
                    <p class="mb-0">Address: Dizixpert Techno Services Pvt. Ltd., Sri Ganganagar Road, Jaipur Jodhpur
                        By-Pass,
                        Bikaner (Raj.)
                        - 334001</p>
                </div>
            </div>
        </div>
    </section>
    {{-- privacy policy end --}}

    {{-- Terms and conditions start --}}
    <div class="bred_crumb blog_detail_bredcrumb d-none">
        <div class="container">
            <div class="bred_text">
                <h1>Terms &amp; Conditions</h1>
            </div>
        </div>
    </div>
    <section class="blog_detail_section d-none">
        <div class="container">
            <div class="blog_inner_pannel">
                <div class="review">
                    <span>Last Updated: </span>
                    <span>12 December, 2024</span>
                </div>
                <div class="section_title">
                    <h2>Introduction</h2>
                </div>
                <div class="container">
                    <p><strong></strong></p>

                    <h2>Welcome to MyBilty!</h2>
                    <p>These Terms and Conditions govern your use of MyBilty, including the web platform, mobile
                        applications,
                        and
                        services provided by MyBilty. By accessing or using our platform, you agree to be bound by these
                        terms.
                        Please
                        read them carefully.</p>
                    <p>If you do not agree to any part of these Terms and Conditions, you must discontinue using our
                        platform
                        and
                        services immediately.</p>

                    <h2>1. Definitions</h2>
                    <ul>
                        <li><strong>Platform:</strong> Refers to the MyBilty system, including the web portal and mobile
                            applications
                            (Transporter Admin App and Driver App).</li>
                        <li><strong>We, Us, Our:</strong> Refers to MyBilty Tech, the service provider and operator of the
                            MyBilty
                            platform.</li>
                        <li><strong>User, You, Your:</strong> Refers to anyone accessing or using the platform, including
                            Super
                            Admin,
                            Transporter Admin, Drivers, and other authorized personnel.</li>
                        <li><strong>Subscription:</strong> Refers to paid plans for accessing specific features of the
                            MyBilty
                            platform.</li>
                        <li><strong>Free Trial:</strong> Refers to the initial one-month trial access with limited
                            functionalities.
                        </li>
                    </ul>

                    <h2>2. Acceptance of Terms</h2>
                    <ul>
                        <li>You confirm that you are at least eighteen years of age.</li>
                        <li>You can bind yourself or your organization to these Terms and Conditions.</li>
                        <li>You agree to comply with all terms stated herein and applicable local, national, and
                            international
                            laws.
                        </li>
                    </ul>

                    <h2>3. User Roles and Responsibilities</h2>
                    <h3>3.1 Super Admin</h3>
                    <ul>
                        <li>Full access to all platform functionalities.</li>
                        <li>Responsible for creating and managing subscription plans.</li>
                        <li>Monitors transactions and generates system-wide reports.</li>
                        <li>Handles user support tickets and platform settings.</li>
                    </ul>

                    <h3>3.2 Transporter Admin</h3>
                    <ul>
                        <li>Manages transporter-specific operations, including:</li>
                        <ul>
                            <li>Bilty/lorry receipt management.</li>
                            <li>Master data (party, vehicle, driver, and material details).</li>
                            <li>Financial accounts, including invoices, loading slips, and ledgers.</li>
                        </ul>
                    </ul>

                    <h3>3.3 Drivers</h3>
                    <ul>
                        <li>Limited access to the Driver App for tasks, including:</li>
                        <ul>
                            <li>Updating assignments (loading, bilty, deliveries).</li>
                            <li>Uploading delivery documents and reporting issues.</li>
                            <li>GPS navigation and real-time updates.</li>
                        </ul>
                    </ul>

                    <h2>4. Account Registration</h2>
                    <ul>
                        <li>Users must provide accurate, complete, and updated registration details, including valid contact
                            and
                            identity information.</li>
                        <li>You are responsible for maintaining the confidentiality of your login credentials.</li>
                        <li>Notify us immediately if you suspect any unauthorized access or misuse of your account.</li>
                    </ul>

                    <h2>5. Subscription Plans and Payments</h2>
                    <h3>5.1 Free Trial</h3>
                    <p>New users are eligible for a one-month free trial with limited functionalities. Access will be
                        restricted
                        at
                        the end of the trial unless you subscribe to a paid plan.</p>

                    <h3>5.2 Subscription Plans</h3>
                    <ul>
                        <li>Plan Options: Monthly and yearly subscription plans based on:</li>
                        <ul>
                            <li>Feature sets</li>
                            <li>Number of bilty/lorry receipts created</li>
                        </ul>
                        <li>Payments must be made via our integrated payment gateway.</li>
                        <li>Subscriptions will auto-renew unless canceled before the renewal date.</li>
                    </ul>

                    <h3>5.3 Late or Failed Payments</h3>
                    <ul>
                        <li>Non-payment or failed transactions may result in account suspension or access restriction.</li>
                        <li>Users will be notified before any such action.</li>
                    </ul>

                    <h2>6. Platform Usage</h2>
                    <h3>6.1 Permitted Use</h3>
                    <ul>
                        <li>You agree to use the platform only for legal and authorized purposes related to transportation
                            management.
                        </li>
                        <li>Accurate and up-to-date information must be entered for all platform functionalities, including
                            bilty/lorry receipts, invoices, and financial records.</li>
                    </ul>

                    <h3>6.2 Prohibited Use</h3>
                    <ul>
                        <li>Use the platform for fraudulent, illegal, or unauthorized purposes.</li>
                        <li>Share login credentials or unauthorized access with third parties.</li>
                        <li>Modify, reverse-engineer, or attempt to hack the platform.</li>
                        <li>Upload harmful content, including malware, viruses, or illegal materials.</li>
                    </ul>

                    <h2>7. Data Management and Security</h2>
                    <p>We implement strict security measures to protect user data. While we take reasonable precautions, we
                        cannot
                        guarantee complete protection against data breaches.</p>

                    <h2>8. Service Availability and Maintenance</h2>
                    <p>Services may occasionally be unavailable due to maintenance, updates, or unforeseen issues. We are
                        not
                        liable
                        for any loss or inconvenience caused by downtime.</p>

                    <h2>9. Termination of Access</h2>
                    <ul>
                        <li>You may terminate your account at any time by contacting our support team.</li>
                        <li>We reserve the right to suspend or terminate your account if you violate these Terms or fail to
                            complete
                            subscription payments.</li>
                    </ul>

                    <h2>10. Intellectual Property</h2>
                    <p>All intellectual property, including trademarks, software code, platform designs, and content, is
                        owned
                        by
                        MyBilty. Users are prohibited from reproducing or redistributing platform elements without
                        permission.</p>

                    <h2>11. Limitation of Liability</h2>
                    <p>To the fullest extent permitted by law, MyBilty and its operators shall not be liable for any
                        indirect,
                        incidental, or consequential damages, including lost profits, arising from the use or inability to
                        use the
                        platform.</p>

                    <h2>12. Indemnification</h2>
                    <p>You agree to indemnify and hold MyBilty harmless from any claims, losses, damages, or expenses
                        arising
                        from
                        your violation of these Terms or misuse of the platform.</p>

                    <h2>13. Governing Law and Jurisdiction</h2>
                    <p>These Terms are governed by the laws of India. Disputes shall be subject to the jurisdiction of
                        courts in
                        Rajasthan.</p>

                    <h2>14. Amendments to Terms</h2>
                    <p>We reserve the right to update these Terms at any time. Continued use of the platform constitutes
                        acceptance
                        of updated Terms.</p>

                    <h2>15. Contact Information</h2>
                    <p>If you have any queries, please contact us:</p>
                    <p>
                        Email: <a href="mailto:support@dizixpert.com">support@dizixpert.com</a><br>
                        Phone: +91 9413389140<br>
                        Address: Dizixpert Techno Services Pvt. Ltd., Sri Ganganagar Road, Jaipur Jodhpur By-Pass, Bikaner
                        (Raj.)
                        -
                        334001
                    </p>

                    <h2>16. Acknowledgement</h2>
                    <p>By using the MyBilty platform, you acknowledge that you have read, understood, and agreed to these
                        Terms
                        and
                        Conditions.</p>
                </div>
            </div>
        </div>



    </section>
    {{-- Terms and conditions end --}}



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
                                <input type="text" class="form-control" id="ownerName" name="owner_name"
                                    data-parsley-required="true" data-parsley-trigger="change">
                            </div>
                            <div class="mb-3">
                                <label for="ownerShop" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="ownerShop" name="shop_name"
                                    data-parsley-required="true" data-parsley-trigger="change">
                            </div>
                            <div class="mb-3">
                                <label for="ownerEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="ownerEmail" name="shop_email"
                                    data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
                            </div>
                            <div class="mb-3">
                                <label for="ownerPhone" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="ownerPhone" name="shop_phone"
                                    data-parsley-required="true" data-parsley-type="digits"
                                    data-parsley-length="[10, 15]"
                                    data-parsley-length-message="Phone number must be between 10 to 15 digits"
                                    data-parsley-trigger="change">
                            </div>
                            <div class="mb-3">
                                <label for="ownerDomain" class="form-label">Domain</label>
                                <input type="url" class="form-control" id="ownerDomain" name="domain"
                                    data-parsley-required="true" data-parsley-trigger="change">
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




    {{-- --}}
@endsection

<script>
    setTimeout(function() {
        var alert = document.getElementById('successMessage');
        if (alert) {
            var closeButton = alert.querySelector('.btn-close');
            close
            Button.click();
        }

    }, 3000);
</script>
