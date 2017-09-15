@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="suredose">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="">
                <div class="col-lg-12 col-sm-12">
                    <div class="">
                        <h1 class="text-center tech_logo" style="margin-top: -35px;"><img src="/img/suredose-logo.png" alt="Suredose" height="40"></h1>
                        <div class="row" style="margin-top: 40px;">
                            <span><b style="color:#696969;">The Problem with Suspensions</b></span>
                            <p style="color:#696969; font-size: 18px;">Pediatric medicines in suspension format need to be shaken to ensure uniform drug distribution. A good suspension should (a) be easily redispersed from shaking, (b) remain suspended long enough to administer the dose, and (c) have the desired flow properties.</p>
                            <p style="color:#696969; font-size: 18px;">Some suspensions do not satisfy all of these properties, and are physically unstable. These can manifest in rapid settling and caking of drug particles that are difficult to redisperse. This leads to dose uniformity problems.</p>
                        </div>
                        <div class="row" style="margin-top: 0px;">
                            <span><b style="color:#696969;">SureDose Technology</b></span>
                            <p style="color:#696969; font-size: 18px;">SureDose patented technology is the world’s only no-shake liquid suspension format that ensures no settling, no packing, and no caking of drug particles in suspension. SureDose combines 3 elements to achieve a stable suspension with excellent drug uniformity – liquid of the right density, polymer with an increased yield value, and micronized drug. SureDose ensures that each dose of medicine is correct and complete every time (US patent: 7,300,670 B2; Philippines patent: 1-2002-080820).</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12 tech_video">
                                <div class="iframe embed-responsive embed-responsive-16by9">
                                    {{--<iframe  width="1000" height="694" src="https://www.youtube.com/embed/6OvQVVfOHCA" frameborder="0" allowfullscreen></iframe>--}}
                                    <iframe src="https://www.youtube.com/embed/6OvQVVfOHCA" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        {{--width="845" height="560"--}}
                        <div class="row">
                            <span><b style="color:#696969;">SureDose in the Real World</b></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{--<img src="/img/tech/suredose.png" alt="Suredose" width="1015" height="694" style="margin-left: 40px;">--}}
                            <img class="imgsize" src="/img/tech/suredose.png" alt="Suredose">
                        </div>
                    </div>


                    <div class="row">
                        {{--<div class="col-md-12 video">--}}

                        <p style="color:#696969; font-size: 18px;"><b>Products using the SureDose Technology</b></p>
                        <p style="color:#696969; font-size: 18px;">• Rimaped (Rifampicin) Suspension</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#technologies').addClass('active');
    </script>
@endsection






