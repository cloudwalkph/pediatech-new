@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/test_tube.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h1>PEDIATECH<sup>TM</sup></h1>
                        {{--<span class="site-subheader">SAFER AND MORE EFFECTIVE DRUGS</span> <br><br>--}}
                        <span class="about-subheading">PediaTech<sup>TM</sup> is a research and development organization dedicated to the advancement of pediatric healthcare by developing technologies and designing products specifically catering to children, and children’s medicine-taking habits. We aim to undertake common issues with children’s medicine from bad taste to difficult dosing instructions because the best medicines in the world would not work unless the medicines are taken by the kids at the prescribed dosage level at all times.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div id="main" class="about-us">
        <div class="grey-overlay"></div>
        <div class="separator-gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-science">
                    <h1>PRODUCTS</h1>
                    <p>
                        PediaTech<sup>TM</sup> products have been developed using several patented technologies that aim to improve on currently available pediatric medicines. Our technologies address various gaps in pediatric medicines including bad taste (through TasteRite technology), and proper dosing (through SureDose technology). These technologies not only address children’s medicine compliance and ease of administration, but also make the lives of parents and healthcare professionals easier.
                    </p>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <footer>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="row">
                    <div class="col-md-4 img-footer">
                        <img src="img/logo-pedia1.png" alt="logo" height="125">
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
        $('#aboutus').addClass('active');
    </script>
@endsection