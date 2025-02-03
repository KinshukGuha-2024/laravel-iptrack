<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;
use App\Mail\UserConfirmationMail;

use Illuminate\Http\Request;

class SendMail extends Controller
{
    public function sendMail(Request $request) {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
    
        Mail::to($details['email'])->send(new CustomMail($details));
        Mail::to($details['email'])->send(new UserConfirmationMail($details));

    
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
