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
                                                            <h2>Step 1</h2>
							</header>
							  <p>In Step 1, you will provide the MySQL Username, Password, Database Name and IP Address. Please have these ready throughout the setup.</p>
						    <hr>
						    <form method="post" action="./step1.process.php">
						      <input name="mysqlUser" type="text" placeholder="MySQL Username"></input>
						      <br>
						      <input name="mysqlPass" type="password" placeholder="MySQL Password"></input>
						      <br>
						      <input name="mysqlDBname" type="text" placeholder="MySQL Database Name"></input>
						      <br>
						      <input name="mysqlIP" type="text" placeholder="MySQL IP Address"></input>
						      <br>
						      <input name="mysqlPort" type="text" placeholder="MySQL IP Port"></input>
						      <button type="submit">Submit</button>
						      <p>*By clicking submit, you consent to allowing a database wipe of the specified name and possible reconfiguration to your SQL server settings.*</p>
						    </form>
						</div>
					</section>
<?php
if($homeScreen['showNews']){
?>					
<section id="newsTop" class="three">
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
	
<?php
}
echo '</div>';
include 'footer.php';
?>
