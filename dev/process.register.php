<?php
include 'corepage.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$passV = $_POST['verifyPassword'];

if($pass === $passV){
    //The passwords match - Insert the user into the database
    
    $con = mysqli_connect(mysqlIp, mysqlUsername, mysqlPassword, mysqlDatabase, mysqlPort);
if(!$con){
    die('Instance could not connect to the MySQL server - Please verify your information in \'settings.php\'');
}
if ($stmt = $con->prepare("INSERT INTO `users` (username, password) VALUES (?, ?)")){
    $stmt->bind_param("ss", $user, sliders_encrypt_nosalt($pass));
    $stmt->execute();
    $stmt->close();
}
echo mysqli_error($con);
}else{
	echo "Passwords do not match";
}