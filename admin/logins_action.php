<?php
include ('dbx.php');
$username =  mysqli_real_escape_string($mysqli , $_POST['emailaddress']);

$password = mysqli_real_escape_string($mysqli , $_POST['password']);

$qry = "SELECT * FROM flox WHERE email_address = '".$_POST ['emailaddress']."'
                              AND password = '".$_POST ['password']."'";
							
$result   = $mysqli->query($qry);
$num      = mysqli_num_rows($result);
if ($num == 0) 
{
    header("Location:login.php?msg=2");
}
else 
{
	if ($row = mysqli_fetch_array($result)) 
	{  
		  $_SESSION['login'] = $row['emailaddress'];
		  header("Location:profile.php");
	}
}
?>