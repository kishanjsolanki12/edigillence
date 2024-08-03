<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>eDigillence</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <meta name="turbo-visit-control" content="reload">

        <!--====== Favicon Icon ======-->
        <!--<link rel="shortcut icon" href="" type="img/png">-->
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!--====== Slick Slider ======-->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <!--====== Magnific ======-->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <!--====== AaniTabs CSS ======-->
        <link rel="stylesheet" href="{{asset('css/anitabs.css')}}">
        <!--====== Font Awesome ======-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!--====== Main Css ======-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <!--====== Preloader Start ======-->
        <div id="preloader" style="display: none;">
            <div class="loader-cubes">
                <div class="loader-cube1 loader-cube"></div>
                <div class="loader-cube2 loader-cube"></div>
                <div class="loader-cube4 loader-cube"></div>
                <div class="loader-cube3 loader-cube"></div>
            </div>
        </div>
        <!--====== Preloader End ======-->
        <!--====== Header Part Start ======-->
        <header class="header-one sticky-header">
            <div class="header-navigation">
                    <div class="container-fluid d-flex align-items-center justify-content-between container-1470">
                    <div class="header-left">
                        <div class="site-logo">
                            <a href="{{route('home2')}}"><img src="{{asset('images/main-logo.png')}}" alt="eDigillence" width="100px"></a>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center justify-content-end">
                        <div class="site-nav-menu">
                            <ul class="primary-menu">
                                <li class="<?=!empty(request()->routeIs('home2'))?'current':''?>">
                                    <a href="{{route('home2')}}">Home</a>
                                </li>
                                <li class="<?=!empty(request()->routeIs('about'))?'current':''?>">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="<?=!empty(request()->routeIs('services'))?'current':''?>">
                                    <a href="{{route('services')}}">Services</a>
                                </li>
                                <li class="<?=!empty(request()->routeIs('terms'))?'current':''?>">
                                    <a href="{{route('terms')}}">Terms and Condition</a>
                                </li>
                                <li class="<?=!empty(request()->routeIs('contact'))?'current':''?>">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                            <a href="https://webtend.site/html/omnivus/#" class="nav-close"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="header-extra d-flex align-items-center">                            
                            <div class="search-widget">
                                <a href="https://webtend.site/html/omnivus/#" class="search-icon"><i class="fal fa-search"></i></a>
                                <div class="search-form">
                                    <form action="https://webtend.site/html/omnivus/#">
                                        <input type="search" placeholder="Type keywords &amp; hit enter">
                                    </form>

                                    <a href="https://webtend.site/html/omnivus/#" class="search-close"><i class="fal fa-times"></i></a>
                                </div>
                            </div>
                            <div class="offcanvas-widget d-lg-block d-none">
                                <div class="offcanvas-icon">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <div class="nav-toggler">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="navbar-btn">
                                <a href="https://webtend.site/html/omnivus/#">Free Consulting <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== Header Part End ======-->