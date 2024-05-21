<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendInformation;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function makeInformation()
    {
        $user = User::get();
        Mail::to($user)->send(new SendInformation('Reseをいつもご利用いただき、ありがとうございます'));
    }
}
