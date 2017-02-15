<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sliders - The next 'thing'</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="/devtest2/js/jquery.min.js"></script>
		<script src="/devtest2/js/jquery.scrolly.min.js"></script>
		<script src="/devtest2/js/skel.min.js"></script>
		<script src="/devtest2/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/devtest2/css/skel.css" />
			<link rel="stylesheet" href="/devtest2/css/style.css" />
			<link rel="stylesheet" href="/devtest2/css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
                <style>
                    body {
	overflow: hidden;
}
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
	</head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
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
			<section id="header">
				<div class="inner">
                                        <img src='images/flatlogo.png' HEIGHT='100' WIDTH='100'>
					<h1>Hello! This is <strong>Sliders</strong>, a social reboot.<br /></h1>
					<p>If you may recall, a project called Blah³ was in existence, a long long time ago.
                                        <br />Blah³ is now gone, and in its place, Sliders is here! Sliders is an open-source,
                                        <br />free and simple social networking platform that anybody will be able to use.</p>
                                        <p>For those who are wondering, the Github project will be updated with the new theme
                                        <br />as soon as the basic features have been re-implemented.</p>
					<ul class="actions">
						<li><a href="/devtest2" class="button scrolly">Real-Time Development Preview</a></li>
					</ul>
				</div>
			</section>

	</body>
</html>
