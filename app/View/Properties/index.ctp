<h3>Latest Property Listings</h3>
		<ul id="listings">
			<?php foreach($properties as $property) : ?>
			<li>
				<div class="type">
					<span class="green"><?php echo $property['Property']['p_type']; ?></span>
				</div>
				<div class="description">
					<h5><?php echo $property['Property']['address_street']; ?> (<?php echo $property['Property']['address_city'];?>, <?php echo $property['Property']['address_state'];?> <?php echo $property['Property']['address_zip'];?>)</h5>
					<span id="list_date">
						<?php echo $this->Time->format('F jS h:i A', $property['Property']['created']); ?>
					</span>
					<br />
					<?php echo $this->Text->truncate($property['Property']['description'], 250, array('ellipsis' => '...', 'exact' => false));?>
					<?php echo $this->Html->link('Read More', array('controller' => 'properties', 'action' => 'view', $property['Property']['p_id'])); ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>