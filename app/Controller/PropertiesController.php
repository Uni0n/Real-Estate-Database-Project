<?php 
class PropertiesController extends AppController{
	public $name = 'Properties';
	
	//Default Index Method
	public function index(){
		
		$conditions = array();
		if($this->request->is('post')){
			if(!empty($this->request->data('keywords'))){
				$conditions[] = array(
					'Property.address_street LIKE' => "%" . $this->request->data('keywords') . "%",
					'Property.address_city LIKE' => "%" . $this->request->data('keywords') . "%",
					'Property.description LIKE' => "%" . $this->request->data('keywords') . "%"
				);	
			}
		}
		//Set Type Query Options
		$options = array(
			'order' => array('Type.name' => 'asc')
		);
		//get types
		$types = $this->Property->Type->find('all', $options);
		
		//set types
		$this->set('types', $types);
		//set query options
		$options = array(
			'order' => array('Property.id' => 'asc'),
		);
		
		//Get Property Info
		$properties = $this->Property->find('all', $options);
		
		$this->set('properties', $properties);
	}
	
	
}
?>