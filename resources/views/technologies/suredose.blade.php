@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="suredose">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="text-center">
                        <h1><img src="/img/suredose-logo.png" alt="Suredose" height="40"></h1>
                        <span><b style="color:#696969;">The Problem with Suspensions</b></span>
                        <p>Pediatric medicines in suspension format need to be shaken to ensure uniform drug distribution. A good suspension should (a) be easily redispersed from shaking, (b) remain suspended long enough to administer the dose, and (c) have the desired flow properties.</p>
                        <p>Some suspensions do not satisfy all of these properties, and are physically unstable. These can manifest in rapid settling and caking of drug particles that are difficult to redisperse. This leads to dose uniformity problems.</p>
                        <span><b style="color:#696969;">SureDose Technology</b></span>
                        <p>SureDose patented technology is the world’s only no-shake liquid suspension format that ensures no settling, no packing, and no caking of drug particles in suspension. SureDose combines 3 elements to achieve a stable suspension with excellent drug uniformity – liquid of the right density, polymer with an increased yield value, and micronized drug. SureDose ensures that each dose of medicine is correct and complete every time.(US patent: 7,300,670 B2; Philippines patent: 1-2002-080820).</p>
                        <span><b style="color:#696969;">SureDose in the Real World</b></span>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <img src="/img/tech/suredose.png" alt="Suredose" width="845" height="560">
                        </div>
                    </div>

                    <div class="col-md-12 text-center video">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe alt="Suredose" width="845" height="560" src="https://www.youtube.com/embed/6OvQVVfOHCA" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <p style="text-align: center; color:#696969; font-size: 18px;"><b>Products using the SureDose Technology</b></br>
                                • Rimaped (Rifampicin) Suspension
                        </p>
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
                        <img src="/img/logo-pedia1.png" alt="logo" height="125" style="padding: 25px;">
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

@section('scripts')
    <script>
        $('#technologies').addClass('active');
    </script>
@endsection





