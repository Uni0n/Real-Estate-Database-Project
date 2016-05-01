<?php
class UsersController extends AppController{
	public $name = 'Users';
	//register user
	public function register(){
		if($this->request->is('post')){
			$this->User->create();
			
			//if user is saved, pass a message and redirect
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('You are now registered and may log in.'));
				return $this->redirect(array('controller' => 'properties', 'action' => 'index'));
			}
			//if user isn't saved, pass a message
			$this->Session->setFlash(
					__('There was a problem creating your account.')
			);
		}
	} //end function register
	
	//login user
	public function login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
	} //end function login
	
	//logout user, provided by auth component only have to specify redirect
	public function logout(){
		return $this->redirect($this->Auth->logout());
	}
}