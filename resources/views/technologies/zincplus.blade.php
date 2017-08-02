@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="zincplus">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="">
                        <h1 class="text-center"><img src="/img/zinc-plus-logo.png" alt="Zincplus" height="40"></h1>
                        <span><b style="color:#696969;">Vitamin C and Zinc Immunity Combination</b></span>
                        <p style="color:#696969; font-size: 18px;">The immune system effectively defends the body against attacks by “foreign” invaders. However, there are moments when the immune system weakens and fails to keep disease-causing microorganisms out. In light of this, the immune system can always use a boost.</p>
                        <p style="color:#696969; font-size: 18px;">Vitamin C and zinc is the ideal combination to enhance and balance innate immunity and adaptive immunity for optimal immune protection. Studies have shown that they significantly reduce the symptoms of the common cold.</p>
                        <span><b style="color:#696969;">Dual immune defenses of vitamin C and zinc, watch the video below.</b></span>
                        <div class="row">
                            <div class="col-md-12 text-center video">
                                <div class="iframe embed-responsive embed-responsive-16by9">
                                    <iframe width="845" height="560" src="https://www.youtube.com/embed/xGQhhBLYS64" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <p style="color:#696969; font-size: 18px;">The Problem with Combining Vitamin C and Zinc There are a lot of challenges in combining vitamin C and zinc in pediatric liquid medications such as syrup and drops. Stability of the formulation is the biggest issue. Vitamin C degrades rapidly in the presence of divalent metal ions such as zinc. In one experiment, zinc doubled the rate of vitamin C degradation (Fig. 1). Further, zinc also gives the liquid medication an astringent, metallic and unpleasant taste.</p>
                        <span><b style="color:#696969;">Fig. 1. Assay of Vitamin C with and without Zinc in a liquid format </b></span>
                        <div class="col-md-12 text-center">
                            <div class="iframe embed-responsive embed-responsive-16by9">
                                <img src="/img/tech/zinc-plus-2p3.png" alt="Suredose" width="845" height="560">
                            </div>
                        </div>
                        <span><b style="color:#696969;">ZincPlus Technology</b></span>
                        <p style="color:#696969; font-size: 18px;">ZincPlus is a patented technology that powers world’s only stable formulation of Vitamin C and Zinc in liquid format. It uses unique polymer strands that prevent the degradation of vitamin C (Fig. 2). It also reduces the metallic taste and astringency of zinc (Fig. 3). Watch the video below for more on PediaTech’s ZincPlus technology.</p>

                        <div class="col-md-12 ">
                            <span><b style="color:#696969;">Fig. 2. Assay of Vitamin C</b></span>
                            <div class="text-center iframe embed-responsive embed-responsive-16by9">
                                <img src="/img/tech/zinc-plus-2p2.png" alt="Suredose" width="845" height="560">
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <span><b style="color:#696969;">Fig. 3. Astringency Test</b></span>
                            <div class="text-center iframe embed-responsive embed-responsive-16by9">
                                <img src="/img/tech/zinc-plus3.png" alt="Suredose" width="845" height="560">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 video">
                        <div class="text-center iframe embed-responsive embed-responsive-16by9">
                            <iframe width="845" height="560" src="https://www.youtube.com/embed/LEx45L0un8g" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style=" color:#696969; font-size: 18px;"><b>ZincPlus in the Real World</b></br>
                            Products using the ZincPlus Technology</br>
                            • Immunped syrup</br>
                            • Ceelin Plus syrup and drops</br>
                            • Ceelin Plus chewables
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






