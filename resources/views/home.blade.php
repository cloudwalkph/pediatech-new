@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/final.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h1 class="tech-font">PEDIATECH<sup>TM</sup></h1>
                        <span class="subheading">INNOVATIVE SOLUTIONS IN CHILDCARE</span> <br>
                        <span class="subheading">PediaTech aims to make pediatric medicines better.</span> <br>
                        <button class="btn btn-transparent">Learn More</button>
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
                <h1 class="slider_title">THE LATEST ON MEDICINE TECHNOLOGY</h1>
            </div>

            <div class="col-md-12">
                <div class="wrap">
                    <div id="showcase" class="noselect">
                        <div class="card">
                            <img src="/img/carousel2.jpg" class="img-responsive">
                            <h4 class="tech-font">Address Children’s Needs</h4>
                            <p>
                                Our formulations aim to address gaps in pediatric medications to improve children’s compliance and ease of administration.
                            </p>
                        </div>
                        <div class="card">
                            <img src="/img/carousel3.jpg" class="img-responsive">
                            <h4 class="tech-font">Improve products</h4>
                            <p>
                                Using various technologies that we’ve developed, our products improve on existing formulations in order to cater to children’s specific needs such as taste and simpler dosing formats.
                            </p>
                        </div>
                        <div class="card">
                            <img src="/img/carousel1.jpg" class="img-responsive">
                            <h4 class="tech-font">Easier for Everyone</h4>
                            <p>
                                Our products aim to make the lives of children, parents and healthcare providers easier.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <footer>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="row">
                    <div class="col-md-4 img-footer">
                        <img src="img/logo-pedia1.png" alt="logo" height="125" style="padding: 25px;">
                    </div>
                    <div class="col-md-4">
                        <a href="http://www.cloudwalkdigital.com" target="_blank">
                            <p class="copyright">All Rights Reserved. Novex Science © 2017. Website by Cloudwalk Digital.</p>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <p class="novex">
                            Novex Science <br>
                            <a href="https://www.youtube.com/channel/UCmjc-WGwUjjmRAhFXtth0IA" target="_blank"><i class="fa fa-youtube youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
@endsection