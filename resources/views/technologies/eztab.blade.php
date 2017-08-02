@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="eztab">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="">
                        <h1 class="text-center"><img src="/img/eztab-logo.png" alt="EZTab" height="40"></h1>
                        <span><b style="color:#696969;" >Difficulty of taking medicines away from home</b></span>
                        <p style="color:#696969; font-size: 18px;">Many school-aged young children have to take medicines away from home. These medicines can include maintenance medication for conditions such as asthma, and seasonal allergies. Currently available formats pose various challenges for young children. Liquid medicines can be messy, and difficult to prepare; while, tablets can be hard to swallow, and can pose a choking hazard.</p>
                        <span><b style="color:#696969;">EZTab Technology</b></span>
                        <p style="color:#696969; font-size: 18px;">EZTab technology makes medicines easy for young children to take away from home. EZTab technology powers tablets that readily disperse in a child’s mouth without the need for water in just a few seconds. The quick dissolving tablets provide immediate release of the active ingredients for absorption. No mess and no risk of choking with EZTab. Easy and safe anywhere.</p>
                    </div>

                    <div class="col-md-12">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="845" height="560" src="https://www.youtube.com/embed/rya4FVh_G9o" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style="color:#696969; font-size: 18px;"><b>EZTab in the Real World</b></br>
                            Products using the EZTab Technology</br>
                            • Kastair EZTab (Motelukast)
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






