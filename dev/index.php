<?php
include 'corepage.php';
$page = "home";
$con = mysqli_connect(mysqlIp, mysqlUsername, mysqlPassword, mysqlDatabase, mysqlPort);
$result = mysqli_query($con, "SELECT * FROM `news` ORDER BY 'id' DESC");
while($rows = mysqli_fetch_array($result)){
    $title = $rows['title'];
    $subtitle = $rows['subtitle'];
    $content = nl2br($rows['content']);
?>
<article class="box post post-excerpt">
									<header>
										<h2><a><?php echo $title; ?></a></h2>
										<p><?php echo $subtitle; ?></p>
									</header>
									<div class="info">
										<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
										<ul class="stats">
											<li><a href="#" class="icon fa-eye">0</a></li>
										</ul>
									</div>
									<p>
										<?php echo $content; ?>
									</p>
								</article>
<?php
}
?>

<?php
mysqli_close($con);
include 'header.php';
?>