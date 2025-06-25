<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\CareerApplication;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(CareerApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('New Career Application: ' . $this->application->name)
                    ->view('emails.career-application');
    }
}

