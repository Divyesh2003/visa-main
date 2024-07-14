@extends('layouts.app')
@section('title', "About")
@section('description', "Hello description")
@section('content')
<div class="cmt-page-title-country">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Country</h2>
                        <p>All country</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/">Home</a>
                        </span>
                        <span>Country</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<section class="cmt-row features-section cmt-bgcolor-grey bg-img1 cmt-bg cmt-bgimage-yes cmt-bg-pattern clearfix">
    <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
    <div class="container">
        <!-- slick_slider -->
        <div class="row" id="posts">
                @foreach ($countries as $country)
                {{-- @dd($country) --}}
            <div class="cmt-box-col-wrapper col-lg-4">
                <!--featured-imagebox-->
                <div class="featured-imagebox featured-imagebox-country style2 bor_rad_5">
                    <div class="cmt-box-view-content-inner">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <a href="{{ route('search_visa.country',$country->slug)}}" tabindex="-1"> <img class="img-fluid" src="{{ asset($country->image)}}" alt="image" style="width:360px;height:208px;"></a>
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
                    {{-- <button class="see-more cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark"data-page="2" data-link="?page=" data-div="#slider-country" >View More country!</button> --}}
                    <button class="see-more cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-dark" data-page="2" data-link="countries?page=" data-div="#posts">See more</button> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection