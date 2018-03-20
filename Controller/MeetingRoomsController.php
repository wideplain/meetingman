<?php
App::uses('AppController', 'Controller');
/**
 * MeetingRooms Controller
 *
 * @property MeetingRoom $MeetingRoom
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class MeetingRoomsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MeetingRoom->recursive = 0;
		$this->set('meetingRooms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		debug($this->request->params);
		if (!$this->MeetingRoom->exists($id)) {
			throw new NotFoundException(__('Invalid meeting room'));
		}
		$options = array('conditions' => array('MeetingRoom.' . $this->MeetingRoom->primaryKey => $id));
		$this->set('meetingRoom', $this->MeetingRoom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingRoom->create();
			if ($this->MeetingRoom->save($this->request->data)) {
				$this->Flash->success(__('The meeting room has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The meeting room could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MeetingRoom->exists($id)) {
			throw new NotFoundException(__('Invalid meeting room'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeetingRoom->save($this->request->data)) {
				$this->Flash->success(__('The meeting room has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The meeting room could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeetingRoom.' . $this->MeetingRoom->primaryKey => $id));
			$this->request->data = $this->MeetingRoom->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MeetingRoom->id = $id;
		if (!$this->MeetingRoom->exists()) {
			throw new NotFoundException(__('Invalid meeting room'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MeetingRoom->delete()) {
			$this->Flash->success(__('The meeting room has been deleted.'));
		} else {
			$this->Flash->error(__('The meeting room could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
