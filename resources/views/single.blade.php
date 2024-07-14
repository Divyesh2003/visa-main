@extends('layouts.app')
@section('title', "About")
@section('description', "Hello description")
@section('content')
<style>
   .cmt-blog-single-content h1{
        font-size: 28px;
    }
   .cmt-blog-single-content h2{
        font-size: 26px; 
    }
   .cmt-blog-single-content h3{
        font-size: 22px;
    }
    .cmt-blog-single-content h4{
        font-size: 18px;
    }
   .cmt-blog-single-content h5{
        font-size: 16px;
    }
   .cmt-blog-single-content h6{
        font-size: 14px;
    }
   .cmt-blog-single-content p{
        font-size: 12px;
    }
</style>
<div class="cmt-page-title-blog-single">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Blog Single</h2>
                        <p>Founded In 1996 New York,USA</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<div class="site-main">

    <div class="cmt-row sidebar cmt-sidebar-right cmt-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 content-area">
                    <!-- post -->
                    <article class="post cmt-blog-single clearfix">
                        <!-- cmt-post-featured-wrapper -->
                        <div class="cmt-post-featured-wrapper cmt-featured-wrapper mb-20">
                            <div class="cmt-post-featured">
                                <img class="img-fluid" src="{{ asset($blog->image)}}" alt="">
                            </div>
                            <div class="cmt-box-post-date">
                                <span class="cmt-entry-date">
                                    <time class="entry-date" datetime="2019-08-28T08:07:55+00:00">{{$blog->created_at->format('d')}}<span class="entry-month">{{$blog->created_at->format('M')}}</span></time>
                                </span>
                            </div>
                        </div>
                        <!-- cmt-post-featured-wrapper end -->
                        <!-- cmt-blog-single-content -->
                        <div class="cmt-blog-single-content">
                            {!! $blog->description !!}
                        </div><!-- cmt-blog-single-content -->
                    </article><!-- post end -->
                </div>
                <div class="col-lg-4 widget-area sidebar-right cmt-col-bgcolor-yes cmt-bg cmt-right-span cmt-bgcolor-grey mt_80 pt-50 mb_80 pb-60 res-991-mt-0 res-991-pt-0">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <aside class="widget widget-search with-title">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                            </label>
                            <button class="btn" type="submit" value="Search"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </form>
                    </aside>
                    <aside class="widget widget-recent-post with-title">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="widget-post cmt-recent-post-list">
                            @foreach ($top  as $latest)
                            <li>
                                <a href="{{ route('blog.single',$latest->slug)}}"><img src="{{ asset($latest->image) }}" alt="post-img"></a>
                                <div class="post-detail">
                                    <span class="post-date"><i class="fa fa-calendar"></i>{{$latest->created_at->format('j F, Y')}}</span>
                                    <a href="{{ route('blog.single',$latest->slug)}}">{{ $latest->name }}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                    <aside class="widget widget-download">
                        <ul class="download">
                            <li><i class="fa fa-file-pdf-o"></i><div><h4>Detailed Service Pack</h4><a href="#">Download PDF</a></div></li>
                            <li><i class="fa fa-file-pdf-o"></i><div><h4>Detailed Service Pack</h4><a href="#">Download txt</a></div></li>
                        </ul>
                    </aside>
                    <aside class="widget widget-contact">
                        <div class="cmt-col-bgcolor-yes cmt-bgcolor-darkgrey col-bg-img-five cmt-col-bgimage-yes cmt-bg pt-50 pl-25 pr-20 pb-50">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                                <div class="cmt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <h4>Emergency Visa.</h4>
                                <p>We Offer a full Line Of Services For All Your Plumbing And Drain Cleaning Needs.</p>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box icon-align-before-content style5 mt-60 cmt-bgcolor-white">
                                    <div class="featured-icon">
                                        <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-skincolor cmt-icon_element-size-xs cmt-icon_element-style-rounded">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Call Now: <span class="cmt-textcolor-skincolor">+91 7984303039</span></h5>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end -->
                            </div>
                        </div>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>

  
</div>
@endsection