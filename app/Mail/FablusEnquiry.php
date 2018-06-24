<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class FablusEnquiry extends Mailable
{
    use Queueable, SerializesModels;
    public $request;
    public $site;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request, $site)
    {
        //
        $this->site = $site;
        $this->request = $request;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.fablus.enquiry');
    }
}
