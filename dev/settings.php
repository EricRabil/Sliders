            <?php
define("mysqlDatabase", "database");
define("mysqlPort", "3306");
define("mysqlIp", "localhost");
define("mysqlUsername", "root");
define("mysqlPassword", "rD9tZwwZTUQqRex3");
define("version", "0.3");
define("title", "Sliders");
define("hyperLinkPrefix", "http://sliders.tregnet.com/dev/");
define("allowLogins", true);
define("offlineMode", false);
define("sidebarAboutText", "Default sidebar text - You can change this in the settings script.");
//It is a MUST that you set this to false after you perform an install, as the install script will still delete the database every time it is run.
define("allowInstall", true);
define("allowSettingsReconfigure", false);
define("debug", true);
//IT IS ____HiGhLy____ RECOMMENDED TO CHANGE THE ENCRYPTION KEY - IF YOU DO NOT, YOU WILL BE HIGHLY VULNERABLE TO HACKS
$key = "I1think2that3you4should5change6this7for8security9purposes10.";
define("encryptionIV", "You1should2probably3change4this4too5.");
define("encryptionKey", $key);
unset($key);
$pluginList = array(
    //Syntax: ' "pluginName" => "plugins/plugin.pluginName.php" '
    "testPlugin" => "plugins/plugin.testPlugin.php",
    //clearDatabase is not enabled by default and will not show up or run without specifying in the configuration
    "clearDatabase" => "plugins/plugin.clearDatabase.php"
);