@extends('layouts.products')

@section('content')
    <!-- Main Content -->
    <div class="product_immunped">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="col-md-6">
                        <h1 class="text-center"><img class="fw" src="/img/product/immunped.png" alt="product_immunped"></h1>
                    </div>
                    <div class="col-md- bio">
                        <h1 style="color:#696969;">IMMUNPED<sup class="sup">®</sup></h1>
                        <p style="color:#696969; font-size: 18px; margin-top: 14px;">Immunped is the world’s only stable Vitamin C plus Zinc combination in a liquid format. It uses Pediatech’s <a href="/technologies/zincplus">ZincPlus</a> technology for ultimate stability. </p>
                    </div>
                    <div class="col-md-12" style="margin-top: 65px;">
                        <span><b style="color:#696969;">Vitamin C and Zinc Immunity Combination</b></span>
                        <p style="color:#696969; font-size: 18px;">The immune system effectively defends the body against attacks by “foreign” invaders. However, there are moments when the immune system weakens and fails to keep disease-causing microorganisms out. In light of this, the immune system can always use a boost.</p>
                        <p style="color:#696969; font-size: 18px;">Vitamin C and zinc is the ideal combination to enhance and balance innate immunity and adaptive immunity for optimal immune protection. Studies have shown that they significantly reduce the symptoms and duration of the common colds.</p>
                    </div>
                    <div class="col-md-12">
                        <span><b style="color:#696969;"><span><b style="color:#696969;">Dual immune defenses of Vitamin C and Zinc, watch the video below.</b></span></b></span>
                    </div>
                    <div class="col-md-12 tech_video" style="margin-top: 25px;">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="845" height="560" src="https://www.youtube.com/embed/xGQhhBLYS64" frameborder="0" allowfullscreen></iframe>
                        </div>
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






