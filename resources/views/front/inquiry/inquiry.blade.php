@extends('components.front.layouts')
@section('content')
<section class="contact_page_section">
    <div class="container">
        <div class="contact_inner">
            <div class="contact_form">
                <div class="section_title">
                    <h2>Leave a <span>message</span></h2>
                    <p>Fill up form below, our team will get back soon</p>
                </div>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Country</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Website" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your message"></textarea>
                    </div>
                    <div class="form-group term_check">
                        <input type="checkbox" id="term">
                        <label for="term">I agree to receive emails, newsletters and promotional messages</label>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn puprple_btn">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="contact_info">
                <div class="icon"><img src="images/contact_message_icon.png" alt="image"></div>
                <div class="section_title">
                    <h2>Have any <span>question?</span></h2>
                    <p>If you have any question about our product, service, payment or company, Visit our <a href="faq.html">FAQs
                            page.</a></p>
                </div>
                <a href="faq.html" class="btn puprple_btn">READ FAQ</a>
                <ul class="contact_info_list">
                    <li>
                        <div class="img">
                            <img src="images/mail_icon.png" alt="image">
                        </div>
                        <div class="text">
                            <span>Email Us</span>
                            <a href="mailto:example@gmail.com">example@gmail.com</a>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <img src="images/call_icon.png" alt="image">
                        </div>
                        <div class="text">
                            <span>Call Us</span>
                            <a href="tel:+1(888)553-46-11">+1 (888) 553-46-11</a>
                        </div>
                    </li>
                    <li>
                        <div class="img">
                            <img src="images/location_icon.png" alt="image">
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
</section>
@endsection