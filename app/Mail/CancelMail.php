<?php

namespace App\Mail;

use App\Models\Orders;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class CancelMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     * 
     * @return $this
     */
    public function build(Request $request, Orders $orders)
    {
        $order = Orders::where('id', $request->id)->get();
        return $this->subject('Cancel Order')
                    ->view('mail.CancelMail')->with('order', $order);
    }
}