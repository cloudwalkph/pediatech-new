@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main1" class="product_rimaped">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                        <div class="col-md-6">
                            <h1 class="text-center"><img src="/img/product/rimaped.png" alt="product_rimaped"></h1>
                        </div>
                        <div class=" col-md-6" style="margin-top: 120px;">
                            <h1 style="color:#696969;">RIMAPED<sup class="sup">®</sup></h1>
                            <p style="color:#696969; font-size: 18px; margin-top: 14px;">Rimaped is a rifampicin suspension used for the treatment of tuberculosis in conjunction with at least one other antituberculosis drug. As treatment of tuberculosis is critical, Rimaped utilizes Pediatech’s proprietary <a href="/technologies/suredose">SureDose</a> technology to ensure that every dose contains the right amount of medicine. This guarantees that the treatment will work and reduces the risk of mutation of the infection due to incomplete or inappropriate treatment.</p>
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






