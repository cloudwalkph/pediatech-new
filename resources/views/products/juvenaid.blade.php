@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/JuvenAid-products.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h1 class="tech-font">JUVENAID<sup>TM</sup></h1>
                        <span class="site-subheader">WOUND HEALING AND MUSCLE ATROPHY</span><br>
                        <span class="about-subheading">
                            Specialize blend of amino acids for  faster wound healing and for addressing muscle atrophy.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="product-details">
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="icon-container text-center">
                            <img src="/img/juvebaid-icon.png" alt="" class="img-responsive">
                        </div>
                        <h3 class="title text-uppercase text-center tech-font" style="color: #cf252a;max-width: 550px;margin: auto;">
                            SPECIALIZED AMINO ACIDS CONTAINING ARGININE, GLUTAMINE, AND HMB
                            <span class="title-border" style="border: 2px solid #cf252a;"></span>
                        </h3>
                        <p style="text-align: center; ">JuvenAid™ is a unique blend of specialized amino acids containing arginine, glutamine and HMB formulated as a powdered drink.
                            JuvenAid’s specialized amino acid mixture is clinically-proven to promote wound healing in post-operative patients; and to address muscle atrophy in
                            hospitalized patients and in patients with chronic illnesses such as HIV and cancer.
                            Know more about how JuvenAid can promote wound healing and address muscle atrophy by watching the videos below.</p>
                        </div>
                        <p>&nbsp;</p>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/E4CdL3MSMEg" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p>&nbsp;</p>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HXJ_Pmo6IyQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="icon-container text-center">
                            <img src="/img/juvenaid2-icon.png" alt="" class="img-responsive">
                        </div>
                        <h3 class="title text-uppercase text-center tech-font" style="color: #cf252a;">
                            WHY IS JUVENAID UNIQUE?
                            <span class="title-border" style="border: 2px solid #cf252a;"></span>
                        </h3>

                        <div class="col-md-6" style="text-align:left;">
                            <p style="padding: 0px 77px;">
                                Take 2 sachets of JuvenAid™ every day.
                            </p>
                            <p style="padding: 0px 77px;">
                                Compared to similar products in the market, JuvenAid™ is superior in terms of:
                            </p>
                            <ol style="padding: 0px 77px;">
                                <li>Better taste for better compliance – It comes in various flavors which reduce taste fatigue and it is 97% preferred over the competitor.</li>
                                <li>Enhanced stability for tropical climates – It is formulated to withstand hot and humid conditions, while still giving patients 100% of it’s label claim.</li>
                                <li>Improved safety profile – It is not formulated with aspartame which contains phenylalanine, making it safe for patients with phenylketonuria.</li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <p class="text-center"><a href="/img/juvenaid-feat.png">
                                    <img class="juvenaid-img img-responsive" src="/img/juvenaid-feat.png" alt="juvenaid-feat" width="411" height="427">
                                </a>
                            </p>
                        </div>

                        <p>&nbsp;</p>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HXJ_Pmo6IyQ" frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="col-md-12">
                            <p style=" text-align:left;">
                                IMPORTANT NOTICE:<br>
                                1. Not to be used as a sole source of nutrition.<br>
                                2. Not intended for use in children unless otherwise recommended by a physician or healthcare professional.<br>
                                3. Not for parenteral use.<br>
                                4. Not recommended for use in septic patients and those who have kidney problems.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content -->
    <div id="main" class="about-us">
        <div class="grey-overlay"></div>
        <div class="separator-gradient"></div>
        <div class="caroufredsel_wrapper">
            <ul class="slide-products inline-block clearfix">
                <li class="item active col-xs-12 col-sm-12 text-center">
                    <div class="item-triangle"></div>
                    <a href="/products/juvenaid/">
                        <div class="item-container">
                            <h3 class="text-uppercase item-title text-uppercase">Juvenaid</h3>
                            <p class="item-tagline"></p>
                        </div>
                    </a>
                    <div class="item-color">
                    </div>
                </li>
            </ul>
        </div>



        <!-- Footer -->
        <footer>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="row">
                    <div class="col-md-4 img-footer">
                        <img src="/img/footer-logo.png" alt="logo" height="125" style="padding: 25px">
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
        $('#products').addClass('active');
    </script>
@endsection