<?php 
require_once ('process/dbh.php');
$sql = "SELECT * FROM `employee`";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | VIIT IMP</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>VIIT IMP</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Students</a></li>
				<li><a class="homeblack" href="viewemp.php">Assign Faculty</a></li>
				<li><a class="homeblack" href="assign.php">Schedule Review</a></li>
				<!-- <li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Students Leave</a></li> -->
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
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
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Company</th>
				<th align = "center">Offer letter</th>
				<th align = "center">Annexures</th>
				<th align = "center">Review 1</th>
				<th align = "center">Review 2</th>
				<th align = "center">Final Exam</th>
				<th align = "center">Marks</th>
				<th align = "center">Faculty</th>
				<th align = "center">Review Annexure</th>
				<th align = "center">Company Mentor</th>
			</tr>

			

			<?php
				$seq = 1;
				error_reporting(0);
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";

					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";

					echo "<td>".$employee['address']."</td>";

					echo "<td> <a href='$employee[R2upf]'>see doc</a> </td>";
					echo "<td> <a href='$employee[Anexure]'>Anexure 1</a> <br> <a href='$employee[Anexure2]'>Anexure 2</a> <br> <a href='$employee[Anexure3]'>Anexure 3</a></td>";
					
					echo "<td>".$employee['Review1']."<br>"."<a href='$employee[R1ppt]'>see doc</a>"."</td>";

					echo "<td>".$employee['Review2']."<br>"."<a href='$employee[R2ppt]'>see doc</a>"."</td>";

					echo "<td>".$employee['FinalExam']."<br>"."<a href='$employee[Finalppt]'>PPT</a>"."<br>"."<a href='$employee[Finalreport]'>REPORT</a>"."</td>";

					echo "<td>"."Review 1 - ".$employee['R1marks']."/10"."<br>"."Review 2 - ".$employee['R2marks']."/10"."<br>"."Final Exam - ".$employee['Finalmarks']."/10"."<br>"."</td>";

					$sql1 = "SELECT * FROM `employee` where id = '$employee[id]'";
	 				$result1 = mysqli_query($conn, $sql1);
	 				$employeen = mysqli_fetch_array($result1);
	 				$pid = ($employeen['pid']);
					$sqlf = "SELECT * FROM `flogin` where pid = '$pid'";
					$resultf = mysqli_query($conn, $sqlf);
					$faculty = mysqli_fetch_array($resultf);
					
					if(isset($pid))
					{
						$pname = ($faculty['pname']);
					}
					

					if(isset($pname))
					{
						echo "<td>".$pname."</td>";
					}
					else
					{
						echo "<td> YET TO ASSIGN </td>";
					}

					
					echo "<td> <a href='$employee[R1upf]'>Review 1</a> <br> <a href='$employee[R2upf]'>Review 2</a> <br> <a href='$employee[Finalupf]'>Final Exam</a></td>";
					
					$c = $employee['degree'];

					if($c != null)
					{
						echo "<td>".$employee['degree']."</td>";
					}
					else
					{
						echo "<td>NOT ASSIGNED </td>"; 
					}
					

					$seq+=1;
				}
			?>

		</table>

		<!-- <div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div> -->

		
	</div>
</body>
</html>