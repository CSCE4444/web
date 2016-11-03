<?php



include 'DBconnect.php';



$first = $_POST['first'];

$last = $_POST['last'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$uid = $_POST['uid'];

$pwd = $_POST['pwd'];



// DEBUG ONLY; COMMENT THESE OUT WHEN WE GO LIVE

//echo $first."<br>";

//echo $last."<br>";

//echo $email."<br>";

//echo $phone."<br>";

//echo $uid."<br>";

//echo $pwd."<br>";

// Now our SQL string

$sql = "INSERT INTO user (first, last, email, phone, uid, pwd) 
VALUES ('$first','$last','$email','$phone','$uid','$pwd')";

$result = mysqli_query($conn, $sql);

header("Location: index.html");
?>