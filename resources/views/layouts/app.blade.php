<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pediatech</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/clean-blog.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102978482-4', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/img/new_logo.png" alt="logo" height="130">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/about-us" id="aboutus">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="technologies" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technologies <span class="caret"></span></a>
                        <ul class="dropdown-menu text-center" data-hover="dropdown" >
                            <li class="nav2" data-menuanchor="lastPage"><a class="nav-link {{ request()->is('zincplus') ? 'activeMenus' : '' }}" href="/technologies/zincplus">ZincPlus</a></li>
                            <li class="nav2" data-menuanchor="3rdPage"><a class="nav-link {{ request()->is('tasterite') ? 'activeMenus' : '' }}" href="/technologies/tasterite">TasteRite</a></li>
                            <li class="nav2" data-menuanchor="secondPage"><a class="nav-link {{ request()->is('suredose') ? 'activeMenus' : '' }}" href="/technologies/suredose">SureDose</a></li>
                            <li class="nav2" data-menuanchor="firstPage"><a class="nav-link {{ request()->fullUrl() == Request::root().'/technologies/eztab' ? 'activeMenus' : '' }}" href="/technologies/eztab">EZTab</a></li>
                            {{--<li class="nav2" data-menuanchor="4thpage"><a class="nav-link {{ request()->is('toothfriendly') ? 'activeMenus' : '' }}" href="/technologies/toothfriendly">ToothFriendly</a></li>--}}

                        </ul>
                    </li>
                    <li>
                        <a href="/products" id="products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Featured Products<span class="caret"></span></a>
                        <ul class="dropdown-menu text-center" data-hover="dropdown" >
                            <li class="nav2" data-menuanchor="firstPage"><a class="nav-link {{ request()->fullUrl() == Request::root().'/products/immunped' ? 'activeMenus' : '' }}" href="/products/immunped">Immunped</a></li>
                            <li class="nav2" data-menuanchor="3rdPage"><a class="nav-link {{ request()->is('biogesic') ? 'activeMenus' : '' }}" href="/products/biogesic">Biogesic</a></li>
                            <li class="nav2" data-menuanchor="4thpage"><a class="nav-link {{ request()->is('rimaped') ? 'activeMenus' : '' }}" href="/products/rimaped">Rimaped</a></li>
                            <li class="nav2" data-menuanchor="secondPage"><a class="nav-link {{ request()->is('kastair_eztab') ? 'activeMenus' : '' }}" href="/products/kastair_eztab">Kastair EZTab</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contact-us" id="contactus">Contacts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @yield('content')

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

    <!-- jQuery -->
    <script src="/assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>
    <script src="/js/clean-blog.min.js"></script>
    <script src="/js/3dcarousel.js"></script>

    <script>
        $(function() {
        var showcase = $("#showcase")
        showcase.Cloud9Carousel( {
            yOrigin: 42,
            yRadius: 40,
            itemClass: "card",
            buttonLeft: $(".nav.left"),
            buttonRight: $(".nav.right"),
            bringToFront: true,
            onLoaded: function() {
            showcase.css( 'visibility', 'visible' )
            showcase.css( 'display', 'none' )
            showcase.fadeIn( 1500 )
            }
        } )
        //
        // Simulate physical button click effect
        //
        $('.nav').click( function( e ) {
            var b = $(e.target).addClass( 'down' )
            setTimeout( function() { b.removeClass( 'down' ) }, 80 )
        } )
        $(document).keydown( function( e ) {
            //
            // More codes: http://www.javascripter.net/faq/keycodes.htm
            //
            switch( e.keyCode ) {
            /* left arrow */
            case 37:
                $('.nav.left').click()
                break
            /* right arrow */
            case 39:
                $('.nav.right').click()
            }
        } )
        })
    </script>

    @yield('scripts')
</body>

</html>
