<?php
session_start();
$pay =$_REQUEST['amount'];
echo $_SESSION['amountl']." ".$pay;

if ($_SESSION['amountl']>0)
{
	$_SESSION['amountl'] = $_SESSION['amountl']-(int)$pay;
	
}
else{
	echo "yo";
	header("loction:home.php");

}
?>