<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Http\Controllers\WeatherController;

class WeatherApiCallEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $api_called;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(WeatherController $weather)
    {
        $this->api_called=$weather;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
