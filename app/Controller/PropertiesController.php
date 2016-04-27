<?php 
class PropertiesController extends AppController{
	public $name = 'Properties';
	
	//Default Index Method
	public function index(){
		//set query options
		$options = array(
			'order' => array('Property.p_id' => 'asc'),
		);
		
		//Get Property Info
		$properties = $this->Property->find('all', $options);
		
		$this->set('properties', $properties);
	}
	
	
}
?>