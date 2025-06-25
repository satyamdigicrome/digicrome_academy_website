<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\CareerApplication;

class CareerApplicationMail extends Mailable
{
    public $application;
    public $resumeFile;

    public function __construct($application, $resumeFile = null)
    {
        $this->application = $application;
        $this->resumeFile = $resumeFile;
    }

    public function build()
    {
        $email = $this->subject('New Career Application')->view('emails.career_application');

        if ($this->resumeFile) {
            $email->attach($this->resumeFile->getRealPath(), [
                'as' => $this->resumeFile->getClientOriginalName(),
                'mime' => $this->resumeFile->getMimeType(),
            ]);
        }

        return $email;
    }
}


