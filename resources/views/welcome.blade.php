@extends('layouts.app')
@section('title', "Visa Consultants: Tourist Visa & Business Visa Application Services Online | Akbar Travels")
@section('description', "Tourist Visa & Business Visa Consultancy Services - Apply for Tourist Visa & Business Visa Online with Akbar Travels. With 40+ years of experience in Visa consultancy services, we provide end-to-end visa application assistance from visa agent experts. Apply for visa today with Akbar Travels!")
@section('content')
    <div class="site-main">
        <section class="main-navbar d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h1 class="text-center fx-light mb-4" style="color: #fff !important;">We make visa easy for you</h1>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                              <div class="title-desc">
                            <div class="search">
                                    <select class="searchTerm mt-5 country" name="countries">
                                        <option value="" selected>Search for a country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->slug }}">{{ $country->name }}</option>
                                        @endforeach
                                      </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                </div>
            </div>
            </div>
          </section>
        <section class="cmt-row features-section cmt-bgcolor-grey bg-img1 cmt-bg cmt-bgimage-yes cmt-bg-pattern clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title style2">
                            <div class="title-header">
                                <h5>what we provides</h5>
                                <h2 class="title">Visas For Popular Destinations<strong> choose your country!</strong></h2>
                            </div>
                           
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row" id="slider-country">
                    @foreach ($countriess as $country)
                    <div class="cmt-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-country style2 bor_rad_5">
                            <div class="cmt-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#" tabindex="-1"> <img class="img-fluid" src="{{ asset($country->image)}}" alt="image" style="width: 360px;height:208px;"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-content-icon_img-block">
                                        <img class="img-fluid" src="{{ asset($country->flag)}}" alt="image">
                                    </div>
                                    <div class="featured-title">
                                        <h5><a href="{{ route('search_visa.country',$country->slug)}}" tabindex="-1">{{ $country->name }}</a></h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>{{ $country->sortdescription }}</p>
                                    </div>
                                    <a class="cmt-btn cmt-btn-size-sm btn-inline cmt-btn-color-skincolor" href="{{ route('search_visa.country',$country->slug)}}" tabindex="-1">Read More</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                      
                    @endforeach
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-35 res-991-mt-20">
                            <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark" href="{{ route('countries')}}">View More country!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--features-section-->
        <!--skill-section-->
        <section class="cmt-row skill-section clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 mx-auto">
                        <div class="d-flex cmt-boxes-spacing-20px">
                            <div class="cmt-box-col-wrapper">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset('assets/images/single-img-01.jpg')}}" alt="single_01">
                                </div>
                            </div>
                            <div class="cmt-box-col-wrapper">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper pb-20">
                                    <img class="img-fluid" src="{{ asset('assets/images/single-img-02.jpg')}}" alt="single_02">
                                </div>
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper">
                                    <img class="img-fluid" src="{{ asset('assets/images/single-img-03.jpg')}}" alt="single_03">
                                </div>
                            </div>
                        </div>
                        <div class="m-auto cmt-textcolor-white pt-15 pb-0 mt_190 pr-30 pl-30 z-index-1 cmt-bgcolor-skincolor">
                            <a href="#" target="_self" class="cmt_prettyphoto">
                                <div class="d-flex align-items-center">
                                    <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-white cmt-icon_element-size-sm mb-15 mr-2">
                                        <i class="ti ti-control-play"></i>
                                    </div><h5>Working Since 1987</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                        <div class="pl-15 mt-15 text-left res-991-pl-0 res-991-mt-15">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>ABOUT pcc</h5>
                                    <h2 class="title">Visa Services From   <strong>India's Experienced Consultant.</strong></h2>
                                </div>
                                <div class="title-desc">The Most Eminent Visas and Immigration Consultant service provider. Branches in India and overseas.</div>
                            </div><!-- section title end -->
                            <div class="pt-10 pb-35">
                                <!-- cmt-progress-bar -->
                                <div class="cmt-progress-bar" data-percent="100%">
                                    <div class="progressbar-title">Tourist Visa</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="100"></div>
                                </div><!-- cmt-progress-bar end -->
                                <!-- cmt-progress-bar -->
                                <div class="cmt-progress-bar clearfix" data-percent="100%">
                                    <div class="progressbar-title">Visit Visa</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="100"></div>
                                </div><!-- cmt-progress-bar end -->
                                <!-- cmt-progress-bar -->
                                <div class="cmt-progress-bar clearfix" data-percent="100%">
                                    <div class="progressbar-title">Visa Assistance</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="100"></div>
                                </div><!-- cmt-progress-bar end -->
                            </div>
                            <p class="mb-0">Foundation was established with a small idea that was incepted in the minds of its promoters in the year 1994! We skillfully guide applicants for their immigration process to any country they aspire to settle. <a class="cmt-textcolor-skincolor" href="{{ route('about')}}">Read More</a></p>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--skill-section-->
        <!--cat-section-->
        <section class="cmt-row cat-section cmt-bgcolor-darkgrey bg-img2 cmt-bg cmt-bgimage-yes cmt-bg-pattern clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>How pcc visas works?</h5>
                                <h2 class="title">Start a visa application with <br><strong> PCCVISAS.COM </strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featuredbox-number">
                            <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":true, "infinite":false, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 3}}, {"breakpoint":678,"settings":{"slidesToShow": 2}}, {"breakpoint":460,"settings":{"slidesToShow": 1}}]}'>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-top-content bor_rad_5">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                {{-- <i class="flaticon-bussiness-man"></i> --}}
                                                <i class="flaticon-passport-14"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><strong>Select Country </strong> and Visa Type</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p></p>
                                            </div>
                                            <div class="cmt-di_links">
                                                <a href="#" class="di_link">
                                                    <i class="ti ti-angle-right"></i>
                                                </a>
                                                <span class="di_num">
                                                    <i class="cmt-num ti-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-top-content bor_rad_5">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-passport-6"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><strong>Submit Required Document  </strong> and Make a Payment</h5>
                                            </div>
                                            <div class="featured-desc">
                                                {{-- <p>People who want to invest in or about to start businesses abroad.</p> --}}
                                            </div>
                                            <div class="cmt-di_links">
                                                <a href="#" class="di_link">
                                                    <i class="ti ti-angle-right"></i>
                                                </a>
                                                <span class="di_num">
                                                    <i class="cmt-num ti-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-top-content bor_rad_5">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-passport-14"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><Strong>We Start The</Strong> Visa Application</h5>
                                            </div>
                                            <div class="featured-desc">
                                                {{-- <p>To work refers to manage systems used to ensure that work is done nicely.</p> --}}
                                            </div>
                                            <div class="cmt-di_links">
                                                <a href="#" class="di_link">
                                                    <i class="ti ti-angle-right"></i>
                                                </a>
                                                <span class="di_num">
                                                    <i class="cmt-num ti-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-top-content bor_rad_5">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-visa-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><strong>Get The</strong> Visa</h5>
                                            </div>
                                            <div class="featured-desc">
                                                {{-- <p>For the permanent residents visa documents issued under to immigration.</p> --}}
                                            </div>
                                            <div class="cmt-di_links">
                                                <a href="#" class="di_link">
                                                    <i class="ti ti-angle-right"></i>
                                                </a>
                                                <span class="di_num">
                                                    <i class="cmt-num ti-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style1 icon-align-top-content bor_rad_5">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-lg">
                                                <i class="flaticon-graduation-hat"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Student Visa</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>For the perception & better career opportunities for the students.</p>
                                            </div>
                                            <div class="cmt-di_links">
                                                <a href="{{ route('student.visa') }}" class="di_link">
                                                    <i class="ti ti-angle-right"></i>
                                                </a>
                                                <span class="di_num">
                                                    <i class="cmt-num ti-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-35 mb_20 res-991-mt-20">
                            <h6><span  class="font-weight-normal">Don’t Hesitate, Contact us for Better Help and Services.</span> <u></u></h6>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="cmt-row conatact-section clearfix my-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="row ">
                                <div class="col-lg-4 col-md-5">
                                    <div class="cmt-bgcolor-darkgrey pt-30 pb-30 pl-30 pr-30">
                                        <div class="mb-20">
                                            <h4>Our Location</h4>
                                            <p>
                                                {{-- Ground Floor,<br> --}}
                                                <strong>
                                                    Block no. 20,<br>
                                                    Sarai Kale Khan,<br>
                                                    Nr. Nizamuddin Metro Station,<br>
                                                    New Delhi 110013.</p>
                                                </strong>
                                        </div>
                                        <h4>Quick Contact</h4>
                                        <div class="cmt-textcolor-white"><i class="fa fa-envelope-o mr-2"></i> <a href="mailto:inquiry@pccvisas.com">inquiry@pccvisas.com</a></div>
                                        <div class="cmt-textcolor-white"><i class="fa fa-phone mr-2 "></i> <a href="phoneto:123456789">1234567890</a></div>
                                    </div>
                                    <div class="cmt-bgcolor-skincolor pt-30 pb-25 pl-30 pr-30" style="background: #25d366!important;">
                                        <h5 class="font-weight-normal">Click Here For Apply Visa</h5>
                                        <div class="d-flex align-items-center pt-10">
                                            <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-white cmt-icon_element-size-xs cmt-icon_element-style-rounded mb-10 mr-15">
                                                <i class="fa fa-whatsapp" style="font-weight: 600"></i>
                                            </div>
                                            <h4>+91 9428552312</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="pl-30 res-991-pl-0 res-767-mt-30">
                                        <!-- section title -->
                                        <div class="section-title with-desc clearfix">
                                            <div class="title-header">
                                                <h5>why choose us</h5>
                                                <h2 class="title">Get In <strong>Touch?</strong></h2>
                                            </div>
                                        </div><!-- section title end -->
                                        {{-- <form id="contact_form" class="contact_form wrap-form pt-15 clearfix" method="post" novalidate="novalidate" action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <label>
                                                <span class="text-input"><textarea name="message" rows="5" placeholder="Message" required="required"></textarea></span>
                                            </label>
                                            <button class="submit cmt-btn cmt-btn-size-lg cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark w-100" type="submit">Submit Request !</button>
                                        </form> --}}
                                        <div style="position: relative;">
                                            <div class="round-form-top">
                                                <div class="round-top">
                                                    <i class="fa fa-asterisk" style="font-size: 50px;left: 12px;position: absolute;top: 10px;color:#fff;"></i>
                                                </div>
                                            </div>
                                            <div class="card-form">
                                                   <div class="form" style="margin: 20px;">
                                                    <form id="contact_form" class="contact_form wrap-form pt-15 clearfix" method="post" novalidate="novalidate" action="{{ route('inquiry.store') }}">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <label>
                                                                    <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <label>
                                                                    <span class="text-input"><input name="email" type="text" value="" placeholder="Your Email" required="required"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <label>
                                                                    <span class="text-input"><input name="phone" type="text" value="" placeholder="Your Phone Number" required="required"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <label>
                                                                    <span class="text-input"><input name="subject" type="text" value="" placeholder="Your Subject" required="required"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <label>
                                                                    <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required" data-gramm="false" wt-ignore-input="true"></textarea></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <button class="btn form-submit " type="submit">Submit Request !</button>
                                                        </div>
                                                    </form>
                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
        </section>
        <style>
            .card-form{
                padding: 50px 10px 10px 10px;
                background: #f9f6f6;
                border-radius: 5px;
            }
            .round-form-top{
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background: #eaeaea;
                position: absolute;
                top: -10%;
                left: 50%;
                box-shadow: 0 0 5px 3px #ffffff;
                padding: 5px;
            }
            .round-top{
                background: linear-gradient(126deg, rgba(212,20,90,1) 0%, rgba(251,176,59,1) 100%);
                width: 70px;
                height: 70px;
                position: absolute;
                border-radius: 50%;
                top: 5px;
                left: 5px;
            }
            .form-submit{
            width: 200px !important;
            padding: 0;
            font-size: 16px;
            line-height: 54px;
            height: 54px;
            background: linear-gradient(126deg, rgba(212,20,90,1) 0%, rgba(251,176,59,1) 100%)  !important;
            color: #ffffff !important;
            }
        </style>
        <section class="cmt-row introduction-section cmt-bgcolor-grey cmt-bg cmt-bgimage-yes bg-img7 cmt-bg-pattern mt_60 res-991-mt-0 clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-11 mx-auto col-xs-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mr-60 pt-60 res-991-pt-0 res-991-mr-0 position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/images/single-img-04.jpg')}}" alt="single_04">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content cmt-bgcolor-darkgrey style2">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Coaching Test <span class="cmt-textcolor-skincolor"> Preparation</span> Series</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Free Guid To A Top Line Band Score!</p>
                                    </div>
                                </div>
                                <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left btn-inline cmt-btn-color-skincolor" href="contact-us-1.html" tabindex="0"><i class="fa fa-minus"></i>View More Details</a>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="pt-60">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>Types for visa</h5>
                                    <h2 class="title">benifits of visa Online Our <strong>types & visa</strong></h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                <i class="flaticon-book-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('work.visa')}}">Bussiness Visa</a></h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>scoring parameters in each of the modules.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                <i class="flaticon-policy"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('family.visa')}}">Family Visa</a></h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>we provide PTE online coaching classes.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                <i class="flaticon-contract"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('student.visa')}}">Student Visa</a></h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>scoring method the bond of 0-9.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style3">
                                        <div class="featured-icon">
                                            <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                                <i class="flaticon-certificate"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('visitor.visa')}}">Visitor Visa</a></h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>master in management or business oriented studies.</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--blog-section-->
        <section class="cmt-row blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>blog corner</h5>
                                <h2 class="title">in your <strong> inbox news</strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="blog-info">

                            @foreach ($blogs as $blog)
                            {{-- @dd($blog) --}}
                            <div class="blog-info_item">
                                <!-- featured-imagebox-post -->
                                <div class="featured-imagebox featured-imagebox-post style1 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset($blog->image)}}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="cmt-post-link">
                                            <div class="post-meta">
                                                {{-- <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span> --}}
                                                {{-- <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span> --}}
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>{{$blog->created_at->format('j F, Y')}}</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="{{ route('blog.single',$blog->slug)}}" tabindex="0">{{ $blog->name }}</a></h5>
                                        </div>
                                        <div class="post-desc featured-desc">
                                        <p>{!! $blog->description !!}</p>
                                    </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="blog-nav">
                            @foreach ($blogs as $blog)
                            <div class="blog-nav_item">
                                <!-- featured-imagebox-post -->
                                <div class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset($blog->image) }}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                {{-- <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span> --}}
                                                <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>{{$blog->created_at->format('j F, Y')}}</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="{{ route('blog.single',$blog->slug)}}" tabindex="0">{{ $blog->name }}</a></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div>
                            @endforeach

                            {{-- <div class="blog-nav_item">
                                <!-- featured-imagebox-post -->
                                <div class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('assets/images/blog/blog-two-760x580.jpg') }}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span>
                                                <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>12 Apr 2019</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="blog-single.html" tabindex="0">To Improve Your Express Entry Application Form</a></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div> --}}
                            {{-- <div class="blog-nav_item">
                                <!-- featured-imagebox-post -->
                                <div class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('assets/images/blog/blog-three-760x580.jpg') }}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span>
                                                <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>12 Apr 2019</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="blog-single.html" tabindex="0">Employment Insurance for Foreign Nationals</a></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div> --}}
                            {{-- <div class="blog-nav_item">
                                <!-- featured-imagebox-post -->
                                <div class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('assets/images/blog/blog-four-760x580.jpg') }}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span>
                                                <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>12 Apr 2019</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="blog-single.html" tabindex="0">You Will Become As lor Small And Your and Desire.</a></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div> --}}
                            {{-- <div class="blog-nav_item">
                                <!-- featured-imagebox-post -->
                                <div class="d-flex align-items-center featured-imagebox featured-imagebox-post style2 bor_rad_5">
                                    <div class="cmt-post-thumbnail featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('assets/images/blog/blog-five-760x580.jpg') }}" alt="image">
                                    </div>
                                    <div class="featured-content featured-content-post">
                                        <div class="post-top cmt-post-link">
                                            <div class="post-meta">
                                                <span class="cmt-meta-line tags-links"><i class="fa fa-comments"></i>Comments</span>
                                                <span class="cmt-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>12 Apr 2019</span>
                                            </div>
                                        </div>
                                        <div class="post-title featured-title">
                                            <h5><a href="blog-single.html" tabindex="0">You Will Become As lor Small And Your and Desire.</a></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-post end-->
                            </div> --}}
                        </div>
                    </div>
                </div>
                            
        </section>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
      $('.country').on('change', function() {
        console.log($(this).val())
        window.location.href = "/visa/"+$(this).val();
          });
              });
  </script>
  <script>
    const hero = document.querySelector('.hero');
    function activate(e) {
      if (e.target.matches('.hero') || !e.target.matches('img')) return;
      [hero.src, e.target.src] = [e.target.src, hero.src];
    }
    window.addEventListener('click',activate,false);
    $(document).ready(function() {
        $('.country').select2();
        $(document).on('keyup', '.select2-search__field', function (e) {
          $.ajax({
                url: "{{ route('search_visa')}}", // Replace with your API endpoint
                method: "GET",
                data:{
                  data:$(this).val(),
                },
                success: function(data) {
                    console.log(data)
                    if(data !== []){
                      var html = "";
                    $.each( data, function( key, value ) {
                        console.log(value)
                       html += '<div class="cmt-box-col-wrapper col-lg-4"><div class="featured-imagebox featured-imagebox-country style2 bor_rad_5"><div class="cmt-box-view-content-inner"><div class="featured-thumbnail"><a href="#" tabindex="-1"> <img class="img-fluid" src="'+value.image+'" alt="image"></a></div><div class="featured-content"><div class="featured-content-icon_img-block"><img class="img-fluid" src="'+value.flag+'" alt="image"></div><div class="featured-title"> <h5><a href="aus.html" tabindex="-1">'+value.name+'</a></h5></div><div class="featured-desc"><p>'+value.sortdescription+'</p></div><a class="cmt-btn cmt-btn-size-sm btn-inline cmt-btn-color-skincolor" href="aus.html" tabindex="-1">Read More</a></div> </div></div></div>'
                      });
                      $('#slider-country').html(html);
                      console.log("not null")
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error("Error:", status, error);
                }
            });
        });
        });
    </script>
@endpush