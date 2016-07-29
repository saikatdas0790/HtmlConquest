<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
	echo '<h1>$_POST Variable</h1><pre>';
	var_dump( $_POST );
	echo '</pre>';
	
	echo '<h1>Howdy!</h1><pre>';

	var_dump( $_POST[ 'linear' ] );
	var_dump( $_POST[ 'linear_2' ] );

	var_dump( $_POST[ 'md' ][ 0 ] );
	var_dump( $_POST[ 'md' ][ 1 ] );
	var_dump( $_POST[ 'md' ][ 'some' ][ 'thing' ] );
	var_dump( $_POST[ 'md' ][ 'some' ][ 'thing' ][ 'else' ] );

	var_dump( $_POST[ 'id' ] );
	
	var_dump( $_POST['rg']['1'] );
	var_dump( $_POST['mrg'] );
	
	var_dump( $_POST['mck'] );
	var_dump( $_POST['mmck'] );
	
	var_dump( $_POST['select'] );
	var_dump( $_POST['select_grouped'] );
	echo '</pre>';
}

/**
 * TASK:
 * Make a form in which the $_POST variable will be populated like this
 * 
 * All the best
 * 
 * (type) indicates the input type
 * eg: User Data (text) <input type="text" name="string1" id="string1" />
 */
$my_array = array(
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
);

// If $_POST has similar structure then you pass

?>

<form action="" method="post">
	<h2>Input Type Text</h2>
	<label for="linear">Linear</label>
	<input type="text" name="linear" id="linear"><br />
	
	<label for="linear_2">Linear 2</label>
	<input type="text" name="linear_2" id="linear_2" /><br />

	<label for="md_0">MD 0</label>
	<input type="text" name="md[0]" id="md_0" /><br />
	
	<label for="md_1">MD 1</label>
	<input type="text" name="md[1]" id="md_1" /><br />
	
	<label for="md_some_thing">MD Some Thing</label>
	<input type="text" name="md[some][thing]" id="md_some_thing" /><br />
	
	<!-- This would override the md[some][thing] -->
	<label for="md_some_things_else">MD Some ThingS Else</label>
	<input type="text" name="md[some][thing][else]" id="md_some_things_else" /><br />

	<label for="id_0">ID 0<sup>th</sup></label>
	<input type="text" name="id[]" id="id_0" /><br />
	
	<label for="id_1">ID 1<sup>st</sup></label>
	<input type="text" name="id[]" id="id_1" />
	
	<h2>Input Grouping for checkbox & radio</h2>

	<fieldset>
		<legend>Radio Group 1</legend>
		<input type="radio" name="rg[1]" value="1" id="rg_1" /> <label for="rg_1">Value 1</label><br />
		<input type="radio" name="rg[1]" value="2" id="rg_2" /> <label for="rg_2">Value 2</label><br />
		<input type="radio" name="rg[1]" value="3" id="rg_3" /> <label for="rg_3">Value 3</label><br />
	</fieldset>
	
	<fieldset>
		<legend>Radio Group 2</legend>
		<input type="radio" name="mrg" value="1" id="mrg_1" /> <label for="mrg_1">Value 1</label><br />
		<input type="radio" name="mrg" value="2" id="mrg_2" /> <label for="mrg_2">Value 2</label><br />
		<input type="radio" name="mrg" value="3" id="mrg_3" /> <label for="mrg_3">Value 3</label><br />
		<!-- Note the name of the radio corresponds to the 1st radio group !! See what happens -->
		<input type="radio" name="rg[1]" value="4" id="rg_4" /> <label for="rg_4">Value 4</label><br />
	</fieldset>
	
	<fieldset>
		<legend>Single Checkbox</legend>
		<!-- When using just one checkbox for a particular name, you do not need to make an array -->
		<input type="checkbox" name="mck" value="1" id="mck" /> <label for="mck">Single Checkbox</label>
	</fieldset>
	
	<fieldset>
		<legend>Multiple Checkbox</legend>
		<!-- When using multiple checkboxes, always make an array type name -->
		<input type="checkbox" name="mmck[]" value="1" id="mmck_1" /> <label for="mmck_1">Checkbox 1</label><br />
		<input type="checkbox" name="mmck[]" value="2" id="mmck_2" /> <label for="mmck_2">Checkbox 2</label><br />
		<input type="checkbox" name="mmck[]" value="3" id="mmck_3" /> <label for="mmck_3">Checkbox 3</label><br />
	</fieldset>
	
	<h2>SELECT Element</h2>
	<label for="select">Select Dropdown</label>
	<select name="select" id="select">
		<option value="">--please select--</option>
		<option value="1">Element 1</option>
		<option value="2">Element 2</option>
	</select><br />
	
	<label for="select_grouped">Grouped Dropdown</label>
	<select name="select_grouped" id="select_grouped">
		<option value="">--please select--</option>
		<optgroup label="Group 1">
			<option value="g1v1">Value 1</option>
			<option value="g1v2">Value 2</option>
		</optgroup>
		<optgroup label="Group 2">
			<option value="g2v1">Value 1</option>
			<option value="g2v2">Value 2</option>
		</optgroup>
	</select>
	
	<br />
	<input type="submit" name="" />
</form>
