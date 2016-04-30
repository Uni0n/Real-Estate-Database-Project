<h3><?php echo $property['Property']['address_street']; ?> (<?php echo $property['Property']['address_city'];?>, <?php echo $property['Property']['address_state'];?> <?php echo $property['Property']['address_zip']?>)</h3>
		<ul>
			<li><strong>Property Type: </strong><?php echo $property['Type']['name']?></li>
			<li><strong>Number of Bedrooms: </strong><?php echo $property['Property']['num_bedrooms'];?></li>
			<li><strong>Number of Bathrooms: </strong><?php echo $property['Property']['num_bathrooms'];?></li>
			<li><strong>Description: </strong><?php echo $property['Property']['description'];?></li>
			<br />
			<li><strong>Listing Price: </strong>$<?php echo $property['Property']['listing_price']?>/month</li>
			
			<li><strong>Agent Contact Info: </strong> <a href="<?php echo $property['Property']['contact_email']?>"><?php echo $property['Property']['contact_email']?></a></li>
		</ul>
<?php echo $this->Html->link('Edit Property', array('action' => 'edit', $property['Property']['id']))?>
<br />
<?php echo $this->Form->postLink('Delete Property', array('action' => 'delete', $property['Property']['id']), array('confirm' => 'Are you sure?')); ?>
<br /><br /><br />
<p><a href="<?php echo $this->webroot;?>">Back to Home</a></p>