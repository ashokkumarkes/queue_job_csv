<?php

namespace App\Listeners;

use App\Events\someoneCheckedProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendProfileCheckedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  someoneCheckedProfile  $event
     * @return void
     */
    public function handle(someoneCheckedProfile $event)
    {
        //
    }
}
