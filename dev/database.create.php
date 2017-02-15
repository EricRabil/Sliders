<?php
include 'settings.php';
echo "Creating database as `".mysqlDatabase."`";
//The only time mysql_ will be used is if you need to connect w/o a database
mysql_connect(mysqlIp, mysqlUsername, mysqlPassword);
$result = mysql_query('CREATE DATABASE'." `".mysqlDatabase."`");
if($result){
    echo "<br>The database has been created!";
}else{
    echo "<br>::ERROR::<br>";
    echo mysql_error();
}
mysql_close();