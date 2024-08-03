@extends('layouts.front-main')
@section('content')
    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-active">
        @foreach($banners as $banner) 
            <div class="single-banner">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">                            
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title" style="animation-delay: 0.6s;">
                                    {{ $banner->title }}
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s" class="" style="animation-delay: 0.9s;">
                                    {{ $banner->body }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" data-animation="fadeInRight" data-delay="0.5s" style="animation-delay: 0.5s;">
                            <img src="{{ Storage::disk()->url('banners/'.$banner->banner_image) }}" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <!--====== Banner Slider End ======-->

    <!--====== Service Part Start ======-->
    <section class="service-section section-gap">
        <div class="container">
            <div class="section-title text-center mb-30">
                <span class="title-tag">SERVICES</span>
                <h2 class="title">What We Do</h2>
            </div>
            <div class="row service-items">
                @foreach($services as $service) 
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                        <div class="service-item color-2 text-center mt-30">
                            <div class="icon">
                                <!--<i class="fal fa-laptop-code"></i>-->
                                @if($service->image!='')
                                    <img src="{{ Storage::disk()->url('services/'.$service->image) }}" height="100px" width="100px" align="center" alt="Service Image">
                                @else
                                    <div style="height:110px;width:110px;font-size: 12px;">DEFAULT IMAGE</div>
                                @endif
                            </div>
                            <h5 class="title"><a href="#">{{ $service->title }}</a></h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Service Part End ======-->

    <!--====== Why Choose Section Start ======-->
    <section class="service-section-two section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <!--<span class="title-tag">OUR LATEST SERVICES</span>-->
                <h2 class="title">Why Choose eDigillence Infosolutions?</h2>
            </div>
            <div class="row service-items justify-content-center">
                @foreach($whyChooses as $whyChoose) 
                    <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="service-item-two color-1 mt-30">
                            <h3 class="title"><a href="https://webtend.site/html/omnivus/service-details.html">{{ $whyChoose->title }}</a></h3>
                            <p>{{ $whyChoose->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Why Choose Section End ======-->

    <!--====== Technology Section Start ======-->
    <section class="service-section-two section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="title">Technologies we work with</h2>
            </div>
            <div class="row service-items justify-content-center">
                <div class="navcontainer">
                    <ul>
                        @foreach($categories as $category) 
                            <li><a id="tab{{ $category->id }}" class="tabLink" href="javascript:void(0)" href-data="technologyCategory/{{ $category->id }}">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div id="preloader">
                    <img src="{{asset('images/loading.gif')}}" align="absmiddle"> Loading...
                </div>
                <div id="tabcontent" class="row">
                    
                </div>
            </div>
        </div>
    </section>
    <!--====== Technology Section End ======-->

    <!--====== Team Section Start ======-->
    <section class="team-area section-gap-top pb-90 overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="title-tag">Our Team Member</span>
                <h2 class="title">Meet Our Exclusive <br> Leadership</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row team-members team-slider">
                @foreach($teams as $team) 
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            @if($team->photo!='')
                                <img src="{{ Storage::disk()->url('teams/'.$team->photo) }}" height="312px" alt="Member-Photo">
                            @else
                                <div style="height:312px;border:1px solid grey;">DEFAULT IMAGE</div>
                            @endif
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="" tabindex="-1">{{ $team->name }}</a></h5>
                            <span class="position">{{ $team->designation }}</span>
                        </div>
                    </div>    
                @endforeach       
            </div>
        </div>
    </section>
    <!--====== Team Section Ends ======-->

    <!--====== Testimonials Section Start ======-->
    <section class="testimonials-section section-gap soft-blue-bg">
        <div class="container">
            <div class="section-title text-center mb-60">
                <span class="title-tag">Client Testimonials</span>
                <h2 class="title">What our clients say </h2>
            </div>
            <div class="testimonials-slider row">
                @foreach($testimonials as $testimonial)                    
                        <div class="testimonial-box color-1s">
                            <p>
                                {{ $testimonial->comment }}
                            </p>
                            <div class="author d-flex align-items-center">
                                <div class="photo">
                                    @if($testimonial->client_photo!='')
                                        <img src="{{ Storage::disk()->url('testimonials/'.$testimonial->client_photo) }}" alt="Image" height="80px" width="80px">
                                    @else
                                        <div style="height:80px;width:80px;border:1px solid grey;">DEFAULT IMAGE</div>
                                    @endif
                                </div>
                                <div class="desc">
                                    <h6>{{ $testimonial->client_name }}</h6>
                                    <span class="position">{{ $testimonial->client_company }}</span>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== Testimonials Section Ends ======-->
@endsection