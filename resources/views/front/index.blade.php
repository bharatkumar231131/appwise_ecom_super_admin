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
                    <h1>Best way to <span>manage your customers.</span></h1>
                    <!-- p -->
                    <p>Lorem Ipsum is simply dummy text of the printing and setting indus orem Ipsum has been the industrys.
                    </p>
                </div>
                <!-- app buttons -->
                <ul class="app_btn d-none">
                    <li>
                        <a href="#">
                            <img class="blue_img" src="{{ asset('public/front/images/appstore_blue.png') }}" alt="image">
                            <img class="white_img" src="{{ asset('public/front/images/appstore_white.png') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="blue_img" src="{{ asset('public/front/images/googleplay_blue.png') }}" alt="image">
                            <img class="white_img" src="{{ asset('public/front/images/googleplay_white.png') }}" alt="image">
                        </a>
                    </li>
                </ul>

                <!-- users -->
                <div class="used_app">
                    <ul>
                        <li><img src="{{ asset('public/front/images/used01.png')}}" alt="image"></li>
                        <li><img src="{{ asset('public/front/images/used02.png')}}" alt="image"></li>
                        <li><img src="{{ asset('public/front/images/used03.png')}}" alt="image"></li>
                        <li><img src="{{ asset('public/front/images/used04.png')}}" alt="image"></li>
                    </ul>
                    <p>12M + <br> used this app</p>
                </div>
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
                                <img src="{{ asset('public/front/images/screen.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider_img">
                                <img src="{{ asset('public/front/images/screen.png')}}" alt="image">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider_img">
                                <img src="{{ asset('public/front/images/screen.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="slider_frame">
                        <img src="{{ asset('public/front/images/desktop_frame.png')}}" alt="image">
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
            <h2><span>Features</span> that makes app different!</h2>
            <!-- p -->
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <div class="feature_detail">
            <!-- feature box left -->


            <!-- feature image -->
            <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <img src="{{ asset('public/front/images/features_frame.png')}}" alt="image">
            </div>
            <div class="left_data feature_box">

                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/secure_data.png')}}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Secure data</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting indus ideas.</p>
                    </div>
                </div>

                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/functional.png')}}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Fully functional</h4>
                        <p>Simply dummy text of the printing and typesetting indus lorem Ipsum is dummy.</p>
                    </div>
                </div>


                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/live-chat.png')}}" alt="image">
                    </div>
                    <div class="text">
                        <h4>Live chat</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting indus ideas.</p>
                    </div>
                </div>

                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('public/front/images/support.png')}}" alt="image">
                    </div>
                    <div class="text">
                        <h4>24-7 Support</h4>
                        <p>Simply dummy text of the printing and typesetting indus lorem Ipsum is dummy.</p>
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
                        <h2>Beautiful design with <span>modern UI</span></h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the
                            industrys standard dummy text ever since the when an unknown printer took a galley of type and.
                        </p>
                    </div>
                    <ul class="design_block">
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Carefully designed</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and type esetting industry lorem Ipsum has.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Seamless Sync</h4>
                            <p>Simply dummy text of the printing and typesetting inustry lorem Ipsum has Lorem dollar summit.</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500">
                            <h4>Access Drive</h4>
                            <p>Printing and typesetting industry lorem Ipsum has been the industrys standard dummy text of type
                                setting.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- UI Image -->
                <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                    <div class="left_img">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern01.png')}}" alt="image">
                    </div>
                    <!-- UI Image -->
                    <div class="right_img">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/secure_data.png')}}" alt="image">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern02.png')}}" alt="image">
                        <img class="moving_position_animatin" src="{{ asset('public/front/images/modern03.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- ModernUI-Section-end -->

<!-- How-It-Workes-Section-Start -->
<section class="row_am how_it_works" id="how_it_work">
    <!-- container start -->
    <div class="container">
        <div class="how_it_inner">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2><span>How it works</span> - 3 easy steps</h2>
                <!-- p -->
                <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                    standard dummy.</p>
            </div>
            <div class="step_block">
                <!-- UL -->
                <ul>
                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>Download app</h4>
                            <div class="app_icon">
                                <a href="#"><i class="icofont-brand-android-robot"></i></a>
                                <a href="#"><i class="icofont-brand-apple"></i></a>
                                <a href="#"><i class="icofont-brand-windows"></i></a>
                            </div>
                            <p>Download App either for Windows, Mac or Android</p>
                        </div>
                        <div class="step_number">
                            <h3>01</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/download_app.jpg')}}" alt="image">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                            <h4>Create account</h4>
                            <span>14 days free trial</span>
                            <p>Sign up free for App account. One account for all devices.</p>
                        </div>
                        <div class="step_number">
                            <h3>02</h3>
                        </div>
                        <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/create_account.jpg')}}" alt="image">
                        </div>
                    </li>

                    <!-- step -->
                    <li>
                        <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                            <h4>It’s done, enjoy the app</h4>
                            <span>Have any questions check our <a href="#">FAQs</a></span>
                            <p>Get most amazing app experience,Explore and share the app</p>
                        </div>
                        <div class="step_number">
                            <h3>03</h3>
                        </div>
                        <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                            <img src="{{ asset('public/front/images/enjoy_app.jpg')}}" alt="image">
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <!-- container end -->
</section>
<!-- How-It-Workes-Section-end -->


