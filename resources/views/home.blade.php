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

    <!-- Main Content -->
            <div class="">
                <div class="col-md-12">
                    <h6 class="slider_title1">Pediatech is a research and development organization dedicated to the advancement of pediatric medicines.</h6>
                </div>
            </div>
            <div class="row" style="margin:0;">
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
            </div>
            <div class="align-center">
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
@endsection