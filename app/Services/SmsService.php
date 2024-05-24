<?php

namespace App\Services;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;


class SmsService
{
    protected $twilio;

    public function __construct()
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_AUTH_TOKEN');

        if (!$sid || !$token) {
            Log::error('Twilio SID or AUTH TOKEN is missing.');
            throw new \Exception('Twilio credentials are not set.');
        }

        $this->twilio = new Client($sid, $token);
    }

    public function sendSms($to, $message)
    {
        try {
            $this->twilio->messages->create($to, [
                'from' => env('TWILIO_NUMBER'),
                'body' => $message
            ]);
            return true;
        } catch (\Exception $e) {
            Log::error('Error sending SMS to ' . $to . ': ' . $e->getMessage());

            return false;
        }
    }
}
