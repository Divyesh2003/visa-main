@extends('layouts.app')
@section('title', "About")
@section('description', "Hello description")
@section('content')
<div class="cmt-page-title-contact">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Contact Us</h2>
                        <p>Founded In 1996 New York,USA</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>Contact Us-2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="responsive-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="cmt-row conatact_2-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-grey z-index-2 spacing-7 mt-0 box-shadow">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pr-30 res-991-pr-0 res-991-mb-30">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>why choose us</h5>
                                        <h2 class="title">Have Be Any Question? <strong>Feel Free To Contact With Us</strong></h2>
                                    </div>
                                    <div class="title-desc">
                                        The Most Eminent Visas and Immigration Consultant service provider.
                                    </div>
                                </div><!-- section title end -->
                                <p>Foundation was established with a small idea that was incepted in the minds of its promoters in the year 1994! We skillfully.</p>
                                <ul class="social-icons circle social-hover cmt-textcolor-skincolor mt-25">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="{{ route('inquiry.store') }}">
                                @csrf
                                @method('POST') 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required">
                                            @error('name')
                                            <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                        @enderror
                                    </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="email" type="text" value="" placeholder="Your Email" required="required">
                                                @error('email')
                                                <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                            @enderror
                                        </span>
                                            </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required">
                                                @error('phone')
                                                <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                            @enderror
                                        </span>
                                            </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required">
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required" data-gramm="false" wt-ignore-input="true"></textarea></span>
                                </label>
                                <button class="submit cmt-btn cmt-btn-size-lg cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark w-100" type="submit">Submit Request !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->                
    </div>
</section>

<section class="cmt-row pt-0 mt-60 res-991-mt-0 cmt-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mt_60 res-991-mt-0">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="ti ti-email"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="featured-desc">
                                    <p><a href="mailto:info@example.com">info@example.com</a><br>
                                    <a href="mailto:info@yourmail.com">info@yourmail.com</a></p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-before-content cmt-bgcolor-skincolor icon-ver_align-top style6">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="ti ti-location-pin"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Our Address</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>4578 Heverly Rd Crooklyn New York 12345 United States.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                    <i class="ti ti-alarm-clock"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Open Hours</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Mon To Sat: 8:00am to 6:00pm<br>Sunday Closed.</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection