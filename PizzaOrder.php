<?php
$servername = "localhost";
$username = "user_eg";
$password = "13669618";
$currentdb="Database_Project";


$Method = check_input($_POST['method']);
$Size = $_POST['size'];
$Crust = $_POST['crust'];
$Sauce = $_POST['sauce'];




@ $db = new mysqli('localhost', $username, $password, $currentdb ); 
//check the connection
if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
$currenttb="TestOrder";
#if(!$currenttb)
#{
#	echo ' no such table exists'; 
#}
#else
#{
	#here I started the input from the user requests
	#echo ' Table exists'; 
#}
$query="insert into $currenttb values
(Null,'".$Method."','".$Size."','".$Crust."','".$Sauce."')";

$result = $db->query($query);
if($result)
{
	header('Location: checkout.html');

}
$db->close();
?>