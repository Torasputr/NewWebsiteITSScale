<?php

namespace App\Http\Controllers;

use App\Mail\SendToHR;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        try {
            $toEmailAddress = "torasangputra@gmail.com";
            $message = "Testing Attentiion Please";
            $response = Mail::to($toEmailAddress)->send(new SendToHR($message));
            dd($response);
        }
        catch (Exception $e) {
            Log::error("Unable to Send Email: " . $e->getMessage());
        }
    }
}
