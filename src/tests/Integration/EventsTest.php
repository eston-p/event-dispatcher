<?php

namespace App\Tests\Unit;

use App\Core\Events\Dispatcher;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\ListenerStub;
use App\Tests\UnitTest;

class EventsTest extends UnitTest
{
	/** @test **/
	public function itCanDispatchAnEvent()
	{
		$dispatcher = new Dispatcher();

		$event = new EventStub();

		$mockedListener = $this->createMock(ListenerStub::class);

		$mockedListener->expects($this->once())->method('handle')->with($event);

		$dispatcher->addListener('UserSignedUp', $mockedListener);
		$dispatcher->dispatch($event);
	}


	 /** @test **/
        public function itCanDispatchMultipleListeners()
        {
                $dispatcher = new Dispatcher();

                $event = new EventStub();

		$mockedListener = $this->createMock(ListenerStub::class);
		$anotherMockedListener = $this->createMock(ListenerStub::class);

		$mockedListener->expects($this->once())->method('handle')->with($event);
		$anotherMockedListener->expects($this->once())->method('handle')->with($event);


		$dispatcher->addListener('UserSignedUp', $mockedListener);
		$dispatcher->addListener('UserSignedUp', $anotherMockedListener);

                $dispatcher->dispatch($event);
        }

}
