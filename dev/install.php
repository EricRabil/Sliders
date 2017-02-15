<?php
include 'settings.php';
if(allowInstall){
$con = mysqli_connect(mysqlIp, mysqlUsername, mysqlPassword, null, mysqlPort);
if(!$con){
    die('Instance could not connect to the MySQL server - Please verify your information in \'settings.php\'');
}
echo "Preparation for installation -- The database `".mysqlDatabase."` will be deleted and then recreated";
echo "<br>-------------------<br>ACTION 0 - DATABASE DROP";
$query = mysqli_query($con, $deleteDatabase = "DROP DATABASE IF EXISTS `".mysqlDatabase."`");

var_dump($query);
echo mysqli_error($con);
echo "<br>ACTION 1 - DATABASE CREATE";
$query = mysqli_query($con, "CREATE DATABASE `".mysqlDatabase."`");
var_dump($query);
echo mysqli_error($con);
echo "<br>ACTION 2 - DATABASE SELECT";
$query = mysqli_query($con, "USE `".mysqlDatabase."`");
var_dump($query);
echo mysqli_error($con);
echo "<br>ACTION 3 - users TABLE CREATE";
$query = mysqli_query($con, "CREATE TABLE users (username VARCHAR(16), password VARCHAR(128), timeJoined VARCHAR(128), lastSeen VARCHAR(128), profilePicUrl VARCHAR(128), backPicUrl VARCHAR(128), id int NOT NULL AUTO_INCREMENT, PRIMARY KEY (id))");
var_dump($query);
echo mysqli_error($con);
echo "<br>ACTION 4 - news TABLE CREATE";
$query = mysqli_query($con, "CREATE TABLE news (title VARCHAR(64), subtitle VARCHAR(32), content BLOB, month VARCHAR(128), monthNum VARCHAR(128), views VARCHAR(128), datetime VARCHAR(128), id int NOT NULL AUTO_INCREMENT, PRIMARY KEY (id))");
var_dump($query);
echo mysqli_error($con);
echo "<br>ACTION 5 - administrators TABLE CREATE";
$query = mysqli_query($con, "CREATE TABLE administrators (id int NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), username VARCHAR(16), active VARCHAR(16))");
var_dump($query);
echo mysqli_error($con);
mysqli_close($con);
echo "<br><hr>The installation is complete - If successful, please set allowInstall to false in settings.php as this script will still reset the database.";
}else{
    echo "The settings file has not specified that an install can be performed.";
}