<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
class SendTestimonial extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {

        return $this->from('me@dc.ca')
                    ->markdown('frontend.pages.thank_you')
                    ->with([
                        'company_name' => $request->company_name,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'message' => $request->message,
                    ]);
    }
}
