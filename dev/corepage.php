<?php
function sliders_encrypt_nosalt($variable){
	//This encryption CANNOT be decrypted with a salt! This will typically be used for passwords in this program
    return sha1(md5($variable));
}
include 'settings.php';
function sliders_encrypt($string){
	$method="AES-256-CBC";
	$encKey=hash('sha256', encryptionKey);
	$encIv=substr(hash('sha256', encryptionIV), 0, 16);
	return base64_encode(openssl_encrypt($string, $method, $encKey, 0, $encIv));
}
function sliders_decrypt($string){
	$method="AES-256-CBC";
	$encKey=hash('sha256', encryptionKey);
	$encIv=substr(hash('sha256', encryptionIV), 0, 16);
	return openssl_decrypt(base64_decode($string), $method, $encKey, 0, $encIv);
}
function getData($name){
}
function setData($name, $value){
}
if(debug){
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL ^ E_STRICT);
}else{
    echo "<!-- SETTINGS.DEBUG IS DISABLED -->";
}
$header = array();
foreach($pluginList as $pluginName => $pluginPath){
    
    include $pluginPath;
    if($_SERVER[$pluginName.".enabled"]){
    //$testPlugin[] has the same name as $pluginName, but in this foreach section I don't KNOW the array name, so how can I use $pluginName to get the information of $testPlugin[]
    if($_SERVER[$pluginName.".showHeaderButton"]){
    $header[$_SERVER[$pluginName.".headerTitle"]] = $_SERVER[$pluginName.".headerURL"];
    }else{
    //Plugin said to not show a navigation button - It is a function plugin and not a page plugin or function/page combo.
    }
    }
}
?>
<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script <?php echo "src='".hyperLinkPrefix."js/jquery.min.js'";?>></script>
                <script <?php echo "src='".hyperLinkPrefix."js/skel.min.js'";?>></script>
                <script <?php echo "src='".hyperLinkPrefix."js/skel-layers.min.js'";?>></script>
                <script <?php echo "src='".hyperLinkPrefix."js/init.js'";?>></script>
                <link rel="stylesheet" <?php echo "href='".hyperLinkPrefix."css/skel.css'";?> />
                <link rel="stylesheet" <?php echo "href='".hyperLinkPrefix."css/style.css'";?> />
                <link rel="stylesheet" <?php echo "href='".hyperLinkPrefix."css/style-desktop.css'";?> />
                <link rel="stylesheet" <?php echo "href='".hyperLinkPrefix."css/style-wide.css'";?> />
	</head>
        <style>
            	#button
	{
		font-family: 'Open Sans Condensed', sans-serif;
		font-weight: 700;
		font-size: 2em;
		letter-spacing: 0.1em;
                border: none;
                height: 20px;
	}
	
		#button
		{
			display: block;
			//background-color: #c94663;
			background-image: url('images/bg01.png');
			padding: 0.875em 0.25em;
			//border-radius: 0.2em;
			text-align: center;
			//box-shadow: inset 0px 0px 0px 1px rgba(255,255,255,0.15), 0 0.025em 0.15em 0em rgba(0,0,0,0.25);
			text-decoration: none;
			color: #fff;
                        font-size: 20px;
                        position:relative;
                        text-align:justify;
                        bottom:15px;
		}
        </style>
        <body class="left-sidebar">
			<div id="wrapper">
					<div id="content">
						<div class="inner">