<!-- Pricing-Section -->
<section class="row_am pricing_section" id="pricing">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Best & simple <span>pricing</span></h2>
            <!-- p -->
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <!-- toggle button -->
        <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
            <span class="month active">Monthly</span>
            <div class="tog_block">
                <span class="tog_btn"></span>
            </div>
            <span class="years">Yearly</span>
            <span class="offer">50% off</span>
        </div>

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
            <!-- row start -->
            <div class="row">
                @php
                $i=1
                @endphp
                @foreach($packages as $package)
                <!-- pricing box 1 -->
                <div class="col-md-4">
                    <div class="pricing_block">
                        <div class="icon">
                            @if($i%3 == 1)
                            <img src="{{ asset('public/front/images/standard.png')}}" alt="image">
                            @elseif($i%3 == 2)
                            <img src="{{ asset('public/front/images/unlimited.png')}}" alt="image">
                            @else
                            <img src="{{ asset('public/front/images/premium.png')}}" alt="image">
                            @endif
                        </div>
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
                            <a data-bs-toggle="modal" data-bs-target="#buyNowModal-{{ $package->id }}" data-bs-focus="true"
                                class="btn white_btn">BUY NOW</a>
                        </div>


                    </div>
                </div>
                @php
                $i = $i + 1;
                @endphp
                <div class="modal fade" id="buyNowModal-{{ $package->id }}" data-bs-backdrop="false"
                    aria-labelledby="buyNowModalLabel-{{ $package->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="buyNowModalLabel-{{ $package->id }}">Fill Owner Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('package.saveOwnerDetails', $package->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="ownerName-{{ $package->id }}" class="form-label">Owner Name</label>
                                        <input type="text" class="form-control" id="ownerName-{{ $package->id }}" name="owner_name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ownerShop-{{ $package->id }}" class="form-label">Shop Name</label>
                                        <input type="text" class="form-control" id="ownerShop-{{ $package->id }}" name="shop_name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ownerDomain-{{ $package->id }}" class="form-label">Domain</label>
                                        <input type="text" class="form-control" id="ownerDomain-{{ $package->id }}" name="domain" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ownerAddress-{{ $package->id }}" class="form-label">Address</label>
                                        <textarea class="form-control" id="ownerAddress-{{ $package->id }}" name="address" rows="3"
                                            required></textarea>
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
                @endforeach

                <!-- pricing box 2 -->
                <!-- <div class="col-md-4">
                    <div class="pricing_block highlited_block">
                        <div class="icon">
                            <img src="{{ asset('public/front/images/unlimited.png')}}" alt="image">
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
                            <img src="{{ asset('public/front/images/premium.png')}}" alt="image">
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
                        <div class="icon">
                            <img src="{{ asset('public/front/images/standard.png')}}" alt="image">
                        </div>
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
                        <div class="icon">
                            <img src="{{ asset('public/front/images/unlimited.png')}}" alt="image">
                        </div>
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
                        <div class="icon">
                            <img src="{{ asset('public/front/images/premium.png')}}" alt="image">
                        </div>
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

<!-- FAQ-Section start -->
<section class="row_am faq_section">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2><span>FAQ</span> - Frequently Asked Questions</h2>
            <!-- p -->
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
            <div class="accordion" id="accordionExample">
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                                <i class="icon_faq icofont-plus"></i></i> How can i pay ?</button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i
                                    class="icon_faq icofont-plus"></i></i> How to setup account ?</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What is process to get refund
                                ?</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"><i
                                    class="icon_faq icofont-plus"></i></i>What is process to get refund
                                ?</button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- FAQ-Section end -->

<!-- Beautifull-interface-Section start -->
<section class="row_am interface_section">
    <!-- container start -->
    <div class="container-fluid">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Beautifull <span>interface</span></h2>
            <!-- p -->
            <p>
                Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard
                dummy.
            </p>
        </div>

        <!-- screen slider start -->
        <div class="screen_slider">
            <div id="screen_slider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-1.png')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-2.png')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-3.png')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-4.png')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-5.png')}}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{ asset('public/front/images/screen-3.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- screen slider end -->
    </div>
    <!-- container end -->
</section>
<!-- Beautifull-interface-Section end -->

<!-- Download-Free-App-section-Start  -->
<section class="row_am free_app_section" id="getstarted">
    <!-- container start -->
    <div class="container">
        <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <!-- vertical line animation -->
            <div class="anim_line dark_bg">
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
                <span><img src="{{ asset('public/front/images/anim_line.png')}}" alt="anim_line"></span>
            </div>
            <!-- row start -->
            <div class="row">
                <!-- content -->
                <div class="col-md-6">
                    <div class="free_text">
                        <div class="section_title">
                            <h2>Let’s download free from apple and play store</h2>
                            <p>Instant free download from apple and play store orem Ipsum is simply dummy text of the printing.
                                and typese tting indus orem Ipsum has beenthe standard</p>
                        </div>
                        <!-- <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img src="images/appstore_blue.png" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="images/googleplay_blue.png" alt="image">
                    </a>
                  </li>
                </ul> -->
                    </div>
                </div>

                <!-- images -->
                <div class="col-md-6">
                    <div class="free_img">
                        <img src="{{ asset('public/front/images/download-screen01.png')}}" alt="image">
                        <img class="mobile_mockup" src="{{ asset('public/front/images/download-screen02.png')}}" alt="image">
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </div>
    <!-- container end -->
</section>
<!-- Download-Free-App-section-end  -->

<!-- Story-Section-Start -->
<section class="row_am latest_story" id="blog">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <h2>Read latest <span>story</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <!-- row start -->
        <div class="row">
            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('public/front/images/story01.png')}}" alt="image">
                        <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                        <h3>Cool features added!</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry lorem Ipsum has.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('public/front/images/story02.png')}}" alt="image">
                        <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                        <h3>Top rated app! Yupp.</h3>
                        <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('public/front/images/story03.png')}}" alt="image">
                        <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                        <h3>Creative ideas on app.</h3>
                        <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Story-Section-end -->





@endsection