@extends('layouts.app')
@section('title', "Blog")
@section('description', "Hello description")
@section('content')
<div class="cmt-page-title-blog">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Blog</h2>
                        <p>Our News Nation</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/">Home</a>
                        </span>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<div class="site-main">
    <section class="cmt-row grid-section clearfix">
        <div class="container">
            <div class="row">
                @foreach ($blog as $blo)
                {{-- @dd($blog) --}}
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style3">
                        <div class="cmt-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid" src="{{ asset($blo->image)}}" alt="image">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-header">
                                <div class="post-title featured-title">
                                    <h5><a href="{{ route('blog.single',$blo->slug)}}">{{ $blo->name }}</a></h5>
                                </div>
                            </div>
                            <div class="post-meta">
                                <span class="cmt-meta-line byline">
                                    <img class="img-fluid" src="{{ asset($blo->image)}}" alt="post-img /">Admin
                                </span>
                                <span class="cmt-meta-line post-date"><i class="fa fa-calendar"></i>{{$blo->created_at->format('j F, Y')}}</span>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>{!! $blo->description !!}</p>
                            </div>
                            <div class="post-bottom cmt-post-link">
                                <a class="cmt-btn cmt-btn-size-sm cmt-icon-btn-left cmt-btn-color-skincolor btn-inline" href="{{ route('blog.single',$blo->slug)}}" tabindex="0"><i class="fa fa-minus"></i>Read more</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                @endforeach
            </div>
            <div class="pagination-block mb-15 res-991-mb-0">
                {{ $blog }}
            </div>
        </div>
    </section>
</div>
@endsection