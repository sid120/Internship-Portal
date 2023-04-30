<!DOCTYPE html>
<html>
<head>
	<title>Dialog Box with Form Elements</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])) {
			$selected_option = $_POST['dropdown'];
			$uploaded_file = $_FILES['file']['name'];
			$input_value = $_POST['input'];
			// do something with the form data
		}
	?>

	<button onclick="document.getElementById('dialog').showModal();">Mark Review</button>

	<dialog id="dialog">
		<form method="POST" enctype="multipart/form-data">
			<label for="dropdown">Select an Option:</label>
			<select name="dropdown" id="dropdown">
				<option value="option1">Option 1</option>
				<option value="option2">Option 2</option>
				<option value="option3">Option 3</option>
			</select>
			<br><br>
			<label for="file">Choose a File:</label>
			<input type="file" name="file" id="file">
			<br><br>
			<label for="input">Enter Some Text:</label>
			<input type="text" name="input" id="input">
			<br><br>
			<button type="submit" name="submit">Submit</button>
			<button type="button" onclick="document.getElementById('dialog').close();">Cancel</button>
		</form>
	</dialog>
</body>
</html>