<?php
$_POST;

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
	echo '<h1>Howdy!</h1>';

	var_dump( $_POST[ 'linear' ] );
	var_dump( $_POST[ 'linear_2' ] );

	var_dump( $_POST[ 'md' ][ 0 ] );
	var_dump( $_POST[ 'md' ][ 1 ] );
	var_dump( $_POST[ 'md' ][ 'some' ][ 'thing' ] );
	var_dump( $_POST[ 'md' ][ 'some' ][ 'things' ][ 'else' ] );

	var_dump( $_POST[ 'id' ] );
}

?>

<form action="" method="post">
	<label for="linear">Linear</label>
	<input type="text" name="linear" id="linear"><br />
	
	<label for="linear_2">Linear 2</label>
	<input type="text" name="linear_2" id="linear_2" /><br />

	<label for="md_0">MD 0</label>
	<input type="text" name="md[0]" id="md_0" /><br />
	
	<label for="md_1">MD 1</label>
	<input type="text" name="md[1]" id="md_1" /><br />
	<input type="text" name="md[some][thing]" id="md_some_thing" />
	<input type="text" name="md[some][things][else]" id="md_some_things_else" />

	<input type="text" name="id[]" id="id_0" />
	<input type="text" name="id[]" id="id_1" />

	<input type="submit" name="" />
</form>
