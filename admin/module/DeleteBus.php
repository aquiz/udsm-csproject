<?php
$busID=$_GET['busID'];
include '../conn/conn.php';
$sql="DELETE FROM bus WHERE busID='$busID'";
$query=mysql_query($sql) or die("cannot delete record.<br>".mysql_error());
echo "Record Deleted!";
?>
