<?php
include __DIR__ . '/../corepage.php';
$newsTitle = $_POST['title'];
$newsSubtitle = $_POST['subtitle'];
$newsContent = $_POST['content'];
$month = date("M");
$month_num = date("j");
$date_hidden = date("Y").date("m").date("d").date("H").date("i").date("s");
$newsDatetime = 
$con = new mysqli(mysqlIp, mysqlUsername, mysqlPassword, mysqlDatabase, mysqlPort);
if (mysqli_connect_errno()) {
    printf("Could not connect to MySQL server! Check the information in '/settings.php' and try again.");
    exit();
}
if ($stmt = $con->prepare("INSERT INTO `database`.`news` (`title`, `subtitle`, `content`, `datetime`, `month`, `monthNum`) VALUES (?, ?, ?, ?, ?, ?);")){
    $stmt->bind_param("ssssss", $newsTitle, $newsSubtitle, $newsContent, $date_hidden, $month, $month_num);
    $stmt->execute();
    $stmt->close();
}
if(empty(mysqli_error($con))){
        echo "Done!";
    }else{
        echo mysqli_error($con);
    }
mysqli_close($con);