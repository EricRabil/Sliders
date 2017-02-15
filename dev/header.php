</div><!-- -->

			</div>
<div id="sidebar">
					
						<!-- Logo -->
							<h1 id="logo"><a href="#"><?php echo title." ".version;?></a></h1>
					
						<!-- Nav -->
							<nav id="nav">
								<ul>
                                                                        <?php
                                                                        if($page === "home"){
                                                                            echo "<li class='current'><a href='".hyperLinkPrefix."'>Home</a></li>";
                                                                        }else{
                                                                            echo "<li><a href='".hyperLinkPrefix."'>Home</a></li>";
                                                                        }
                                                                        ?>
                                                                        <?php
                                                                        if($page === "newsManager"){
                                                                            echo "<li class='current'><a href='".hyperLinkPrefix."admin/news'>News Manager</a></li>";
                                                                        }else{
                                                                            echo "<li><a href='".hyperLinkPrefix."admin/news'>News Manager</a></li>";
                                                                        }
                                                                        ?>
                                                                    <?php
                                                                        if($page === "auth.login"){
                                                                            echo "<li class='current'><a href='".hyperLinkPrefix."auth/login'>Login</a></li>";
                                                                        }else{
                                                                            echo "<li><a href='".hyperLinkPrefix."auth/login'>Login</a></li>";
                                                                        }
                                                                        ?>
                                                                    <?php
                                                                    foreach($header as $title => $url){
                                                                        if($page === $title){
                                                                            echo "<li class='current'><a href='".hyperLinkPrefix.$url."'>$title</a></li>";
                                                                        }else{
                                                                            echo "<li><a href='".hyperLinkPrefix.$url."'>$title</a></li>";
                                                                        }
                                                                    }
                                                                    ?>
								</ul>
							</nav>

						<!-- Search -->
							<section class="box search">
								<form method="post" action="#">
									<input type="text" class="text" name="search" placeholder="Search" />
								</form>
							</section>
					
						<!-- Text -->
							<section class="box text-style1">
								<div class="inner">
									<p>
                                                                            <?php
                                                                            echo sidebarAboutText;
                                                                            ?>
									</p>
								</div>
							</section>
						
						<!-- Copyright -->
							<ul id="copyright">
                                                            <li><a href='https://github.com/Clunker5/sliders/'>Sliders Open Source Software</a></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>

</div>
</div>

	</body>
</html>