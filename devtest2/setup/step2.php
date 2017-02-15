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
							</div>
							</section>
							<section id='newsTop' class="two">
							  <div class="container">
							    <header>
							      <h2>Step 2 of Sliders setup</h2>
							    </header>
							    <p>In Step 2, you will provide the administrator username, password, and email. These are mandatory. However, you can optionally include contact information, donation information, and additional user information. These options can be changed later if you do not choose to do this now.</p>
							    <p><b>A * means the input is mandatory.</b></p>
							    <hr>
							    <form method='post' action='./step2.process.php'>
							    <input type='text' name='admin_username' placeholder='Administrator Username*' size=50%>
							    <br>
							    <input type='password' name='admin_password' placeholder='Administrator Password*' size=50%>
							    <br>
							    <input type='text' name='admin_email' placeholder='Administrator E-Mail' size=50%>
							    <br>
							    <input type='text' name='optional_contact_address' placeholder='(Optional) Address' size=50%>
							    <br>
							    <input type='text' name='optional_contact_number' placeholder='(Optional) Phone Number' size=50%>
							    <br>
							    <input type='text' name='optional_contact_email' placeholder='(Optional) Contact E-Mail' size=50%>
							    <br>
							    <input type='text' name='optional_paypal_email' placeholder='(Optional) PayPal E-MAil' size=50%>
							    <br>
							    <label>User hierarchy
							    <input type='checkbox' name='optional_enable_user_hierarchy' value='1'></label><br>
							    <label>**If Contact E-Mail is blank, the admin e-mail will be used.</label>
							    <br>
							    <button type='submit'>Submit</button>
							    </form>
							  </div>
							</section>