<?php 
require_once ('process/dbh.php');
$email= $_GET['email'];
$sql1 = "SELECT * FROM flogin WHERE email = '$email'";
$result1 = mysqli_query($conn, $sql1);
$faculty = mysqli_fetch_assoc($result1);
$pid = $faculty['pid'];
$sql = "SELECT * FROM employee, `rank` WHERE pid = $pid and `rank`.eid = employee.id";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Faculty Panel | VIIT IMP</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>VIIT IMP</h1>
			<ul id="navli">
				<li><a class="homered" href="floginwel.php">HOME</a></li>
				<!-- <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li> -->
				<li><a class="homeblack" href="flogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Students List</h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Student. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Company</th>
				<th align = "center">Points</th>
				<th align = "center">Review</th>
			</tr>

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";

					echo "<td>".$employee['address']."</td>";
					
					echo "<td>".$employee['points']."</td>";

					echo "<td> <form action='dialogdemo.php?id=$employee[id]' method='post'>";
						echo "<input type='submit' name='button' value='REVIEW'>";
					echo "</form></td>";
				

					$seq+=1;
				}

			?>
		</table>

		<!-- <div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="dialogdemo.php" style="text-decoration: none; color: white"> demo</button>
		</div>  -->
		
	</div>
</body>
</html>