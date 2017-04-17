<?php

namespace App\Listeners;

use App\Events\WeatherApiCallEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WeatherApiCallListener
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
     * @param  WeatherApiCallEvent  $event
     * @return void
     */
    public function handle(WeatherApiCallEvent $event)
    {
        echo "<br> Weather API called.";
    }
}
