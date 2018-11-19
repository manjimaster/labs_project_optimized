<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\eMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MailRequest;

class EmailController extends Controller
{
    public function send(MailRequest $request)
    {
        $mailContent = new eMail($request->name, $request->email, $request->subject, $request->msg);
        Mail::to('example@gmail.com')->send($mailContent);
        return back();
    }
}
