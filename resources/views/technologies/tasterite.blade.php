@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="tasterite">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 tech-content">
                    <div class="">
                        <h1 class="text-center"><img src="/img/tasterite-logo.png" alt="Suredose" height="40"></h1>
                        <span><b style="color:#696969;">The Problem of Bad Taste</b></span>
                        <p style=" color:#696969; font-size: 18px;">Pediatric medications are most commonly formulated in liquid preparations such as syrups and suspensions. Liquid medicines are ideal for children because dose can be adjusted according to the weight of the child. Liquid medicines are also easier to drink for kids who may have trouble swallowing tablets or capsules. However, liquid medicines often taste bad.</p>
                        <p style="color:#696969; font-size: 18px;">Bad taste is a big reason why children resist taking medicines, leading to incomplete or worse, missed doses. 73% of US parents (1998 US survey, among 500 parents), 77% of Philippine mothers (2002 Philippine survey, among 110 mothers), and 9/10 doctors (American Academy of Pediatric Periodic survey #44, Jan-May 2000, among 803 pediatricians) say that bad taste is a major cause of poor compliance.</p>
                        <span><b style="color:#696969;">TasteRite Technology</b></span>
                        <p style="color:#696969; font-size: 18px;">TasteRite is the world’s only non-flavor based pediatric taste-masking patented technology. It is a unique taste-masking system that can be applied to various liquid medicine formats in order to significantly reduce the bitterness of medicine. Thus, making the lives of children and parents easier.</p>
                        <p style="color:#696969; font-size: 18px;">TasteRite utilizes a polymer system that prevents the interaction of the bad-tasting drug particles and the taste receptors on the tongue, resulting in a better tasting liquid medicine. This polymer system rapidly releases the drug in the stomach, allowing the drug to rapidly dissolve for easy absorption (US patent: US 7,107,572 B2).</p>
                        <span><b style="color:#696969;">TasteRite in the Real World</b></span>
                        <span><b style="color:#696969;">Taste Test</b></span>
                        <p style="color:#696969; font-size: 18px;">We conducted several taste tests to show the superiority of medications that use TasteRite technologoy. In these trials, paracetamol was the active ingredient and subjects were asked to taste and compare TasteRite paracetamol and regular paracetamol.</p>

                        <p style="color:#696969; font-size: 18px;">
                            • 95% of children liked the taste of TasteRite paracetamol.</br>
                            • 93% of parents will use TasteRite paracetamol again.</br>
                            • 87% of parents did not force their child to take the succeeding doses of TasteRite paracetamol.
                        </p>

                        <span><b style="color:#696969;">Taste tests were also conducted on parents and pediatricians, and the results are as follows:</b></span>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <img src="/img/tech/taste-rite.png" alt="Testerite" width="845" height="560">
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="text-center iframe embed-responsive embed-responsive-16by9">
                            <img src="/img/tech/taste-rite2.png" alt="Testerite" width="845" height="560">
                        </div>
                        <p style="color:#696969; font-size: 18px;"><b>Products using the TasteRite Technology</b></br>
                            • Biogesic (Paracetamol) TasteRite</br>
                            • Solmux (Carbocisteine) TasteRite</br>
                            • Dolan (Ibuprofen) TasteRite</br>
                            • Asmalin (Salbutamol) TasteRite</br>
                            • Allerkid (Cetirizine) TasteRite</br>
                            • Alnix Plus (Cetrizine + Phenylephrine) TasteRite</br>
                            • Nutrilin TasteRite</br>
                            • Growee TasteRite
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






