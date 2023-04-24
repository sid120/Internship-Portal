<?php
//including the database connection file
include("dbh.php");

//getting id of the data from url
$id = $_GET['id'];
$pid = $_POST['faculty'];

/*
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('$id')
    window.alert('$pid')
    </SCRIPT>");
*/

//deleting the row from table
$result = mysqli_query($conn, "UPDATE `employee` SET `pid`='$pid' WHERE id=$id");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Assigned')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

//redirecting to the display page (index.php in our case)


//header("Location:viewemp.php");
?>

