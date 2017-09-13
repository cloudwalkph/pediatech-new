@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div id="main" class="tftech">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="">
                        <h1 class="text-center tech_logo"><img src="/img/tftech.png" alt="tftech" height="40"></h1>
                        <div class="row" style="margin-top: 40px;">
                            <span><b style="color:#696969;">Children’s Medicines, Dental Caries (Cavities), and Dental Erosion</b></span>
                            <p style="color:#696969; font-size: 18px; margin-top: -10px;">Pediatric medicines are usually in liquid formats, so they need to be palatable for children. A widely used strategy to enhance the palatability of children’s medicines is to add sugar and formulate in acidic pH. What is often overlooked is that sugar and acid in children’s medicines are just as harmful to the teeth as the sugar and acid in candies, soda, and fruit juices.</p>
                            <p style="color:#696969; font-size: 18px; margin-top: -10px;">Dental caries and dental erosion can lead to various complications from difficulty eating to disability in extreme cases. Therefore, efforts to reduce their incidence are imperative. Reduction of teeth exposure to sugary and acidic food, beverage, and medicines is a crucial step to lessen dental caries and dental erosion.</p>
                        </div>
                        <div class="row">
                            <span><b style="color:#696969;">TFTech</b></span>
                            <p style="color:#696969; font-size: 18px; margin-top: -10px;">TFTech combines formulation strategies and a deep understanding of oral physiology in order to develop tooth friendly children’s medicines. Tooth friendly medicines are sugar-free, acid-free or acid mitigated. They are tested through pH telemetry or in vitro enamel dissolution test to demonstrate that they are non-cariogenic, and do not cause dental erosion. Tooth friendly medicines are good for a child’s health and oral health.</p>
                        </div>
                        <div class="row">
                            <span><b style="color:#696969; text-align: center;">TFTech in the Real World</b></span>
                            <p style=" color:#696969; font-size: 18px; margin-top: -10px;"><b>ToothFriendly Test Results</b></p>
                                <p style=" color:#696969; font-size: 18px; margin-top: -10px;">• Pending upon patent filing</br>
                                • Products using the ToothFriendly Technology</br>
                                • Paracetamol TF
                            </p>
                        </div>
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






