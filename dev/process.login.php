<?php
include 'corepage.php';
if($_SESSION['loginFails'] === 10){
    echo "Login attempts exceeded. Please try again later.";
}else{
$user = $_POST['username'];
$pass = $_POST['password'];

$queryPass = encrypt($pass);
$queryUser = $user;
$con = mysqli_connect(mysqlIp, mysqlUsername, mysqlPassword, mysqlDatabase, mysqlPort);
if(!$con){
    die('Instance could not connect to the MySQL server - Please verify your information in \'settings.php\'');
}
if ($stmt = $con->prepare("SELECT password FROM users WHERE username=?")){
    $stmt->bind_param("s", $queryUser);
    $stmt->execute();
    $stmt->bind_result($serverPass);
    $stmt->fetch();
    $stmt->close();
}
if($queryPass === $serverPass){
    echo "The passwords match!";
    $_SESSION['auth'] = true;
}else{
    //Error 001 means that the information provided does not match the records.
//    $_SESSION['error.001'];
//    ++$_SESSION['loginFails'];
//    $_SESSION['process.login.message'] = $_SESSION['loginFails']." out of 10 attempts remain before being locked out.";
//    echo $_SESSION['process.login.message'];
    echo getData('loginFails');
    
}
echo mysqli_error($con);
}