<?php

use App\Models\User;
use App\Core\Events\Dispatcher;


use App\Listeners\User\SendSignedInEmail;
use App\Listeners\User\UpdateLastSignedInDate;

use App\Events\User\UserSignedIn;

require_once 'vendor/autoload.php';


$user = new User;
$user->id = 1;
$user->email = 'eston@pillay.com';


$dispatcher = new Dispatcher();


$dispatcher->addListener('UserSignedIn', new SendSignedInEmail());
$dispatcher->addListener('UserSignedIn', new UpdateLastSignedInDate());


$dispatcher->dispatch(new UserSignedIn($user));
