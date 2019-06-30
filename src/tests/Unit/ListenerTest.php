<?php

namespace App\Test\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use App\Tests\UnitTest;
use TypeError;

class ListenTest extends UnitTest
{
	/** @test **/
	public function handleMethodThrowsErrorIfInvalidEventIsGiven()
	{
		$this->expectException(TypeError::class);
		$listener = new ListenerStub();

		$listener->handle('Handle new Event');
	}


	/** @test **/
	public function handleMethodAcceptsAnEvent()
	{
		$listener = new ListenerStub();
		$listener->handle(new EventStub);

		$this->addToAssertionCount(1);

	}
}

