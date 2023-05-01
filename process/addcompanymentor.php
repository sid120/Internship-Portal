<?php

include("dbh.php");
$id = $_GET['id'];
$cmentor = $_POST['CMentor'];

$result = mysqli_query($conn, "UPDATE `employee` SET `degree`='$cmentor' WHERE `id`=$id");

if(($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Assigned')
    window.location.href='..//viewemp.php';
    </SCRIPT>");
    //header("Location: ..//aloginwel.php");
}

?>

