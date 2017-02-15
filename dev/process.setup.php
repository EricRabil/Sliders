<?php
include 'settings.php';
if(allowSettingsReconfigure){
$ip = $_POST['mysql_ip'];
$user = $_POST['mysql_user'];
$pass = $_POST['mysql_password'];
$database = $_POST['mysql_database'];
$port = $_POST['mysql_port'];
if(empty($ip)){
    $ip = "localhost";
}
if(empty($user) || empty($database)){
    echo "Setup terminated - Username or database variable is empty - Please try again with all forms filled out (Password form is not required)";
}else{
    echo "Beginning setup";
    echo "<hr>";
    file_put_contents("settings.php", "");
    echo "Clearing settings file...";
    echo "<br>Done!<hr>";
    $settings = fopen("settings.php", "w") or die("The settings file is inaccessible");
    echo "Opening / creating settings file...";
    echo "<br>Done!<hr>";
    echo "Writing to settings file...";
    $settingsNew = <<<EOD
            <?php
//
//This is the settings page - Server access information as well as other information that you can specify can be stored here for easy access.
//Make sure to change the values from default if they do not match yours - You should always have a root password if you want security!
\$settings = array(
    "mysqlUsername" => "$user",
    "mysqlPassword" => "$pass",
    "mysqlIp" => "localhost",
    "mysqlPort" => "$port",
    "mysqlDatabase" => "$database",
    "version" => "0.2",
    "title" => "Blah³",
    "hyperLinkPrefix" => "http://localhost/",
    "allowLogins" => true,
    "offlineMode" => false,
    "sidebarAboutText" => "Blah³ is an open sourced social networking software - It is free, simple, and just plain awesome!",
    //Offline Mode will redirect ALL visitors to an offline screen to allow maintenance without glitches occuring to users
);
\$pluginList = array(
    //Syntax: ' "pluginName" => "plugins/plugin.pluginName.php" '
    "testPlugin" => "plugins/plugin.testPlugin.php"
    //clearDatabase is not enabled by default and will not show up or run without specifying in the configuration
    "clearDatabase" => "plugins/plugin.clearDatabase.php"
);
EOD;
    fwrite($settings, $settingsNew);
        echo "<br>Done!<hr>";
}
}else{
    echo "The settings cannot be reconfigured unless specified in the settings file";
}