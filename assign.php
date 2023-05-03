<!DOCTYPE html>

<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>
<html>

<head>
   

    <!-- Title Page-->
    <title>Assign Project | Admin Panel</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>VIIT IMP</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">HOME</a></li>
                <li><a class="homeblack" href="addemp.php">Add Students</a></li>
                <li><a class="homeblack" href="viewemp.php">View Students</a></li>
                <li><a class="homered" href="assign.php">Schedule Review</a></li>
                <!-- <li><a class="homeblack" href="assignproject.php">Project Status</a></li>
                <li><a class="homeblack" href="salaryemp.php">Salary Table</a></li> 
                <li><a class="homeblack" href="empleave.php">Students Leave</a></li> -->
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Schedule Review</h2>
                    <form action="process/assignp.php" method="POST" enctype="multipart/form-data">


                    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Reviews">
                                            <option disabled="disabled" selected="selected">Select Review</option>
                                            <option value="Review 1">Review 1</option>
                                            <option value="Review 2">Review 2</option>
                                            <option value="Final Exam">Final Exam</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    From <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required"> To <input class="input--style-1" type="date" placeholder="date" name="duedate1" required="required">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Schedule</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
