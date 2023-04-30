<?php

require_once ('dbh.php');

//$pname = $_POST['pname'];
//$eid = $_POST['eid'];
$subdate = $_POST['duedate'];
$pid = $_POST['faculty'];
$review = $_POST['Reviews'];


//$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate` , `status`) VALUES ('$eid' , '$pname' , '$subdate' , 'Due')";

//$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `flogin` WHERE pid = $pid";
$result = mysqli_query($conn, $sql);

$pname = "#";
$femail = "#";

while($faculty = mysqli_fetch_assoc($result))
{
    $pname = $faculty['pname'];
    $femail = $faculty['email'];
}


$sql = "UPDATE ``";
$result = mysqli_query($conn, $sql);





//if(isset( $_POST['name']))
//$name = $_POST['name'];
//if(isset( $_POST['email']))
/*
$email = "bhavsarom007@gmail.com";
//if(isset( $_POST['message']))
$subject = "Scheduled $review";

$messagef = "Your Review 1 is scheduled on $subdate";
$name = "Admin";
$content="From: $name \n Email: $email \n Message: $messagef";
$mailheader = "From: $email \r\n";
mail($femail, $subject, $content, $mailheader) or die("Error!");
*/

/*
if(mail($femail, $subject, $content, $mailheader)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('email sent')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
} else {
    echo "Email sending failed...";
}
*/



/*
$message2 = " \n please contact to your teacher for further timing and information";
$message = "Your Review 1 is scheduled on $subdate with $pname $message2";

mohitdeshpande777@gmail.com

//if(isset( $_POST['subject']))
$subject = "Scheduled $review";

$name = "Admin";
$content="From: $name \n Email: $email \n Message: $message";
$mailheader = "From: $email \r\n";
mail($femail, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
*/

/*
if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
*/




?>