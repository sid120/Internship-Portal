<!DOCTYPE html>
<?php 
require_once ('process/dbh.php');
$id = $_GET['id'];
$sql = "SELECT Review1,Review2,FinalExam FROM `employee` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Dialog Box with Form Elements</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">

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


	<dialog id="dialog">
	<link rel="stylesheet" type="text/css" href="dialogdemo.css">

		<form method="POST" enctype="multipart/form-data">
			<label for="dropdown">Select an Option:</label>
			<select name="dropdown" id="dropdown">
				<option value="option1"> Review 1</option>
				<option value="option2"> Review 2</option>
				<option value="option3"> Review 3</option>
			</select>
			<br><br>
			<label for="file">Choose a File:</label>
			<input type="file" name="file" id="file">
			<br><br>
			<label for="input">Enter Marks:</label>
			<input type="text" name="input" id="input">
			<br><br>
			<button type="submit" name="submit">Submit</button>
			<button type="button" onclick="document.getElementById('dialog').close();">Cancel</button>
		</form>
		

	</dialog>

	<div class="divider"></div>
	<div id="divimg">
    	<table>

			<tr bgcolor="#0000">
				
				<th align = "center">Review-1</th>
				<th align = "center">Review-2</th>
				<th align = "center">Final-Exam</th>
			</tr>

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['Review1']."</td>";

					echo "<td>".$employee['Review2']."</td>";

					echo "<td>".$employee['FinalExam']."</td>";
			
				}

			?>
			
		</table>



		<!-- <div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="dialogdemo.php" style="text-decoration: none; color: white"> demo</button>
		</div>  -->
		
	</div>
	
		<div class="mark-review-container" style="text-align: center; ">
		<link rel="stylesheet" type="text/css" href="dialogdemo.css">
  		<button onclick="document.getElementById('dialog').showModal();" style="display: block; margin: auto; color: white;  ">Mark Review</button>
		</div>
</body>
</html>