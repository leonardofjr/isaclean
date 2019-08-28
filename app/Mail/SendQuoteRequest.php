<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuoteRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from('quote@isaclean.ca')
                    ->markdown('mail.quote')
                    ->with([
                        'company_name' => $request->company_name,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'street_address' => $request->street_address,
                        'city' => $request->city,
                        'postal_code' => $request->postal_code,
                        'province' => $request->province,
                        'facility_type' => $request->facility_type,
                        'frequency' => $request->frequency,
                        'message' => $request->message,
                    ]);
    }
}
