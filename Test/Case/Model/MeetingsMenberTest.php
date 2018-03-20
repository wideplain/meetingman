<?php
App::uses('MeetingsMenber', 'Model');

/**
 * MeetingsMenber Test Case
 */
class MeetingsMenberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meetings_menber',
		'app.meeting',
		'app.meeting_room',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingsMenber = ClassRegistry::init('MeetingsMenber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingsMenber);

		parent::tearDown();
	}

}
