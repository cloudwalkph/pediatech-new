@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header banner-image" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading mobile">
                        <h1 class="tech-font ">PEDIATECH<sup>®</sup></h1>
                        <span class="subheading mobile1">INNOVATIVE SOLUTIONS IN CHILDCARE</span> <br>
                        <span class="subheading">PediaTech aims to make pediatric medicines better.</span> <br>
                        {{--<a type="button" class="btn btn-primary btn-lg lmorebtn" href="/about-us">LEARN MORE</a>--}}
                        <a class="btn btn-transparent" href="/about-us">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{--<div class="intro">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6" style="padding: 46px;">--}}
    {{--<div class="col-md">--}}
    {{--<h1 class="banner1_content"><b>WHAT DO WE DO?</b></h1>--}}
    {{--</div>--}}

    {{--<div class="col-md content">--}}
    {{--<label style="color:#8d8b8b; font-size: 20px;"><b>Address Children’s Needs</b></label>--}}
    {{--<h4 style="color:#8d8b8b;font-size:3vh;line-height: 8vh;" class="AVENIR.TTC;"><b>Address Children’s Needs</b></h4>--}}
    {{--<p style="color:#aeaeae; margin-top: 5px;">Our formulations aim to address gaps in pediatric medications to improve children’s compliance and ease of administration.</p>--}}

    {{--<label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Improve products</b></label>--}}
    {{--<p style="color:#aeaeae; margin-top: 5px;">Using various technologies that we’ve developed, our products improve on existing formulations in order to cater to children’s specific needs such as taste and simpler dosing formats.</p>--}}

    {{--<label style="color:#8d8b8b; font-size: 20px; margin-top: 10px;"><b>Easier for Everyone</b></label>--}}
    {{--<p style="color:#aeaeae; margin-top: 5px;">Our products aim to make the lives of children, parents and healthcare providers easier.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<img class="img-responsive banner_logo1" src="/img/kid.png">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <!-- Main Content -->
    <div id="main">
        <div class="container">
            <div class="col">
                <h6 class="slider_title1">Pediatech is a research and development organization dedicated to the advancement of pediatric medicines.</h6>
            </div>

            <div class="col-md-12 hidden-sm hidden-xs">
                <div class="wrap">
                    <div id="showcase" class="noselect">
                        @foreach( $arraySlides as $arraySlide )
                            <div class="card">
                                <img src="/img/{{ $arraySlide['img-src'] }}" class="img-responsive">
                                <h4 class="tech-font">{{ $arraySlide['img-title'] }}</h4>
                                <p>
                                    {{ $arraySlide['img-description'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row align-center">
                @foreach( $arraySlides as $arraySlide )
                <div class="col-sm-4 hidden-md hidden-lg card col-slides-mt" style="width: 100%;">
                    <img src="/img/{{ $arraySlide['img-src'] }}" class="img-responsive img-rowed">
                    <h4 class="tech-font">{{ $arraySlide['img-title'] }}</h4>
                    <p>
                        {{ $arraySlide['img-description'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection