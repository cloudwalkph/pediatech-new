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

        Mail::to('bianca.working@gmail.com')->send(new ContactUsAdmin($input));
    }
}