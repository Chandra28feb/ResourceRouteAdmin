<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TradeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $notificationData;

    public function __construct($notificationData)
    {
        $this->notificationData = $notificationData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.trade.trade_message')->with('notificationData',$this->notificationData);
    }
}
