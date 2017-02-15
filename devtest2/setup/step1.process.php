<?php
$mysqlUser = strip_tags($_POST['mysqlUser']);
$mysqlPass = strip_tags($_POST['mysqlPass']);
$mysqlIP = strip_tags($_POST['mysqlIP']);
$mysqlDB = strip_tags($_POST['mysqlDBname']);
$mysqlPort = strip_tags($_POST['mysqlPort']);
$settings = "settings.php";
if(empty($mysqlUser) || empty($mysqlPass) || empty($mysqlIP) || empty($mysqlDB) || empty($mysqlPort)){
  echo "BONK!";
  echo "<hr>";
  echo "ALL Forms must be filled out!";
}else{
  //Run Processing Script [Append The Values to the settings file]
  //REF - $link = mysqli_connect("myhost","myuser","mypassw","mybd") or die("Error " . mysqli_error($link)); 
  
  //After appending to the settings file, connect to SQL DB - If DB does not exist, create - If exist, wipe and begin setup
  //Tables: users - admins - sessions - news - settings
  //Users Columns & Preference : name / Varchar 16 values - password / Varchar 256 values (high number is for the hashes) - email / Varchar 32 values (Won't be used at first but use will be implemented) - dateRegistered / Varchar 64 values - banned / Varchar 5 values (true / false - bool will be used when it is more understood)
  //Can't get mysqli_error or to connect w/o database - TODO Stub 001
  $con = mysqli_connect($mysqlIP,$mysqlUser,$mysqlPass) or die("BONK <hr>" . mysqli_error());
  if($con){
    echo true;
  }
  $fh = fopen($myFile, 'w') or die("Severe error; The settings file does not exist. Please create the settings file.");
  $stringData = <<<EOD
<?php
//This is the settings script. All configuration values should be stored here in the proper arrays.
\$sql = [
    'ip' => '$mysqlIP',
    'port' => '$mysqlPort',
    'username' => '$mysqlUser',
    'password' => '$mysqlPass',
    'database' => '$mysqlDB',
    
];
\$general = [
    'title' => 'Sliders Setup',
    'url' => './',
    'showPHPErrors' => true,
    'showFooterMessage' => false,
    'footerMessage' => 'Footer Message'
];
\$homeScreen = [
    'title' => 'Sliders Setup Script',
    'showMessage' => false,
    'message' => '',
    'showLoginButtons' => false,
    'showNews' => false,
    'showNewsMessage' => false,
    'newsMessage' => ''
];
\$sideBar = [
    'showTwitterButton' => false,
    'twitterLink' => '#',
    'showFacebookButton' => false,
    'facebookLink' => '#',
    'showGithubButton' => true,
    'githubLink' => 'https://www.github.com/Clunker5/sliders',
    'showDribbleButton' => false,
    'dribbleLink' => '#',
    'showMailButton' => false,
    'mailLink' => '#',
    'showUserRank' => true,
    'showUserPicture' => true,
];
\$sideBarExtraEntries = [
    //The following is an example on how the entries should be made - Use the FontAwesome Icon Registry - http://fortawesome.github.io/Font-Awesome/icons/
    //'1' => 'Title|\|Link|\|FontsAwesome Icon ID',
    //The |\| is necessary, or the value will not break apart.
    //'1' => 'Example Button|\|#|\|fa-circle-thin',
];

EOD;
  fwrite($fh, $stringData);
  fclose($fh);
  }
?>