<?php
//delete.php<?php
session_start();
$_POST;
include("SQLConnect.php");
// $query = mysql_query("DELETE FROM tbl_students WHERE stud_ID = '".$_GET['id']."'") or die(mysql_error());
$query = mysqli_query($con,"Update tbl_students SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error($con));


if(!$query){
	echo "Record not deleted!";
}
else{
    
	echo"Record successfully deleted";

    echo "<script> window.location.href='../home_page.php';</script>";
    $file=file('cache/data.txt');

   






    $_SESSION['studID'] = $file[0];
    $_SESSION['lastName'] = $file[1];
  


}
