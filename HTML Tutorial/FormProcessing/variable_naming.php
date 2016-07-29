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
	<input type="text" name="linear" />
	<input type="text" name="linear_2" />

	<input type="text" name="md[0]" />
	<input type="text" name="md[1]" />
	<input type="text" name="md[some][thing]" />
	<input type="text" name="md[some][things][else]" />

	<input type="text" name="id[]" />
	<input type="text" name="id[]" />

	<input type="submit" name="" />
</form>
