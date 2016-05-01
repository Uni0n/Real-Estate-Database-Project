<?php 
class PropertiesController extends AppController{
	public $name = 'Properties';
	
	//Default Index Method
	public function index(){
		

		//Set Type Query Options
		$options = array(
			'order' => array('Type.name' => 'asc'),
		);
		//get types
		$types = $this->Property->Type->find('all', $options);
		
		//set types
		$this->set('types', $types);
		
		
		
		
			//set Property query options
		$options = array(
			'order' => array('Property.created' => 'desc'),
			'limit' => 8
		);
		
	
		
		//Get Property Info
		$properties = $this->Property->find('all', $options);
		
		//Set Title
		$this->set('title_for_layout', 'Real Estate | Welcome');
		
		$this->set('properties', $properties);
		
	}
	
	//Browse method
	public function browse(){
		
				//Init Conditions Array
		$conditions = array();
		
		//check keyword filter
		if($this->request->is('post')){
			if(!empty($this->request->data('keywords'))){
				$conditions[] = array('OR' => array(
					'Property.address_street LIKE' => "%" . $this->request->data('keywords') . "%",
					'Property.address_city LIKE' => "%" . $this->request->data('keywords') . "%",
					'Property.description LIKE' => "%" . $this->request->data('keywords') . "%"
				));	
			} 
			//state filter 
		if(!empty($this->request->data('city_select')) && $this->request->data('city_select') != 'Select City'){
			//Match State
			$conditions[] = array(
					'Property.address_city LIKE' => "%" . $this->request->data('city_select') . "%"
				);
		}
		if(!empty($this->request->data('type_select')) && $this->request->data('type_select') != 'Select Property Type'){
			//match property type
			$conditions[] = array(
				'Property.type_id LIKE' => "%" . $this->request->data('type_select') . "%" 
			);
		}
		} //end if post
	
		//Set Query Options
		$options = array(
			'order' => array('Property.created' => 'desc'),
			'conditions' => $conditions,
			'limit' => 8
		);
		
		$properties = $this->Property->find('all', $options);
		
		//Set Title
		$this->set('title_for_layout', 'Real Estate | Browse');
		
		$this->set('properties', $properties);
	}
	//View Single Property
	public function view($id){
		if(!$id){
			throw new NotFoundException(__('Property Not Found'));
		}
		
		$property = $this->Property->findById($id);
		
		if(!$property){
			throw new NotFoundException(__('Property Not Found'));
		}
		
		//Set Title
		$this->set('title_for_layout', $property['Property']['address_street']);
		
		$this->set('property', $property);
	}
	
	//Add Property

public function add(){
	//Get Property Types for select list
		$options = array(
			'order' => array('Type.name' => 'asc'),
		);
		//get types
		$types = $this->Property->Type->find('list', $options);
		
		//set types
		$this->set('types', $types);
		
	
	if($this->request->is('post')){
		//sql wrapper provided by CakePHP
		$this->Property->create();
		
		//Save Logged User ID
		$this->request->data['Property']['user_id'] = $this->Auth->user('id');
		
		if($this->Property->save($this->request->data)){
			$this->Session->setFlash(__('Your property has been listed'));
			return $this->redirect(array('action' => 'index'));
		}
		
		$this->Session->setFlash(__('Unable to add property'));
	}
	
	
} // end add function

//edit property
public function edit($id){
	//Get Property Types for select list
		$options = array(
			'order' => array('Type.name' => 'asc'),
		);
		//get types
		$types = $this->Property->Type->find('list', $options);
		
		//set types
		$this->set('types', $types);
		
		if(!$id){
			throw new NotFoundException(__('Property Not Found'));
		}
		
		$property = $this->Property->findById($id);
		
		if(!$property){
			throw new NotFoundException(__('Property Not Found'));
		}
	
	if($this->request->is(array('property', 'put'))){
		//sql wrapper provided by CakePHP
		$this->Property->id = $id;
		
		if($this->Property->save($this->request->data)){
			$this->Session->setFlash(__('Your property has been updated'));
			return $this->redirect(array('action' => 'index'));
		}
		
		$this->Session->setFlash(__('Unable to update property'));
	}
	
	if(!$this->request->data){
		$this->request->data = $property;
		
	}
} // end edit function
	//edit a property
	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}
		
		if($this->Property->delete($id)){
			$this->Session->setFlash(
					__('The property with id: %s has been deleted.', h($id))
				);
				return $this->redirect(array('action' => 'index'));
			
		}
	}
} //end class



?>