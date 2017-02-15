<?php
include 'settings.php';
include 'firstrun.php';
if($general['showPHPErrors']){
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
}
if($firstrun){
    header('Location: ./setup');
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<!--
	CSS Design by HTML5 UP - Prologue
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><? echo $general['title']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script <?php echo 'src="'.$general['url'].'css/ie/html5shiv.js"'; ?>></script><![endif]-->
		<script <?php echo 'src="'.$general['url'].'js/jquery.min.js"'; ?>></script>
		<script <?php echo 'src="'.$general['url'].'js/jquery.scrolly.min.js"'; ?>></script>
		<script <?php echo 'src="'.$general['url'].'js/jquery.scrollzer.min.js"'; ?>></script>
		<script <?php echo 'src="'.$general['url'].'js/skel.min.js"'; ?>></script>
		<script <?php echo 'src="'.$general['url'].'js/skel-layers.min.js"'; ?>></script>
		<script <?php echo 'src="'.$general['url'].'js/init.js"'; ?>></script>
                <style>
                    body {
	overflow: hidden;
}

/* Preloader */

#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#fff; /* change if the mask should have another color then white */
    z-index:99; /* makes sure it stays on top */
}

#status {
    width:200px;
    height:200px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    background-image:url(../img/status.gif); /* path to your loading animation */
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px; /* is width and height divided by two */
}
                </style>
		<noscript>
			<link rel="stylesheet" <?php echo 'href="'.$general['url'].'css/skel.css"'; ?> />
			<link rel="stylesheet" <?php echo 'href="'.$general['url'].'css/style.css"'; ?>/>
			<link rel="stylesheet" <?php echo 'href="'.$general['url'].'css/style-wide.css"'; ?> />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
        <script type="text/javascript" <?php echo "src='".$general['url']."js/jquery.min.js'"; ?>></script>
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
</script>
	<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
		<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img <?php echo 'src="'.$general['url'].'images/avatar.jpg"'; ?> alt="" /></span>
							<h1 id="title">Username</h1>
							<p>Standard User or Administrator</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>


                                                                <?php
                                                                if($page = 'home'){
                                                                    echo '<li><a href="#" id="top-link" class="skel-layers-ignoreHref scrollzer-locked active"><span class="icon fa-home">Home</span></a></li>';
                                                                }else{
                                                                    echo '<li><a href="#" id="top-link" class="skel-layers-ignoreHref scrollzer-locked active"><span class="icon fa-home">Home</span></a></li>';
                                                                }
                                                                foreach($sideBarExtraEntries as $sideBarData){
                                                                    $values = explode("|\|", $sideBarData);
                                                                    echo '<li><a href="'.$values[1].'" id="top-link" class="skel-layers-ignoreHref"><span class="icon '.$values[2].'">'.$values[0].'</span></a></li>';
                                                                }
                                                                ?>
                                                        </ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
                                                    <?php
                                                    if($sideBar['showTwitterButton']){
                                                        ?>
                                                    <li><a href=<? echo "'".$sideBar['twitterLink']."'"; ?> class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                                        <?php
                                                    }
                                                    if($sideBar['showFacebookButton']){
                                                        ?>
                                                    <li><a href=<? echo "'".$sideBar['facebookLink']."'"; ?> class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                                        <?php
                                                    }
                                                    if($sideBar['showGithubButton']){
                                                        ?>
                                                    <li><a href=<? echo "'".$sideBar['githubLink']."'"; ?> class="icon fa-github"><span class="label">Github</span></a></li>
                                                        <?php
                                                    }
                                                    if($sideBar['showDribbleButton']){
                                                        ?>
                                                    <li><a href=<? echo "'".$sideBar['dribbleLink']."'"; ?> class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                                        <?php
                                                    }
                                                    if($sideBar['showMailButton']){
                                                        ?>
                                                    <li><a href=<? echo "'".$sideBar['mailLink']."'"; ?> class="icon fa-envelope"><span class="label">Email</span></a></li>
                                                        <?php
                                                    }

                                                    ?>
						</ul>

				</div>

			</div>
