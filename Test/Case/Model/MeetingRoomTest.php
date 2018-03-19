<?php
App::uses('MeetingRoom', 'Model');

/**
 * MeetingRoom Test Case
 */
class MeetingRoomTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meeting_room',
		'app.meeting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingRoom = ClassRegistry::init('MeetingRoom');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingRoom);

		parent::tearDown();
	}

}
