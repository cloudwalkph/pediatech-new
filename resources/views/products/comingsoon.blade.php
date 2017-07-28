@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/liverprime2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h1>Coming Soon</h1>
                        <span class="site-subheader">HEPATOPROTECTANT</span> <br><br>
                        <span class="about-subheading">
                            LiverPrime contains Siliphos, a combination<br>
                            of Silibinin (aka Silybin) and natural soy phospholipids<br>
                            (phosphatidylcholine) 
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
                            <img src="/img/liverpro.png" alt="" class="img-responsive">
                        </div>
                        <h3 class="title text-uppercase text-center" style="color: #2c744c;">
                            WHAT IS LIVERPRIME? 
                            <span class="title-border" style="border: 2px solid #2c744c;"></span>
                        </h3>
                        <p style="text-align: center; ">LiverPrime is a hepatoprotectant containing Siliphos, a combination<br>
                            of Silybin and phosphatidylcholine (natural soy phospholipids), making<br>
                            it 3 times better absorbed than silymarin alone. Further, Silybin has<br>
                            anti-inflammatory, anti-fibrotic, and anti-oxidant properties. It also<br>
                            contains Vitamin B complex, Vitamin E and Zinc.</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="icon-container text-center">
                            <img src="/img/liverprime-capsul.png" alt="" class="img-responsive">
                        </div>
                        <h3 class="title text-uppercase text-center" style="color: #5b8090;">
                            WHY SHOULD YOU CHOOSE IT? 
                            <span class="title-border" style="border: 2px solid #5b8090;"></span>
                        </h3>
                        <p class="text-center"><a href="/img/liverprime-feat.png">
                                <img class="liverpro-img img-responsive" src="/img/liverprime-feat.png" alt="liverprime-feat" width="411" height="427">
                            </a>
                        </p>
                        <p style=" text-align:center;">
                            LiverPrime is a hepatoprotectant that helps maintain liver health by normalizing 
                            liver enzymes. It is an adjunct in the management of a variety of liver disorders 
                            including acute and chronic hepatitis, liver cirrhosis, biliary stasis, liver 
                            damaged by toxins and fatty liver.</p>
                        <p style=" text-align:center;">
                            LiverPrime uses <a href="/technologies/">phytosome technology</a> 
                            in Siliphos, a combination of Silybin and natural soy phospholipids, instead of 
                            silybin alone. This allows for 3 times better absorption of the active ingredients for better results.</p>
                        <p style=" text-align:center;">
                            Orally, take 1 to 3 capsules daily or as prescribed by a physician.</p>
                        <p>&nbsp;</p>
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XOQxAWtZdP0" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                        <p style="text-align: center;">Warning:<br>
                            May cause an allergic reaction to patients who are sensitive to any<br>
                            component of LiverPrime. Physicians are encouraged to monitor drug<br>
                            intake for the first three weeks, and watch out for possible allergic<br>
                            reactions to the drug.</p>
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
                <li class="item active col-xs-6 col-sm-6 text-center">
                    <div class="item-triangle"></div>
                    <a href="/products/juvenaid/">
                        <div class="item-container">
                            <h3 class="text-uppercase item-title text-uppercase">Juvenaid</h3>
                            <p class="item-tagline">HEPATOPROTECTANT</p>
                        </div>
                    </a>
                    <div class="item-color">
                    </div>
                </li>
                <li class="item col-xs-6 col-sm-6 text-center">
                    <div class="item-triangle"></div>
                    <a href="/products/comingsoon/">
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