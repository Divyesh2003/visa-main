<body>
<!--page start-->
<div class="page">
    <!--header start-->
    <header id="masthead" class="header cmt-header-style-03">
        <!-- widget_header -->
        <div class="widget_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex flex-row align-items-center">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="/" title="Tripzia" rel="home">
                                    <img id="logo-img" class="img-center" src="{{ asset('assets/image/Akbar_Travels.png')}}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <!-- widget-info -->
                            <div class="widget_info mr-auto">
                                <div>Visa &amp; Immigration Consultants</div>
                            </div>
                            <!-- widget-info -->
                            <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                <div class="widget_social mr-25">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="ti ti-instagram"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti ti-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti ti-youtube"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti ti-twitter-alt"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti ti-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header_btn">
                                    {{-- <a class="cmt-btn cmt-btn-size-sm cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-grey" href="contact-us-1.html">get consultation</a> --}}
                                </div>
                            </div><!-- widget-info end -->
                            <!-- widget-info -->
                            <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                <h5 class="mb-0"><i class="fa fa-phone mr-2 cmt-textcolor-skincolor"></i>+91 7984303039</h5>
                            </div><!-- widget-info end -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- widget_header end -->
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu cmt-bgcolor-white">
            <div class="site-header-menu-inner cmt-stickable-header">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                        <ul class="menu">
                                            <li class="mega-menu-item active">
                                                <a href="/" class="mega-menu-link">Home</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('about') }}" class="mega-menu-link">About Us</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="#" class="mega-menu-link">Types Of Visa</a>
                                                {{-- <ul class="mega-submenu">
                                                    <li><a href="blog.html">Blog Classic</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-single.html">Blog Single View</a></li>
                                                </ul> --}}
                                                <ul class="mega-submenu">
                                                    <li><a href="{{ route('tourist.visa') }}">Tourist Visa</a></li>
                                                    <li><a href="{{ route('transit.visa') }}">Transit Visa</a></li>
                                                    <li><a href="{{ route('visitor.visa') }} ">Visit Visa</a></li>
                                                    <li><a href="{{ route('family.visa') }}">Family Visa</a></li>
                                                    <li><a href="{{ route('work.visa') }}">Work Visa</a></li>
                                                    <li><a href="{{ route('student.visa') }}">Student Visa</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('countries')}}" class="mega-menu-link">Counutries</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('blog.list')}}" class="mega-menu-link">Blogs</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('faq') }}" class="mega-menu-link">Faqs</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('contact.us')}}" class="mega-menu-link">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                <div class="header_extra d-flex flex-row align-items-center ml-auto">
                                    <div class="header_search">
                                        <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                        <div class="header_search_content">
                                            {{-- <form id="searchbox" method="get" action="#">
                                                <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                                <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-header-menu end-->
    </header><!--header end-->
<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"> 
    <rs-module id="rev_slider_1_1" data-version="6.1.0"> 
        <rs-slides>
            <rs-slide data-key="rs-1" data-title="Slide1" data-thumb="{{ asset('assets/images/slides/slider-mainbg-001.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:3dcurtain-vertical;sl:d;"> 
                <img src="{{ asset('assets/images/slides/slider-mainbg-001.jpg')}}" title="slider-bg-image" width="1920" height="690" class="rev-slidebg" data-no-retina>
                <rs-layer id="slider-1-slide-1-layer-1" 
                    data-type="text" 
                    data-xy="xo:50px,20px,15px,10px;yo:230px,230px,119px,78px;" 
                    data-text="w:normal;s:20,20,18,18;l:20,20,18,18;a:left;fw:400;"
                    data-color="#0b0c26" 
                    data-rsp_ch="on"
                    data-padding="t:12,12,10,10;r:30,30,20,15;b:12,12,10,10;l:30,30,20,15;" 
                    data-ford="frame_0;frame_1;frame_2;frame_999;" 
                    data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-20deg;oY:0%;" 
                    data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-10deg;oY:0%;e:power4.in;st:500;sp:500;sR:200;" data-frame_999="st:w;sp:2000;sR:7500;" 
                    data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1000;sp:500;" 
                    style="z-index:50;background-color:rgba(255,255,255,.88);text-transform:uppercase;" >Welcome To The Fastest Way 
                </rs-layer>
                <rs-layer id="slider-1-slide-1-layer-2" 
                    data-type="text" 
                    data-xy="xo:50px,20px,15px,10px;yo:285px,285px,169px,127px;" 
                    data-text="w:normal;s:59,59,49,36;l:60,60,50,38;a:left;fw:300;" 
                    data-color="#0b0c26" 
                    data-rsp_ch="on"
                    data-padding="t:15,15,14,12;r:30,30,20,20;b:15,15,14,12;l:30,30,20,20;" 
                    data-ford="frame_0;frame_1;frame_2;frame_999;" 
                    data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-10deg;oY:0%;" 
                    data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-5deg;oY:0%;e:power4.in;st:900;sp:500;sR:600;" data-frame_999="st:w;sp:2000;sR:7100;" 
                    data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1400;sp:500;" 
                    style="z-index:48;background-color:rgba(255,255,255,.88);font-family: 'Roboto', sans-serif; text-transform:uppercase;" >Get A <strong class="cmt-textcolor-skincolor">Visa </strong> & <strong class="cmt-textcolor-skincolor">Immigration</strong>
                </rs-layer>
                <a  id="slider-1-slide-1-layer-3" 
                    class="rs-layer cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-white"
                    href="contact-us-1.html"
                    target="_self" 
                    data-type="button" 
                    data-xy="x:l;xo:50px,20px,15px,10px;y:b,b,b,b;yo:230px,230px,117px,78px;"
                    data-rsp_ch="on"
                    data-color="#1d2143" 
                    data-text="s:15;a:c;fw:600;"
                    data-frame_0="y:50px;" 
                    data-frame_1="e:power4.out;st:900;sp:500;sR:900;" 
                    data-frame_999="st:w;sp:2000;sR:7600;"
                    data-frame_hover="c:#fff;bow:1px,1px,1px,1px;boc:#ff7900;bgc:#ff7900"
                    style="z-index:7;text-transform: capitalize;">Book a consultaion!
                </a>
            </rs-slide> 
            <rs-slide data-key="rs-2" data-title="Slide2" data-thumb="{{ asset('assets/images/slides/slider-mainbg-002.jpg')}}" data-anim="ei:d;eo:d;s:2000ms;r:0;t:3dcurtain-horizontal;sl:d;">
                <img src="{{ asset('assets/images/slides/slider-mainbg-002.jpg')}}" title="slider-bg-image" width="1920" height="690" class="rev-slidebg" data-no-retina> 
                <rs-layer id="slider-1-slide-2-layer-1" 
                    data-type="text" 
                    data-xy="xo:50px,20px,15px,10px;yo:230px,230px,119px,78px;" 
                    data-text="w:normal;s:20,20,18,18;l:20,20,18,18;a:left;fw:400;"
                    data-color="#0b0c26" 
                    data-rsp_ch="on"
                    data-padding="t:12,12,10,10;r:30,30,20,15;b:12,12,10,10;l:30,30,20,15;" 
                    data-ford="frame_0;frame_1;frame_2;frame_999;" 
                    data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-20deg;oY:0%;" 
                    data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-10deg;oY:0%;e:power4.in;st:500;sp:500;sR:200;" data-frame_999="st:w;sp:2000;sR:7500;" 
                    data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1000;sp:500;" 
                    style="z-index:50;background-color:rgba(255,255,255,.88);text-transform:uppercase;" >Welcome To The Fastest Way 
                </rs-layer>
                <rs-layer id="slider-1-slide-2-layer-2" 
                    data-type="text" 
                    data-xy="xo:50px,20px,15px,10px;yo:285px,285px,169px,127px;" 
                    data-text="w:normal;s:59,59,49,36;l:60,60,50,38;a:left;fw:300;" 
                    data-color="#0b0c26" 
                    data-rsp_ch="on"
                    data-padding="t:15,15,14,12;r:30,30,20,20;b:15,15,14,12;l:30,30,20,20;" 
                    data-ford="frame_0;frame_1;frame_2;frame_999;" 
                    data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-10deg;oY:0%;" 
                    data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-5deg;oY:0%;e:power4.in;st:900;sp:500;sR:600;" data-frame_999="st:w;sp:2000;sR:7100;" 
                    data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1400;sp:500;" 
                    style="z-index:48;background-color:rgba(255,255,255,.88);font-family: 'Roboto', sans-serif; text-transform:uppercase;" >Get A <strong class="cmt-textcolor-skincolor">Visa </strong> & <strong class="cmt-textcolor-skincolor">Immigration</strong>
                </rs-layer>
                <a  id="slider-1-slide-2-layer-3" 
                    class="rs-layer cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-white"
                    href="contact-us-1.html"
                    target="_self" 
                    data-type="button" 
                    data-xy="x:l;xo:50px,20px,15px,10px;y:b,b,b,b;yo:230px,230px,117px,78px;"
                    data-border="bos:solid;boc:#fff;bow:1px,1px,1px,1px;"
                    data-rsp_ch="on"
                    data-color="#1d2143" 
                    data-text="s:15;a:c;fw:600;"
                    data-frame_0="y:50px;" 
                    data-frame_1="e:power4.out;st:900;sp:500;sR:900;" 
                    data-frame_999="st:w;sp:2000;sR:7600;"
                    data-frame_hover="c:#fff;bow:1px,1px,1px,1px;boc:#ff7900;bgc:#ff7900"
                    style="z-index:7;text-transform: capitalize;">Book a consultaion!
                </a>
            </rs-slide> 
        </rs-slides> 
        <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress> 
    </rs-module>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->