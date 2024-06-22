<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Secret;
use Illuminate\Support\Facades\Log;
use App\Mail\SecretLinkMail;

class SecretLinkJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;
    protected $link;

    /**
     * Create a new job instance.
     */
       public function __construct($email, $link)
    {
        $this->email = $email;
        $this->link = $link;

    }
    /**
     * Execute the job.
     */
    public function handle()
    {



    Mail::to($this->email)->send(new SecretLinkMail($this->link));

    }
}
