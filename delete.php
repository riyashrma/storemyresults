<?php
include('insert.php');
// include('add.php');
// include('index.php');
error_reporting(0);

$subname=$_GET['sub'];
$emailid=$_GET['un'];
$myquery="DELETE FROM marksheet WHERE subname='$subname' AND emailid='$emailid'";
$mydata=mysqli_query($conn,$myquery);

if($mydata){
    echo "Done";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/p2%20website/results.php">
    <?php
}
?>