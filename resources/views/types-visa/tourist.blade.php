@extends('layouts.app')
@section('title', "Blog")
@section('description', "Hello description")
@section('content')
<div class="cmt-page-title-faq">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Tourist & Offical Visa </h2>
                        <p>What's your tourist visa</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/">Home</a>
                        </span>
                        <span>Tourist & Offical Visa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<div class="site-main">

    <div class="cmt-row sidebar cmt-sidebar-left cmt-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 ttm-col-bgcolor-yes cmt-bg cmt-left-span cmt-bgcolor-grey mt_80 pt-60 mb_80 pb-60 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            <li class="active"><a href="{{ route('tourist.visa') }}">Tourist Visa</a></li>
                            <li><a href="{{ route('transit.visa') }}">Transit Visa</a></li>
                            <li><a href="{{ route('visitor.visa') }}">Visit Visa</a></li>
                            <li><a href="{{ route('family.visa') }}">Family Visa</a></li>
                            <li><a href="{{ route('work.visa') }}">Work Visa</a></li>
                            <li><a href="{{ route('student.visa') }}">Studen Visa</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-download">
                        <ul class="download">
                            <li><i class="fa fa-file-pdf-o"></i><div><h4>Detailed Service Pack</h4><a href="#">Download PDF</a></div></li>
                            <li><i class="fa fa-file-pdf-o"></i><div><h4>Detailed Service Pack</h4><a href="#">Download txt</a></div></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-contact">
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
                    </aside>
                    <aside class="widget widget-form with-title">
                        <h3 class="widget-title">Free Immigration Assessment</h3>
                        <form id="immigration_form" class="immigration_form wrap-form clearfix" method="post" novalidate="novalidate" action="{{ route('inquiry.store') }}" >
                            @csrf
                            @method('POST')
                            <label>
                            <span class="text-input"><input name="name" type="text" value="" placeholder="Your" required="required">
                            @error('name')
                                <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                            @enderror
                        </span>
                            </label>
                            <label>
                                <span class="text-input"><input name="email" type="text" value="" placeholder="Email" required="required">
                                @error('email')
                                <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                            @enderror
                                </span>
                            </label>
                            <label>
                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required">
                            @error('phone')
                                <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                            @enderror
                            </span>
                            </label>
                            <label>
                                <span class="text-input">
                                    <select id="search_category" name="visa_type" aria-invalid="false">
                                        <option value="Select Visa">Select Visa</option>
                                        <option value="Business Visa">Business Visa</option>
                                        <option value="Diplomatic &amp; Offical Visa">SDiplomatic &amp; Offical Visa</option>
                                        <option value="Family Visa">Family Visa</option>
                                        <option value="Student Visa">Student Visa</option>
                                        <option value="Temporary Work Visa">Temporary Work Visa</option>
                                        <option value="Visitor Visa">Visitor Visa</option>
                                    </select>
                                </span>
                            </label>
                            <label>
                                <span class="text-input"><textarea name="message" rows="4" placeholder="Message" required="required" data-gramm="false" wt-ignore-input="true"></textarea></span>
                            </label>
                            <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-fill cmt-btn-color-skincolor" type="submit">Send A Message</button>
                        </form>
                    </aside>
                </div>
                <div class="col-lg-8 content-area">
                    <div class="cmt-service-single-content-area">
                        <div class="cmt-featured-wrapper mb-40 res-991-mb-20">
                            <img class="img-fluid" src="{{ asset('assets/images/services-details_03.jpg') }}" alt="">
                        </div>
                        <div class="cmt-service-description">
                            <h4>infrastructure Plan &amp; Visa Managment</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <div class="mt-30 mb-30 cmt-bgcolor-white box-shadow pt-20 pb-15 pl-30 res-991-pl-15 pr-15">
                                <div class="row cmt-vertical_sep">
                                    <div class="col-lg-4 col-md-4 col-sm-6 cmt-box-col-wrapper">
                                        <!-- cmt-fid -->
                                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-lefticon">
                                            <div class="cmt-fid-icon-wrapper cmt-textcolor-skincolor">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="cmt-fid-contents">
                                                <h4 class="cmt-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="15" data-interval="3" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">0</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="cmt-fid-title">Years Of Experience</h3>
                                            </div>
                                        </div><!-- cmt-fid end -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 cmt-box-col-wrapper">
                                        <!-- cmt-fid -->
                                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-lefticon">
                                            <div class="cmt-fid-icon-wrapper cmt-textcolor-skincolor">
                                                <i class="fa fa-smile-o"></i>
                                            </div>
                                            <div class="cmt-fid-contents">
                                                <h4 class="cmt-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="1490" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">0</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="cmt-fid-title">Happy Customers</h3>
                                            </div>
                                        </div><!-- cmt-fid end -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 cmt-box-col-wrapper">
                                        <!-- cmt-fid -->
                                        <div class="cmt-fid inside cmt-fid-with-icon cmt-fid-view-lefticon">
                                            <div class="cmt-fid-icon-wrapper cmt-textcolor-skincolor">
                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                            <div class="cmt-fid-contents">
                                                <h4 class="cmt-fid-inner">
                                                    <span data-appear-animation="animateDigits" data-from="0" data-to="850" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">0</span>
                                                    <sub>+</sub>
                                                </h4>
                                                <h3 class="cmt-fid-title">New Customers</h3>
                                            </div>
                                        </div><!-- cmt-fid end -->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                            <div class="mt-25 mb-25">
                                <h4>Why Choose Us?</h4>
                            </div>
                            <div class="cmt-bgcolor-white box-shadow pt-40 pl-30 pb-40 pr-30 mb-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="ttm_single_image-wrapper res-991-pb-30">
                                            <img class="img-fluid" src="{{ asset('assets/images/single-img-12.jpg') }}" alt="single_12">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It has survived not only five centuries.</p>
                                        <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor pt-5">
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Can I have multiple  in a single feature?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                            <div class="pt-5 pb-5">
                                <h4>Analyzing Visa services</h4>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                            <div class="accordion pt-15">
                                <!-- toggle -->
                                <div class="toggle cmt-control-left-true">
                                    <div class="toggle-title"><a href="#">Do You Have A Covered Health Insurance For This Journey?</a></div>
                                    <div class="toggle-content" style="display: none;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle cmt-control-left-true">
                                    <div class="toggle-title"><a href="#">What do you know about the country you are visiting?</a></div>
                                    <div class="toggle-content" style="display: none;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle cmt-control-left-true">
                                    <div class="toggle-title"><a href="#" class="active">How Much This Journey Will Cost You?</a></div>
                                    <div class="toggle-content" style="display: block;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle cmt-control-left-true">
                                    <div class="toggle-title"><a href="#">How to take time in the procesing of ragistration?</a></div>
                                    <div class="toggle-content" style="display: none;">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div><!-- toggle end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>
</div>
@endsection