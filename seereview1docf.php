<?php
include('process/dbh.php');
$id = $_GET['id'];

$sql = "SELECT `R1upf` FROM `employee` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$employeen = mysqli_fetch_array($result);
$file = ($employeen['R1upf']);
$filename = $file;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@redfile($file);
/*
echo ("<SCRIPT LANGUAGE='JavaScript'>
    					window.alert('$file')
    					window.location.href='javascript:history.go(-1)';
    					</SCRIPT>");
*/
?>