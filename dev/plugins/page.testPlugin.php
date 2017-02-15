<?php
$page = "Test Plugin";
include __DIR__ . '/../corepage.php';
if($_SERVER[$pluginName.".enabled"]){
$page = "Test Plugin";
?>
<article class="box post post-excerpt">
									<header>
										<h2><a href="#">Test Plugin</a></h2>
										<p>Test Plugin</p>
									</header>
									<div class="info">
										<span class="date"><span class="month">Test<span>y</span></span> <span class="day">Plugin</span><span class="year">, 2014</span></span>
										<ul class="stats">
											<li><a href="#" class="icon fa-comment">Te</a></li>
											<li><a href="#" class="icon fa-heart">st</a></li>
											<li><a href="#" class="icon fa-twitter">Plu</a></li>
											<li><a href="#" class="icon fa-facebook">gin</a></li>
										</ul>
									</div>
									<p>
										<strong>Test Plugin</strong>
									</p>
								</article>
<?php
}else{
    echo "Plugin disabled";
}
include __DIR__ . '/../header.php';