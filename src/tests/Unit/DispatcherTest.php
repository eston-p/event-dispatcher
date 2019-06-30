<?php

namespace App\Tests\Unit;

use App\Core\Events\Dispatcher;
use App\Tests\Stubs\ListenerStub;
use App\Tests\UnitTest;

class DispatcherTest extends UnitTest
{
	/** @test **/
	public function itHoldsListenersInsideAnArray()
	{
		$dispatcher = new Dispatcher();
		$this->assertEmpty($dispatcher->getListeners());
		$this->assertIsArray($dispatcher->getListeners());

	}

	
	/** @test **/
	public function itCanAddListener()
	{
		$dispatcher = new Dispatcher();

		$dispatcher->addListener('UserSignedUp', new ListenerStub());

		$this->assertCount(1, $dispatcher->getListeners()['UserSignedUp']);
	}

	/** @test **/
	public function itCanGetEventListenersByEventName()
	{
		$dispatcher = new Dispatcher();

		$dispatcher->addListener('UserSignedUp', new Listenerstub());

		$this->assertCount(1, $dispatcher->getListenersByEvent('UserSignedUp'));
	}

	/** @test **/
	public function returnsEmptyArrayIfNoListenersAreSet()
	{
		$dispatcher = new Dispatcher();

		$this->assertCount(0, $dispatcher->getListenersByEvent('UserSignedUp'));
	}

	/** @test **/
	public function itCanCheckIfHasListenersRegisteredForEvent()
	{
		$dispatcher = new Dispatcher();

		$this->assertFalse($dispatcher->hasListeners('UserSignedUp'));
	}
}
