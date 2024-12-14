<?php

$front_logo = App\Models\Setting::where('id', '1')->first();
$front_logo = $front_logo->front_logo;

?>

<!-- Footer-Section start -->
<footer>
    <div class="top_footer" id="contact">
        <!-- animation line -->
        <div class="anim_line dark_bg">
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
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <!-- footer link 1 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="abt_side">
                        <div class="logo"> <img src="{{ asset('public/front/images/logo/' . $front_logo) }}" alt="image">
                        </div>
                        <ul>
                            <li><a href="#">support@example.com</a></li>
                            <li><a href="#">+1-900-123 4567</a></li>
                        </ul>
                        <ul class="social_media">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- footer link 2 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="links">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- footer link 3 -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="links">
                        <h3>Help & Suport</h3>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>

    <!-- last footer -->
    <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>© Copyrights 2024. All rights reserved.</p>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>

    <!-- go top button -->
    <div class="go_top">
        <span><img src="{{ asset('public/front/images/go_top.png') }}" alt="image"></span>
    </div>
</footer>
<!-- Footer-Section end -->