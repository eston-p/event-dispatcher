<?php


namespace App\Listeners\User;

use App\Core\Events\Listener;
use App\Core\Events\Event;

class SendSignedInEmail extends Listener
{
	public function handle(Event $event)
	{
		echo 'Send signed in email to ' . $event->user->email;
	}
}
