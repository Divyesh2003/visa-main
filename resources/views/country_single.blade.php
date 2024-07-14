@extends('layouts.app')
@section('title', "About")
@section('description', "Hello description")
@section('content')
<main class="content">
    <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{ $country->name }}</h2>
                            <p>{{ $country->sortdescription }}</p>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span>{{ $country->name }}</span>
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
                                <li class="active"><a href="{{ route('search_visa.country',$country->slug)}}">{{ $country->name }}</a></li>
                                @if($country->slug != 'thailand')<li><a href="{{ route('search_visa.country','thailand')}}">Thailand</a></li>@endif
                                @if($country->slug != 'united-arab-emirates')<li><a href="{{ route('search_visa.country','united-arab-emirates')}}">Dubai</a></li>@endif
                                @if($country->slug != 'singapore')<li><a href="{{ route('search_visa.country','singapore')}}">Singapor</a></li>@endif
                                @if($country->slug != 'sri-lanka')<li><a href="{{ route('search_visa.country','sri-lanka')}}">Srilanka</a></li>@endif
                                @if($country->slug != 'malaysia')<li><a href="{{ route('search_visa.country','malaysia')}}">Malasiya</a></li>@endif
                                @if($country->slug != 'kuwait')<li><a href="{{ route('search_visa.country','kuwait')}}">Kuwait</a></li>@endif
                                @if($country->slug != 'schengen')<li><a href="{{ route('search_visa.country','schengen')}}">Schengen</a></li>@endif
                                @if($country->slug != 'taiwan-province-of-china')<li><a href="{{ route('search_visa.country','taiwan-province-of-china')}}">Taiwan</a></li>@endif
                                @if($country->slug != 'oman')<li><a href="{{ route('search_visa.country','oman')}}">Oman</a></li>@endif
                                @if($country->slug != 'vietnam')<li><a href="{{ route('search_visa.country','vietnam')}}">Vietnam </a></li>@endif
                                @if($country->slug != 'turkey')<li><a href="{{ route('search_visa.country','turkey')}}">Turkey</a></li>@endif
                                @if($country->slug != 'hong-kong')<li><a href="{{ route('search_visa.country','hong-kong')}}">Hong Kong</a></li>@endif
                                @if($country->slug != 'bahrain')<li><a href="{{ route('search_visa.country','bahrain')}}">Bahrain</a></li>@endif
                            </ul>
                        </aside>
                        <aside class="widget widget-contact">
                            {{-- <img class="img-fluid" src="{{ asset('assets/images/single-img-12.jpg') }}" alt="single_12">
                            <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-bg pt-20 pl-20 pr-20 pr-20 pb-20">
                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <p class="mb-10">Our Appoinment Service Call Us</p>
                                    <h4><i class="flaticon-call mr-3"></i>+123 456 7890</h4>
                                </div>
                            </div> --}}
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
                            <div class="cmt-featured-wrapper mb-40 res-991-mb-20" id="visatypes">
                                <h3 class="countries-details__title" style="font-size: 30px;font-weight: 600;line-height: 30px;">{{ $country->name }}</h3>
                                {{-- <img class="img-fluid" src="{{ asset('assets/images/country/country-details_03.jpg') }}" alt=""> --}}
                                <div class="row">
                                    {{-- <div class="col-sm-6">
                                        <div class="card  left">
                                            <div class="card-head ">30 Days Tourist e Visa</div>
                                            <div class="col l12 m12 s12 ">
                                                <ul class="akb-mrg-none visa-type left p-3">
                                                    <li>Processing time:
                                                        <span>3-4 days</span>
                                                    </li>
                                                    <li>Stay period:
                                                        <span>30 days</span>
                                                    </li>
                                                    <li>Validity:
                                                        <span>3 months</span>
                                                    </li>
                                                    <li>Visa category:
                                                        <span> Tourist / Business</span>
                                                    </li>
                                                    <li>Entry:
                                                        <span>Single</span>
                                                    </li>
                                                    <li>Fees:
                                                        <span class="visa-price">INR 3,699 /-</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @foreach ($country->visas as $card_country)
                                    {{-- @dd($card_country) --}}
                                    <div class="col-sm-6" style="margin-top: 30px;">
                                        <div class="package">
                                            <div class="package__item">
                                                <div class="package__header">
                                                    <div class="package__name">{{ $card_country->title }}</div>
                                                </div>
                                                <div class="package__body" style="position: relative;">
                                                   @if( $card_country->popular == 1)
                                                    <div class="tagouter">
                                                        <div class="popular-tag">Popular</div>
                                                   </div>
                                                   @endif
                                                    <ul class="akb-mrg-none visa-type left">
                                                        <li>Processing time:
                                                            <span>{{ $card_country->processing_time }}</span>
                                                        </li>
                                                        <li>Stay period:
                                                            <span>{{ $card_country->stay_period }}</span>
                                                        </li>
                                                        <li>Validity:
                                                            <span>{{ $card_country->validity }}</span>
                                                        </li>
                                                        <li>Visa category:
                                                            <span> {{ $card_country->visa_category }}</span>
                                                        </li>
                                                        <li>Entry:
                                                            <span>{{ $card_country->entry }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="package__footer">
                                                    <a href="https://api.whatsapp.com/send?phone=9428552312&amp;text=Hello!" class="" target="_blank">
                                                        <button><i class="fa fa-whatsapp" style="font-size: 20px;margin-right:10px;"></i> Click Here for Visa Fees </button>
                                                        {{-- <i class="fa-brands fa-whatsapp"></i> --}}
                                                      </a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    

                                    {{-- <div class="col-sm-6">
                                        <div class="card  left">
                                            <div class="card-head ">30 Days Tourist e Visa</div>
                                            <div class="col l12 m12 s12 ">
                                                <ul class="akb-mrg-none visa-type left p-3">
                                                    <li>Processing time:
                                                        <span>3-4 days</span>
                                                    </li>
                                                    <li>Stay period:
                                                        <span>30 days</span>
                                                    </li>
                                                    <li>Validity:
                                                        <span>3 months</span>
                                                    </li>
                                                    <li>Visa category:
                                                        <span> Tourist / Business</span>
                                                    </li>
                                                    <li>Entry:
                                                        <span>Single</span>
                                                    </li>
                                                    <li>Fees:
                                                        <span class="visa-price">INR 3,699 /-</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>   --}}
                                </div>
                            </div>
                            <div class="cmt-service-description">
                                <h4>Study, Work, Live in {{ $country->name }}</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="ttm_single_image-wrapper mt-20">
                                            <img class="img-fluid" src="{{  asset($country->image) }}" alt="single_14">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="cmt-list cmt-list-style-icon cmt-list-icon-color-skincolor mt-20">
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Can I have multiple  in a single feature?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Which material types can you work with?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Can I have multiple  in a single feature?</span>
                                            </li>
                                            <li><i class="cmt-textcolor-skincolor fa fa-check-circle"></i><span class="cmt-list-li-content">Is Smart Lock required for instant apps?</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-30">
                                    <h4>Study, Work, Live in {{ $country->name }} Benifits</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content style2">
                                            <div class="featured-icon">
                                                <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-xl cmt-icon_element-style-square"> 
                                                    <i class="flaticon-policy"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5><a href="services-1.html">Accurate Guidance</a></h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Skilled professionals are always ready to provide reliable services to our clients!</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box icon-align-before-content style2">
                                            <div class="featured-icon">
                                                <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-skincolor cmt-icon_element-size-xl cmt-icon_element-style-square"> 
                                                    <i class="flaticon-contract"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5><a href="services-1.html">Our Presence</a></h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Branches are situated in major metro cities and overseas, always open for you!</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end -->
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                <div class="mt-30">
                                    <h4>Life Styles </h4>
                                    <p>An applicant should apply at center in or closest to, the city in which you are documented as being a resident. Please contact VFS Global if you have any doubts. This crossword explores the various paths humankind can follow to create a more sustainable world. Find out how many ways we can change our approach to the environment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>
</main>
@endsection
@push('scripts')
@endpush