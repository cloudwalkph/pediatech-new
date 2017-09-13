@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="eztab">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="">
                        <h1 class="text-center tech_logo"><img src="/img/eztab-logo.png" alt="EZTab" height="40"></h1>
                        <div class="row" style="margin-top: 40px;">
                            <span><b style="color:#696969;" >Difficulty of taking medicines away from home</b></span>
                            <p style="color:#696969; font-size: 18px; margin-top: -10px;">Many school-aged young children have to take medicines away from home. These medicines can include maintenance medication for conditions such as asthma, and seasonal allergies. Currently available formats pose various challenges for young children. Liquid medicines can be messy, and difficult to prepare; while, tablets can be hard to swallow, and can pose a choking hazard.</p>
                        </div>
                        <div class="row">
                            <span><b style="color:#696969;">EZTab Technology</b></span>
                            <p style="color:#696969; font-size: 18px; margin-top: -10px;">EZTab technology makes medicines easy for young children to take away from home. EZTab technology powers tablets that readily disperse in a child’s mouth without the need for water in just a few seconds. The quick dissolving tablets provide immediate release of the active ingredients for absorption. No mess and no risk of choking with EZTab. Easy and safe anywhere.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 tech_video">
                            <div class="iframe embed-responsive embed-responsive-16by9">
                                <iframe width="845" height="560" src="https://www.youtube.com/embed/rya4FVh_G9o" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p style="color:#696969; font-size: 18px;"><b>EZTab in the Real World</b></p>
                            <p style="color:#696969; font-size: 18px;">Products using the EZTab Technology</br>
                            • Kastair EZTab (Motelukast)
                            </p>
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






