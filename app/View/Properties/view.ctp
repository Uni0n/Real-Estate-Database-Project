<h3><?php echo $property['Property']['address_street']; ?> (<?php echo $property['Property']['address_city'];?>, <?php echo $property['Property']['address_state'];?> <?php echo $property['Property']['address_zip']?>)</h3>

		<ul>
			<li><strong>Property Type: </strong><?php echo $property['Type']['name']?></li>
			<li><strong>Number of Bedrooms: </strong><?php echo $property['Property']['num_bedrooms'];?></li>
			<li><strong>Number of Bathrooms: </strong><?php echo $property['Property']['num_bathrooms'];?></li>
			<li><strong>Square Feet: </strong><?php echo $property['Property']['square_feet'];?> sq. ft.</li>
			<li><strong>Last Renovation Date: </strong><?php echo $property['Property']['last_reno_date'];?></li>
			<li><strong>Num. of Stories: </strong><?php echo $property['Property']['num_stories'];?></li>
			<li><strong>Description: </strong><?php echo $property['Property']['description'];?></li>
			<br />
			<li><strong>Listing Price: </strong>$<?php echo $property['Property']['listing_price']?>/month</li>
			<li><strong>Next Open House Date: </strong><?php echo $property['Property']['next_open_house_date'];?></li>
			<li><strong>Seller Contact Info: </strong> <a href="<?php echo $property['Property']['contact_email']?>"><?php echo $property['Property']['contact_email']?></a></li>
		</ul>
		
<?php if($userData['id'] == $property['Property']['user_id'] || $userData['role'] == 'Agent') : ?>		
<?php echo $this->Html->link('Edit', array('action' => 'edit', $property['Property']['id']))?> | 
<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $property['Property']['id']), array('confirm' => 'Are you sure?')); ?>
<br /><br /><br />
<?php endif; ?>
<p><a href="<?php echo $this->webroot;?>">Back to Home</a></p>