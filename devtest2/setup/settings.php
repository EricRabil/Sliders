<?php
//This is the settings script. All configuration values should be stored here in the proper arrays.
$sql = [
    'ip' => '',
    'port' => '',
    'username' => '',
    'password' => '',
];
$general = [
    'title' => 'Sliders Setup',
    'url' => './',
    'showPHPErrors' => true,
    'showFooterMessage' => false,
    'footerMessage' => 'Footer Message'
];
$homeScreen = [
    'title' => 'Sliders Setup Script',
    'showMessage' => false,
    'message' => '',
    'showLoginButtons' => false,
    'showNews' => false,
    'showNewsMessage' => false,
    'newsMessage' => ''
];
$sideBar = [
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
$sideBarExtraEntries = [
    //The following is an example on how the entries should be made - Use the FontAwesome Icon Registry - http://fortawesome.github.io/Font-Awesome/icons/
    //'1' => 'Title|\|Link|\|FontsAwesome Icon ID',
    //The |\| is necessary, or the value will not break apart.
    //'1' => 'Example Button|\|#|\|fa-circle-thin',
    '1' => '420 SMOKE DA WEED|\|http://weed.com|\|fa-lock'
];
