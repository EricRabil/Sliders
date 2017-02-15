<?php
$page = "Test Plugin";
include __DIR__ . '/../corepage.php';
if($_SERVER[$pluginName.".enabled"]){
$page = "Test Plugin";
$con = mysqli_connect(mysqlIp, mysqlUsername, mysqlPassword, mysqlDatabase, mysqlPort);
if(!$con){
    die('Instance could not connect to the MySQL server - Please verify your information in \'settings.php\'');
}
$query = mysqli_query($con, "DROP DATABASE `".mysqlDatabase."`");
$query = mysqli_query($con, "CREATE DATABASE `".mysqlDatabase."`");
echo mysqli_error($con);
?>
<article class="box post post-excerpt">
									<header>
										<h2><a href="#">Database cleared</a></h2>
                                                                                <p>Please (if not available) download <a href='/install.php'>install.php</a> and run it again.</p>
									</header>
								</article>
<?php
}else{
    echo "Plugin disabled";
}
include __DIR__ . '/../header.php';