@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div id="main" class="contact-us">
        <div class="grey-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="text-center">
                        <h1 class="text-green">SEND US A MESSAGE</h1>
                        <p>We want to hear from you.</p>
                    </div>
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                    <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <input type="text" class="token" name="_token" value="{{ csrf_token() }}" hidden>
                        <div class="row">
                            <div class="col-sm-12"><div id="success"></div></div>
                            <div class="col-md-6 col-xs-12">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <textarea rows="8" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="control-group">
                                    <div class="form-group col-xs-12 controls">
                                        {!! Recaptcha::render() !!}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group col-xs-12">
                                    <button type="submit" id="btn-submit" class="btn btn-block btn-success">Send your message</button>
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="row">
                    <div class="col-md-4 img-footer">
                        <img src="img/footer_new_logo.png" alt="logo" height="125">
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
        $('#contactus').addClass('active');
    </script>
@endsection