<?php
/**
 * Meeting Fixture
 */
class MeetingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'start_time' => array('type' => 'datetime', 'null' => false),
		'end_time' => array('type' => 'datetime', 'null' => false),
		'meeting_room_id' => array('type' => 'integer', 'null' => false),
		'title' => array('type' => 'string', 'null' => false),
		'gidai' => array('type' => 'string', 'null' => false, 'length' => 1024),
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
			'start_time' => '2018-03-19 23:10:27',
			'end_time' => '2018-03-19 23:10:27',
			'meeting_room_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'gidai' => 'Lorem ipsum dolor sit amet'
		),
	);

}
