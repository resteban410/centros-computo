<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendEmail()
    {
     $details = [
         'title' => 'Correo Sistema Centros de Computo',
         'body' => 'Esta es una prueba de correo',
     ];
     Mail::to("resteban410@gmail.com")->send(new TestMail($details));
     return "Email Enviado";
      }
           
}
