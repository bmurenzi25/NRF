<?php

namespace App\Http\Livewire;

use App\Mail\contactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function sendMail()
    {
        Mail::to('bmurenzi25@gmail.com')->send(new contactFormMail([$this->name,$this->email,$this->subject,$this->message]));
        // dd("nahageze sha");
    }
    public function render()
    {
        return view('livewire.contact-us');
    }
}
