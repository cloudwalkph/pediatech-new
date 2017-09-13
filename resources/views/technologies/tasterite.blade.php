@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="tasterite">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="col-lg-12 col-sm-12 tech-content">
                <h1 class="text-center tech_logo"><img src="/img/tasterite-logo.png" alt="Suredose" height="40"></h1>
                <div class="row" style="margin-top: 40px;">
                    <span><b style="color:#696969;">The Problem of Bad Taste</b></span>
                    <p style=" color:#696969; font-size: 18px; margin-top: -10px;">Pediatric medications are most commonly formulated in liquid preparations such as syrups and suspensions. Liquid medicines are ideal for children because dose can be adjusted according to the weight of the child. Liquid medicines are also easier to drink for kids who may have trouble swallowing tablets or capsules. However, liquid medicines often taste bad.</p>
                    <p style="color:#696969; font-size: 18px; margin-top: -10px;">Bad taste is a big reason why children resist taking medicines, leading to incomplete or worse, missed doses. 73% of US parents (1998 US survey, among 500 parents), 77% of Philippine mothers (2002 Philippine survey, among 110 mothers), and 9/10 doctors (American Academy of Pediatric Periodic survey #44, Jan-May 2000, among 803 pediatricians) say that bad taste is a major cause of poor compliance.</p>
                </div>
                <div class="row">
                    <span><b style="color:#696969;">TasteRite Technology</b></span>
                    <p style="color:#696969; font-size: 18px; margin-top: -10px;">TasteRite is the world’s only non-flavor based pediatric taste-masking patented technology. It is a unique taste-masking system that can be applied to various liquid medicine formats in order to significantly reduce the bitterness of medicine. Thus, making the lives of children and parents easier.</p>
                    <p style="color:#696969; font-size: 18px; margin-top: -10px;">TasteRite utilizes a polymer system that prevents the interaction of the bad-tasting drug particles and the taste receptors on the tongue, resulting in a better tasting liquid medicine. This polymer system rapidly releases the drug in the stomach, allowing the drug to rapidly dissolve for easy absorption (US patent: US 7,107,572 B2).</p>
                </div>
                <div class="row">
                    <div class="col-md-12 tech_video">
                        <div class="iframe embed-responsive embed-responsive-16by9">
                            <iframe width="845" height="560" src="https://www.youtube.com/embed/mtHaRQuDmko" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span><b style="color:#696969;">TasteRite in the Real World</b></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span><b style="color:#696969;">Taste Test</b></span>
                        <p style="color:#696969; font-size: 18px; margin-top: -10px;">We conducted several taste tests to show the superiority of medications that use TasteRite technologoy. In these trials, paracetamol was the active ingredient and subjects were asked to taste and compare TasteRite paracetamol and regular paracetamol.</p>

                        <p style="color:#696969; font-size: 18px;">
                            • 95% of children liked the taste of TasteRite paracetamol.</br>
                            • 93% of parents will use TasteRite paracetamol again.</br>
                            • 87% of parents did not force their child to take the succeeding doses of TasteRite paracetamol.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text">
                <div class="col-md-12 col-sm-12">
                    <span><b style="color:#696969;">Taste tests were also conducted on parents and pediatricians, and the results are as follows:</b></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    {{--<img src="/img/tech/taste-rite.png" alt="Testerite" width="1020" height="694" style="margin-left: 40px;">--}}
                    <img class="imgsize" src="/img/tech/taste-rite.png" alt="Testerite">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img class="imgsize" src="/img/tech/taste-rite2.png" alt="Testerite" style="">
                    <p style="color:#696969; font-size: 18px;"><b>Products using the TasteRite Technology</b></p>
                        <p style="color:#696969; font-size: 18px;">
                            •         Biogesic (Paracetamol) Syrup/Drops TasteRite</br>
                            •         Solmux (Carbocisteine) Syrup/Drops TasteRite</br>
                            •         Dolan (Ibuprofen) Suspension/ Drops TasteRite</br>
                            •         Asmalin (Salbutamol) Syrup TasteRite</br>
                            •         Asmalin Broncho (Salbutamol + Guaifenesin) Syrup TasteRite</br>
                            •         Allerkid (Cetirizine) Syrup/Drops TasteRite</br>
                            •         Allerzet (Levocetirizine) Syrup TasteRite</br>
                            •         Alnix Plus (Cetrizine + Phenylephrine) Syrup TasteRite</br>
                            •         Loraped (Loratadine + Phenylephrine) Syrup TasteRite</br>
                            •         Expel (Ambroxol) Syrup/ Drops TasteRite</br>
                            •         Nutrilin Syrup/Drops TasteRite</br>
                            •         Growee Syrup/Drops TasteRite</br>
                            •         Tiki-Tiki Star Syrup TasteRite</br>

                        </p>
                    </p>
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






