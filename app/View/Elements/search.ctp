<div id="search_area" class="col_12 column">
		<form class="horizontal" method="post" action="<?php echo $this->webroot; ?>properties/browse">
		<input name="keywords" id="keywords" type="text" placeholder="Enter keywords..." />
			<select name ="city_select" id="city_select">
				<option>Select City</option>
				<option value = "San Jose">San Jose, CA</option>
				<option value = "San Francisco">San Francisco, CA</option>
				<option value = "Milpitas">Milpitas, CA</option>
				<option value = "Fremont">Fremont, CA</option>
				<option value = "Cupertino">Cupertino, CA</option>
				<option value = "Oakland">Oakland, CA</option>
				<option value = "Union City">Union City, CA</option>
				<option value = "Hayward">Hayward, CA</option>
				<option value = "Palo Alto">Palo Alto, CA</option>
				<option value = "San Bruno">San Bruno, CA</option>
			</select>
			<select name="type_select" id="type_select" name="type">
				<option>Select Property Type</option>
				<?php foreach($types as $type) : ?>
					<option value="<?php echo $type['Type']['id']; ?>"><?php echo $type['Type']['name']; ?></option>
				<?php endforeach; ?>
			</select>
			<select name="price_select" id="price_select">
				<option>Select Monthly Price</option>
				<option value=1000>$0 to $1000</option>
				<option value=2500>$1001 to $2500</option>
				<option value=5000>$2501 to $5000</option>
				<option value=7500>$5001 to $7500</option>
			</select>
			<button type="submit">Submit</button>
		</form>
	</div>