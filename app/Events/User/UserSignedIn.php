<?php

namespace App\Events\User;

use App\Core\Events\Event;
use App\Models\User;

class UserSignedIn extends Event
{
	public $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
}
