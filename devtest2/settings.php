<?php
//This is the settings script. All configuration values should be stored here in the proper arrays.
$general = [
    'title' => 'Title',
    'url' => '/',
    'showPHPErrors' => true,
    'showFooterMessage' => true,
    'footerMessage' => 'Footer Message'
];
$homeScreen = [
    'title' => 'Sliders Instance',
    'showMessage' => true,
    'message' => 'This is a development instance of Sliders - The database can and will be wiped at any given time for development purposes.',
    'showLoginButtons' => true,
    'showNews' => true,
    'showNewsMessage' => true,
    'newsMessage' => 'This is the news board - Network announcements will appear here. This feature can be disabled in the settings file if you wish.'
];
$sideBar = [
    'showTwitterButton' => true,
    'twitterLink' => '#',
    'showFacebookButton' => true,
    'facebookLink' => '#',
    'showGithubButton' => true,
    'githubLink' => '#',
    'showDribbleButton' => true,
    'dribbleLink' => '#',
    'showMailButton' => true,
    'mailLink' => '#',
    'showUserRank' => true,
    'showUserPicture' => true,
];
$sideBarExtraEntries = [
    //The following is an example on how the entries should be made - Use the FontAwesome Icon Registry - http://fortawesome.github.io/Font-Awesome/icons/
    //'1' => 'Title|\|Link|\|FontsAwesome Icon ID',
    //The |\| is necessary, or the value will not break apart.
    '1' => 'Example Button|\|#|\|fa-circle-thin',
];
