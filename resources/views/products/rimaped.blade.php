@extends('layouts.products')

@section('content')
    <!-- Main Content -->
    <div class="product_rimaped">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="col-md-6">
                        <h1 class="text-center"><img class="fw" src="/img/product/rimaped.png" alt="product_rimaped"></h1>
                    </div>
                    <div class=" col-md-6" style="margin-top: 120px;">
                        <h1 style="color:#696969;">RIMAPED<sup class="sup">®</sup></h1>
                        <p style="color:#696969; font-size: 18px; margin-top: 14px;">Rimaped is a rifampicin suspension used for the treatment of tuberculosis in conjunction with at least one other antituberculosis drug. As treatment of tuberculosis is critical, Rimaped utilizes Pediatech’s proprietary <a href="/technologies/suredose">SureDose</a> technology to ensure that every dose contains the right amount of medicine. This guarantees that the treatment will work and reduces the risk of mutation of the infection due to incomplete or inappropriate treatment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#products').addClass('active');
    </script>
@endsection






