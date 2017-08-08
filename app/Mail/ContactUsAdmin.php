<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $contactUs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->contactUs = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@pediatech.info')
            ->view('email.contactusadmin')
            ->with([
                'user' => $this->contactUs,
            ]);
    }
}
