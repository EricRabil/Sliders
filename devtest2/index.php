<?php
$page = 'home';
include 'corepage.php';
?>
<div id="main">
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><? echo $homeScreen['title']; ?></h2>
                                                                <?php
                                                                if($homeScreen['showMessage']){
                                                                    echo "<p>".$homeScreen['message']."</p>";
                                                                }
                                                                ?>
							</header>
							<?php
                                                        if($homeScreen['showLoginButtons']){?>
							<footer>
								<a <?php echo "href='".$general['url']."login/'"; ?> class="button scrolly">Log In</a>
                                                                <a <?php echo "href='".$general['url']."register/'"; ?> class="button scrolly">Register</a>
							</footer>
                                                    <?php
                                                        }?>

						</div>
					</section>
					<section id="newsTop" class="two">
						<div class="container">
					
							<header>
                                                            <h2>News</h2>
							</header>
							<?php
                                                        if($homeScreen['showNewsMessage']){
                                                        ?>
							<p><? echo $homeScreen['newsMessage']; ?></p>
                                                        <?php
                                                        }
                                                        ?>
						</div>
					</section>
			</div>
<?php
include 'footer.php';
?>