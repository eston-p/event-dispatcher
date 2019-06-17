<?php


namespace App\Listeners\User;

use App\Core\Events\Listener;
use App\Core\Events\Event;

class UpdateLastSignedInDate extends Listener
{       
        public function handle(Event $event)
        {
                echo 'Update record in database with ID of ' . $event->user->id;
        }
}   
