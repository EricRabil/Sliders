<?php
include 'settings.errorpage.php';
$errCode = $_GET['error'];
$tabTitle = $pages[$errCode+"_tabTitle"];
$pageTitle = $pages[$errCode+"_pageTitle"];
$pagecontent = $pages[$errCode+"_pageContent"];
echo "<title>$tabTitle</title>";
?>