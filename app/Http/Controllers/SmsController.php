<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms(){
        $basic  = new \Vonage\Client\Credentials\Basic("d3b5a0e3", "DS9dMwxa1TMvUkjp");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("237697769392", 'DataBoard', 'New publication on your UY1 Databaord')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }

    public function view(){
        return view('sms');
    }
}
