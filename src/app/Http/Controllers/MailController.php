<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendInformation;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function makeInformation(Request $request)
    {
        $email = $request->email;
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'error' => 'Not found email'
            ], 400);
        }

        $mail = new SendInformation($user);
        Mail::to($user->email)->send($mail);

        return response()->json([
            'message' => 'Email sent successfully'
        ], 200);
    }
}
