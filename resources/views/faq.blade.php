@extends('layouts.app')
@section('title', "About")
@section('description', "Hello description")
@section('content')
<div class="cmt-page-title-faq">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Faq</h2>
                        <p>What's your quotion</p>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/">Home</a>
                        </span>
                        <span>Faq</span>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>
<div class="site-main">

    <section class="cmt-row faq-section clearfix">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7">
                     <div class="pr-30 res-991-pr-0 res-991-pb-40">
                         <!-- section title -->
                         <div class="section-title">
                             <div class="title-header">
                                 <h5>WHAT WE OFFER</h5>
                                 <h2 class="title">Do you have<strong class="cmt-textcolor-skincolor"> Questions ?</strong></h2>
                             </div>
                         </div><!-- section title end -->
                         <div class="accordion pt-10">
                           @foreach ($faqs as $faq)
                           <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                            <div class="toggle-title"><a href="#">{{$faq->title}}</a></div>
                            <div class="toggle-content" style="display: none;">
                                <p>{{ $faq->description }}</p>
                            </div>
                        </div>
                           @endforeach
                            
                         
                        </div>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-darkgrey cmt-col-bgimage-yes col-bg-img-two spacing-2 pt-40 mt-0 z-index-1">
                         <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                             <div class="cmt-col-wrapper-bg-layer-inner"></div>
                         </div>
                         <div class="layer-content">
                             <div class="section-title">
                                 <div class="title-header">
                                     <h2 class="title">Can't <strong>Find</strong> The <strong class="cmt-textcolor-skincolor"> Answers ?</strong></h2>
                                 </div>
                             </div>
                             <form id="contact_form" class="contact_form wrap-form pt-10 pb-10 clearfix" method="POST" novalidate="novalidate" action="{{ route('inquiry.store') }}">
                                @csrf
                                @method('POST') 
                                <label>
                                     <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required">
                                     @error('name')
                                     <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                 @enderror
                             </span>
                                    </label>
                                 <label>
                                     <span class="text-input"><input name="email" type="email" value="" placeholder="Email Id" required="required">
                                     @error('email')
                                     <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                 @enderror
                             </span>
                                    </label>
                                 <label>
                                     <span class="text-input"><input name="phone" type="text" value="" placeholder="Cell Phone" required="required">
                                        @error('phone')
                                        <span style="color: #fb0202;margin-bottom:10px;">{{ $message }}</span>
                                    @enderror
                                </span>
                                    </label>
                                 <label>
                                     <span class="text-input"><textarea name="message" rows="4" cols="40" placeholder="Message" required="required" data-gramm="false" wt-ignore-input="true"></textarea></span>
                                 </label>
                                 <label>
                                     <button class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-white" type="submit">Submit Request</button>
                                 </label>
                             </form>
                         </div>
                     </div>
                 </div>
             </div><!-- row end -->
         </div>
     </section>
   
 </div>
@endsection