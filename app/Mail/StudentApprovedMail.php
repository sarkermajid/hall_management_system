<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $name;
    public $email;
    public $password;

    public function __construct($url, $name, $email, $password)
    {
        $this->url = $url;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Student Approved Successfully')->view('emails.student-approved-email')
            ->with([
                'url' => $this->url,
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);
    }
}
