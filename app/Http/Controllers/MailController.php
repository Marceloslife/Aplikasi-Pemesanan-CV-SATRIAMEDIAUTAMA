<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from CV SATRIA MEDIA UTAMA',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('amazonamarcelo@mhs.mdp.ac.id')->send(new DemoMail($mailData));
           
    }
    
}