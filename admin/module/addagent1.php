<header>
<link rel="stylesheet" href="../css/bootstrap.css"/>
</header>
<fieldset><legend>Add Agent</legend>

<form name="agentID" method="post" action="">
<table>
<tr><td>FirstName:</td><td><input type="text" name="firstname"></td></tr>

<tr><td>LastName:</td><td><input type="text" name="lastname"></td></tr>

<tr><td>Location:</td><td><input type="text" name="location"></td></tr>

<tr><td>Email:</td><td><input type="email" name="email"></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="Submit"><input type="submit" name="show" value="View"><input type="reset" name="reset" value="Reset"></td></tr></table>


</form>
</fieldset>
<?php
require_once('../conn/conn.php');

if(isset($_POST['submit'])){
$agid = $_POST['agentID'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$location = $_POST['location'];
$email = $_POST['email'];
if( $firstname=='' || $lastname==''|| $location==''|| $email==''){
echo "ERROR! Fill all the blanks";
  }else {
mysql_query("insert into agent set firstname='".$firstname."', lastname='".$lastname."',location='".$location."',email='".$email."' ") or die(mysql_error());
if(mysql_affected_row()){
echo "Successfully added!..";
}
  }

}elseif(isset($_POST['show'])){
	header("location: view.php");
}
?>
