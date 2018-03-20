<?php
App::uses('AppController', 'Controller');
/**
 * MeetingsMenbers Controller
 *
 * @property MeetingsMenber $MeetingsMenber
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class MeetingsMenbersController extends AppController {

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
		$this->MeetingsMenber->recursive = 0;
		$this->set('meetingsMenbers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeetingsMenber->exists($id)) {
			throw new NotFoundException(__('Invalid meetings menber'));
		}
		$options = array('conditions' => array('MeetingsMenber.' . $this->MeetingsMenber->primaryKey => $id));
		$this->set('meetingsMenber', $this->MeetingsMenber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingsMenber->create();
			if ($this->MeetingsMenber->save($this->request->data)) {
				$this->Flash->success(__('The meetings menber has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The meetings menber could not be saved. Please, try again.'));
			}
		}
		$meetings = $this->MeetingsMenber->Meeting->find('list');
		$members = $this->MeetingsMenber->Member->find('list');
		$this->set(compact('meetings', 'members'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MeetingsMenber->exists($id)) {
			throw new NotFoundException(__('Invalid meetings menber'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeetingsMenber->save($this->request->data)) {
				$this->Flash->success(__('The meetings menber has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The meetings menber could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeetingsMenber.' . $this->MeetingsMenber->primaryKey => $id));
			$this->request->data = $this->MeetingsMenber->find('first', $options);
		}
		$meetings = $this->MeetingsMenber->Meeting->find('list');
		$members = $this->MeetingsMenber->Member->find('list');
		$this->set(compact('meetings', 'members'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MeetingsMenber->id = $id;
		if (!$this->MeetingsMenber->exists()) {
			throw new NotFoundException(__('Invalid meetings menber'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MeetingsMenber->delete()) {
			$this->Flash->success(__('The meetings menber has been deleted.'));
		} else {
			$this->Flash->error(__('The meetings menber could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
