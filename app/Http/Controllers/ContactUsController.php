<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  Request  $request
     */
    public function sendEmail(Request $request)
    {
        Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptcha',
        ])->validate();

        $input = $request->all();

//        Mail::to('jotan@unilab.com.ph' , 'c_MHsu@unilab.com.ph')->send(new ContactUsAdmin($input));
        $emails = ['laiza.m@cloudwalkdigital.com' , 'jotan@unilab.com.ph' , 'c_MHsu@unilab.com.ph'];

        foreach( $emails as $email) {
            Mail::to($email)->send(new ContactUsAdmin($input));
}
    }
}