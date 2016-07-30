<!--$my_array = array(
	'string1' => 'User Data (text)',
	'arr1' => array(
		'v1' => 'User Data (text)',
		'arr2' => array(
			0 => '1 (radio)',
			1 => array(
				0 => '0 (checkbox)',
				1 => '1 (checkbox)',
			),
		),
	),
	'select' => 'saikat (select)',
);-->

<!DOCTYPE html>
<html>
	<head>
		<title>Using different elements of the 'form' tag</title>
	</head>

	<body>
		<?php // This part is responsible for displaying the post variable ?>
		<?php if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) : ?>
			<h2>Post Request Found: Dumping Variables</h2>
			<hr />
			<pre>
				<?php var_dump( $_POST ); ?>
			</pre>
			<hr />
		<?php endif; ?>

		<h2>Our not so Awesome Form!</h2>
		<form action="" method="POST">
			<p>
				<label for="string1">String 1</label>
        <input type="text" name="string1" id="string1" value="User Data"></input>
			</p>

			<p>
				<label for="arr1[v1]">Array 1 V1 (arr1[v1])</label>
        <input type="text" name="arr1[v1]" id="arr1_v1" value="User Data"></input>
			</p>

			<!-- We use fieldset to group a set of radios/checkboxes
			Actually we don't use fieldset at all! Just for the sake of it -->
			<fieldset>
				<!-- And don't forget the legend -->
				<legend>Radio Elements (arr1[arr2][0]</legend>
				<!-- I though you'd understand, I wasn't talking about just one radio button
				I was talking about multiple radio, grouped under the same name
				Having just one radio under a single name, doesn't make any sense, because
				user won't be able to deselect once selected. What would we need it for?

				Also you named the element arr1[arr2][], which would render arr1[arr2][0]
				because of it's position. I don't know if you were being smart or ignorant,
				but it is not the right way of doing. In future, if we are to move form elements
				then it would break the indicies. This is not something we want.

				Because it is a radio element ( always an implied string datatype ) we can just
				hardcode its name
				-->
				<input type="radio" name="arr1[arr2][0]" id="arr1_arr2_0_1" value="1" />
				<!-- The for attribute of the <label> element corresponds to the id of the form element
				NOT the name of the form element -->
				<label for="arr1_arr2_0_1">Value 1</label><br />

				<!-- Similarly -->
				<input type="radio" name="arr1[arr2][0]" id="arr1_arr2_0_2" value="2" />
				<label for="arr1_arr2_0_2">Value 2</label><br />

				<input type="radio" name="arr1[arr2][0]" id="arr1_arr2_0_3" value="3" />
				<label for="arr1_arr2_0_3">Value 3</label><br />

				<input type="radio" name="arr1[arr2][0]" id="arr1_arr2_0_4" value="4" />
				<label for="arr1_arr2_0_4">Value 4</label><br />
			</fieldset>

			<fieldset>
				<legend>Checkbox Elements (arr1[arr2][1])</legend>

				<input type="checkbox" name="arr1[arr2][1][]" id="arr1_arr2_1_0" value="0" />
				<label for="arr1_arr2_1_0">0th Element</label><br />

				<input type="checkbox" name="arr1[arr2][1][]" id="arr1_arr2_1_1" value="1" />
				<label for="arr1_arr2_1_1">1st Element</label><br />

				<input type="checkbox" name="arr1[arr2][1][]" id="arr1_arr2_1_2" value="2" />
				<label for="arr1_arr2_1_2">2nd Element</label><br />
			</fieldset>

			<p>
				<label for="select">Select Element</label>
				<select name="select" id="select">
					<option value="">--please select--</option>
					<option value="saikat">Saikat</option>
					<option value="das">Das</option>
				</select>
			</p>

			<input type="submit" name="" value="Damn Submit Button" />
		</form>
	</body>
</html>
