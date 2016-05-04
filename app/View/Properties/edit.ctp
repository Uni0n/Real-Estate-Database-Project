<?php //Using CakePHP form helper 
echo $this->Form->create('Property'); ?>
<fieldset>
	<legend><?php echo __('Add Property'); ?></legend>
	<?php 
		echo $this->Form->input('address_street');
		echo $this->Form->input('address_city' );
		echo $this->Form->input('address_zip');
		echo $this->Form->input('type_id', array(
			'type' => 'select',
			'options' => $types,
			'empty' => 'Select Category'
		));
		echo $this->Form->input('num_bathrooms');
		echo $this->Form->input('num_bedrooms');
		echo $this->Form->input('square_feet');
		echo $this->Form->input('num_stories');
		echo $this->Form->input('last_reno_date');
		echo $this->Form->input('next_open_house_date');
		echo $this->Form->input('description'); // text field
		echo $this->Form->input('listing_price');
		echo $this->Form->input('contact_email'); // text field
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->end('Update Property'); //submit button
	?>

</fieldset>