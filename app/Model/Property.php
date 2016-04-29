<?php
class Property extends AppModel{
	public $name = 'Property';
	public $belongsTo = array('Type');
}