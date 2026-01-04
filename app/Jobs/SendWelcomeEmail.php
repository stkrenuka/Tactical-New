<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private  User $user;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        //
        $this->user=$user;
    }

    /**
     * Execute the job.
     */
    // function t
    public function handle(): void
    {
        // function to check if user email is verified
                Log::info('finnaly', ['data'=>$this->user]);
                // Simulate sending email
                Log::info("Welcome email sent to: " . $this->user->email);

}
}