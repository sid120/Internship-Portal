<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "mydatabase";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

$firstname = $_POST['firstName'];
//$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
//$address = $_POST['address'];
$gender = $_POST['gender'];
//$nid = $_POST['nid'];
$dept = $_POST['dept'];
$pass = $_POST['pass'];
$Cpass = $_POST['Cpass'];
$mark = 0;

echo $firstname;
//$degree = $_POST['degree'];
//$salary = $_POST['salary'];
//$birthday =$_POST['birthday'];
//echo "$birthday";
//$files = $_FILES['file'];
//$filename = $files['name'];
//$filrerror = $files['error'];
//$filetemp = $files['tmp_name'];
//$fileext = explode('.', $filename);
//$filecheck = strtolower(end($fileext));
//$fileextstored = array('png' , 'jpg' , 'jpeg');

$sql = "INSERT INTO flogin (pid,pname,email, password, gender,contact,dept) VALUES ('$mark','$firstname','$email','$pass','$gender','$contact','$dept')";

$result = mysqli_query($conn, $sql);



/*
$last_id = $conn->insert_id;

$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
$salaryQ = mysqli_query($conn, $sqlS);
$rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");
*/

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='..//flogin.html';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

else{    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Register')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}






?>