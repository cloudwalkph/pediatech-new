@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main1" class="kastair_eztab">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                        <div class="col-md-6">
                            <h1 class="text-center" style="margin-left: -50px;"><img src="/img/product/kastair_eztab.png" alt="product_kastair_eztab"></h1>
                        </div>
                        <div class="col-md-6" style="margin-top: 120px;">
                            <h1 style="color:#696969;">KASTAIR EZTAB<sup class="sup">®</sup></h1>
                            <p style="color:#696969; font-size: 18px; margin-top: 14px;">Kastair <a href="/technologies/eztab">EZTab</a> is a montelukast tablet that readily disintegrates in the child’s mouth without the need for water in just a few seconds. It is the safer alternative to conventional tablets because it removes the risk for choking. It can also be easily taken anytime, anywhere for your on-the-go child.</p>
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
                        <img src="/img/footer_new_logo.png" alt="logo" height="125">
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






