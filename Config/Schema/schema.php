<?php
class AppSchema extends CakeSchema {

  //会議室
  public $meeting_rooms = array(
  'id' => array('type' => 'integer', 'key' => 'primary',
    'null' => false, 'default' => null),
  'name' => array('type' => 'string',
    'null' => false, 'default' => '', 'length' => 255),
  'indexes' => array(
    'PRIMARY' => array('column' => 'id', 'unique' => 1)),
  'tableParameters' => array()
  );

//会議
  public $meetings = array(
    'id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),
    'start_time' => array('type' => 'datetime', 'null' => false,
      'default' => null),
    'end_time' => array('type' => 'datetime', 'null' => false,
      'default' => null),
    'meeting_room_id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),
    'title' => array('type' => 'string',
      'null' => false, 'default' => '', 'length' => 255),
    'gidai' => array('type' => 'string',
      'null' => false, 'default' => '', 'length' => 1024),

    'indexes' => array(
    'PRIMARY' => array('column' => 'id', 'unique' => 1)),

  'tableParameters' => array()
  );

  // ユーザー
  public $members = array(
    'id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),
    'name' => array('type' => 'string',
      'null' => false, 'default' => '', 'length' => 255),
    'email' => array('type' => 'string', 'null' => false, 'default' => '', 'length' => 255),
    'delete_flg' => array('type' => 'boolean', 'null' => false, 'default' => false),

    'indexes' => array(
      'PRIMARY' => array('column' => 'id', 'unique' => 1)),

    'tableParameters' => array()
  );


  // 関連モデル
  public $meetings_menbers = array(
    'id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),
    'meeting_id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),
    'member_id' => array('type' => 'integer', 'key' => 'primary',
      'null' => false, 'default' => null),

    'indexes' => array(
      'PRIMARY' => array('column' => 'id', 'unique' => 1)),

    'tableParameters' => array()
  );


}
