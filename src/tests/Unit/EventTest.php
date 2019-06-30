<?php

namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use App\Tests\UnitTest;

class EventTest extends UnitTest
{
	/** @test **/
	public function canGetEventName()
	{
		$event = new EventStub;

		$this->assertEquals('UserSignedUp', $event->getName());
	}

	
	/** @test **/
	public function itDefaultsToEventNameOfTheClassName()
	{
		$event = new EventStubNoName();

		$this->assertEquals('EventStubNoName', $event->getName());
	}
}
