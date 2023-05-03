<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

<html>
<head>
	<title>View Students |  Admin Panel | VIIT IMP</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>VIIT IMP</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Students</a></li>
				<li><a class="homered" href="viewemp.php">Assign Faculty</a></li>
				<li><a class="homeblack" href="assign.php">Schedule Review</a></li>
				<!-- <li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Students Leave</a></li> -->
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
		<table>
			<tr>
				<th align = "center">Student. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Assign Faculty</th>
				<th align = "center">Assign Company Mentor</th>
			</tr>

			<?php
				$query = "SELECT * FROM `flogin`";
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					$Select_name = 0;
					echo "<td> <form action='process/assignfacprocess.php?id=$employee[id]' method='post'> <select name = 'faculty' value=''>";
					
					echo "<option value=''>Select Faculty</option>";

					foreach ($conn->query($query) as $row){

						echo "<option value=$row[pid]>$row[pname]</option>";
					}
					
					$Select_name=$_POST['faculty'];
					echo "</select> <input type='submit' name='button' value='Assign'></form></td>";

					echo "<td> <form action='process/addcompanymentor.php?id=$employee[id]' method='post'>";
						echo "<input type='text' placeholder='Company Mentor' name='CMentor' required='required'>";
					echo "<input type='submit' name='btn2' value='Assign'></form></td>";

				}


			?>

		</table>
		
	
</body>
</html>