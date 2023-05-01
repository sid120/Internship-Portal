<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	 $sql1 = "SELECT * FROM `employee` where id = '$id'";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
	 $pid = ($employeen['pid']);
	 $empName = ($employeen['firstName']);
	 $sqlf = "SELECT * FROM `flogin` where pid = '$pid'";
	 $resultf = mysqli_query($conn, $sqlf);
	 $faculty = mysqli_fetch_array($resultf);	
	 $pname = ($faculty['pname']);
	 if(isset($pname)){
		
	 }

	$sqlE = "SELECT * FROM `employee` where id = '$id'";
	$sql = "SELECT id, firstName, lastName,  address, points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
	$sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = $id and status = 'Due'";

	$sql2 = "Select * From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";

	$sql3 = "SELECT * FROM `salary` WHERE id = $id";

//echo "$sql";
$result = mysqli_query($conn, $sqlE);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);



?>



<html>
<head>
	<title>Students Panel | VIIT IMP</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>

	 
	
	<header>
		<nav>
			<h1>VIIT IMP</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<!-- <li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li> -->
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
		<h2>Welcome <?php echo "$empName"; ?> </h2>

    	<table>

			<tr bgcolor="#000">
				<th align = "center">Review 1</th>
				<th align = "center">Review 2</th>
				<th align = "center">Final Eaxm</th>
				<th align = "center">Company Mentor</th>
				<th align = "center">Faculty</th>
			</tr>			

			<?php
				$seq = 1;

				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['Review1']."</td>";
					
					echo "<td>".$employee['Review2']."</td>";

					echo "<td>".$employee['FinalExam']."</td>";
					
					echo "<td>".$employee['degree']."</td>";

					echo "<td>".$pname."</td>";
					
					$seq+=1;
				}


			?>

		</table>



		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Review 1 Upload</h2>
    	

    	<table>

			<tr>
			<?php 
			echo "<form action = 'uploadreview1ppt.php?id=$id' method='POST' enctype='multipart/form-data'>";
			echo "<th align = 'center'><label for='file'>Upload Review 1 PPT: <input type='file' name='R1ppt' id='offer1'></label></th>";
			echo "<th align = 'center'><input type='submit' name='btn2' value='Upload'></th>";
			echo "</form>";
			?>
				
			</tr>

		</table> 




		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Review 2 Upload</h2>
    	

    	<table>

			<tr>
			
			<?php 
			echo "<form action='uploadreview2ppt.php?id=$id' method='POST' enctype='multipart/form-data'>";
			echo "<th align = 'center'><label for='file'>Upload Review 2 PPT: <input type='file' name='R2ppt' id='offer2'></label></th>";
			echo "<th align = 'center'><input type='submit' name='btn3' value='Upload'></th>";
			echo "</form>";
			?>
				
			</tr>

		</table>
		
		
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Final Exam Upload</h2>
    	

    	<table>

			<tr>

			<?php 
			echo "<form action='uploadfinalexam.php?id=$id' method='POST' enctype='multipart/form-data'>";
			echo "<th align = 'center'><label for='file'>Final Exam PPT: <input type='file' name='finalppt' id='finalp'></label></th>";
			echo "<th align = 'center'><label for='file'>Final Exam Report: <input type='file' name='finalreport' id='finalr'></label></th>";
			echo "<th align = 'center'><input type='submit' name='btn4' value='Upload'></th>";
			echo "</form>";
			?>
			
			</tr>

		</table>
		
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Common Upload</h2>
    	

    	<table>

			<tr>
			
			<?php 
			echo "<form action='uploadofferannexure.php?id=$id' method='POST' enctype='multipart/form-data'>";
			echo "<th align = 'center'><label for='file'>Upload offer letter: <input type='file' name='offer' id='offer1'></label></th>";
			echo "<th align = 'center'><label for='file'>Upload Annexure letter: <input type='file' name='Annexure' id='Annexure1'></label></th>";
			echo "<th align = 'center'><input type='submit' name='btn5' value='Upload'></th>";
			echo "</form>";
			?>
				
			</tr>


		</table> 





		<!-- <h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Leave Status</h2>
    	

    	<table>

			<tr>
				
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
			</tr>

			

			<?php
				while ($employee = mysqli_fetch_assoc($result2)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					
				}


				


			?>

		</table> -->




   
<br>
<br>
<br>
<br>
<br>







	</div>


		</h2>


		
		
	</div>
</body>
</html>