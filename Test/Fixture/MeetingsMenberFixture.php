<?php
/**
 * MeetingsMenber Fixture
 */
class MeetingsMenberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'meeting_id' => array('type' => 'integer', 'null' => false),
		'member_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'meeting_id' => 1,
			'member_id' => 1
		),
	);

}
