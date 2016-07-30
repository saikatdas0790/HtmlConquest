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

<!doctype HTML>
<html>
	<head>
		<title>Using different elements of the 'form' tag</title>
	</head>

	<body>
		<form action="" method="POST">
			<label for="string1">String 1</label>
			<input type="text" name="string1" id="string1" value="User Data"><br>

			<label for="arr1[v1]">Array 1 V1</label>
			<input type="text" name="arr1[v1]" id="arr1_v1" value="User Data"><br>

			<fieldset>
				<label for="arr1[arr2][0]">Array 1 Array 2 0th Element</label>
				<input type="radio" name="arr1[arr2][]" id="arr1_arr2_0" value="1"><br>

				<label for="arr1[arr2][1][0]">Array 1 Array 2 1st Element 0th Element</label>
				<input type="checkbox" name="arr1[arr2][1][]" id="arr1_arr2_1_0" value="0"><br>

				<label for="arr1[arr2][1][1]">Array 1 Array 2 1st Element 1st Element</label>
				<input type="checkbox" name="arr1[arr2][1][]" id="arr1_arr2_1_1" value="1"><br>								
			</fieldset>

			<label for="select">Select Element</label>
			<select name="select" id="select">
				<option value="saikat">Saikat</option>
			</select>
		</form>
	</body>
</html>