<div id="search_area" class="col_12 column">
		<form class="horizontal" method="post" action="#">
		<input name="keywords" id="keywords" type="text" placeholder="Enter keywords..." />
			<select id="city_select">
				<option>Select City</option>
				<option value = "SJ">San Jose, CA</option>
				<option value = "SF">San Francisco, CA</option>
				<option value = "M">Milpitas, CA</option>
				<option value = "F">Fremont, CA</option>
				<option value = "C">Cupertino, CA</option>
				<option value = "O">Oakland, CA</option>
				<option value = "UC">Union City, CA</option>
				<option value = "H">Hayward, CA</option>
				<option value = "PA">Palo Alto, CA</option>
				<option value = "SB">San Bruno, CA</option>
			</select>
			<select name="type_select" id="type_select" name="type">
				<option>Select Property Type</option>
				<?php foreach($types as $type) : ?>
					<option value="<?php echo $type['Type']['id']; ?>"><?php echo $type['Type']['name']; ?></option>
				<?php endforeach; ?>
			</select>
			<select name="price_select" id="price_select">
				<option>Select Price Range</option>
				<option>$0 to $100000</option>
			</select>
			<button type="submit">Submit</button>
		</form>
	</div>