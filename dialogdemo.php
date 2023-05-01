<!DOCTYPE html>
<?php 
require_once ('process/dbh.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `employee` WHERE id = '$id'";
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
			include('process/dbh.php');
			$id = $_GET['id'];
			$review = $_POST['dropdown'];
			$files = $_FILES['file'];
			$filename = $files['name'];
			$marks = $_POST['input'];
			$filrerror = $files['error'];
			$filetemp = $files['tmp_name'];
			$fileext = explode('.', $filename);
			$filecheck = strtolower(end($fileext));
			$fileextstored = array('png' , 'jpg' , 'jpeg' , 'pdf' , 'docx');

			// echo ("<SCRIPT LANGUAGE='JavaScript'>
    		// 			window.alert('$id $review $filename $marks')
    		// 			window.location.href='javascript:history.go(-1)';
    		// 			</SCRIPT>");
			
			if(strcmp($review,"Review 1") == 0)
			{
				if(in_array($filecheck, $fileextstored))
				{
					$destinationfile = 'uploadsfaculty/'.$filename;
					move_uploaded_file($filetemp, $destinationfile);

					$sql = "UPDATE `employee` SET `R1upf`= '$destinationfile', `R1marks`='$marks' WHERE `id` = $id";
    				$result = mysqli_query($conn, $sql);
					
					if(($result) == 1)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('Sucessfully Updated')
    					window.location.href='javascript:history.go(-1)';
    					</SCRIPT>");
					}
				}
			}
			else if(strcmp($review,"Review 2") == 0){
    			if(in_array($filecheck, $fileextstored))
				{
					$destinationfile = 'uploadsfaculty/'.$filename;
					move_uploaded_file($filetemp, $destinationfile);

					$sql = "UPDATE `employee` SET `R2upf`= '$destinationfile', `R2marks`='$marks' WHERE `id` = $id";
    				$result = mysqli_query($conn, $sql);
					
					if(($result) == 1)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('Sucessfully Updated')
    					window.location.href='javascript:history.go(-1)';
    					</SCRIPT>");
					}
				}
			}
			else if(strcmp($review,"Final Exam") == 0){
    			if(in_array($filecheck, $fileextstored))
				{
					$destinationfile = 'uploadsfaculty/'.$filename;
					move_uploaded_file($filetemp, $destinationfile);

					$sql = "UPDATE `employee` SET `Finalupf`= '$destinationfile', `Finalmarks`='$marks' WHERE `id` = $id";
    				$result = mysqli_query($conn, $sql);
					
					if(($result) == 1)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('Sucessfully Updated')
    					window.location.href='javascript:history.go(-1)';
    					</SCRIPT>");
					}
				}
			}
			
		}
	?>


	<dialog id="dialog">
	<link rel="stylesheet" type="text/css" href="dialogdemo.css">

		<form method="POST" enctype="multipart/form-data">
			<label for="dropdown">Select an Option:</label>
			<select name="dropdown" id="dropdown">
				<option value="Review 1"> Review 1</option>
				<option value="Review 2"> Review 2</option>
				<option value="Final Exam"> Final Exam</option>
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
				<th align = "center">Marks</th>
				<th align = "center">Review-2</th>
				<th align = "center">Marks</th>
				<th align = "center">Final-Exam</th>
				<th align = "center">Marks</th>	
			</tr>

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['Review1']."<br>"."<a href='$employee[R1upf]'>see doc</a>"."</td>";

					echo "<td>".$employee['R1marks']."/10"."</td>";

					echo "<td>".$employee['Review2']."<br>"."<a href='$employee[R2upf]'>see doc</a>"."</td>";

					echo "<td>".$employee['R2marks']."/10"."</td>";

					echo "<td>".$employee['FinalExam']."<br>"."<a href='$employee[Finalupf]'>see doc</a>"."</td>";

					echo "<td>".$employee['Finalmarks']."/10"."</td>";
			
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