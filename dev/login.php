<?php
include 'corepage.php';
$page = "auth.login";
echo '<form method="post" action="'.hyperLinkPrefix.'process.login.php">';
?>
<article class="box post post-excerpt">
        <header>
                <h2><a href="#">Logging into <?php echo title;?></a></h2>
                <p>Please enter your login information</p>
                
                <p>Or, you can
                <?php
                echo "<a href='";
                echo hyperLinkPrefix;
                echo "auth/register'>";
                ?>
                register</a>.</p>
        </header>
    <div style="width:300px;">
        <label>Username</label>
    <input type="text" size='10'name="username">
    <br>
    <label>Password</label>
    <input type="password" name="password">
    <br>
    <br>
    </div>
    <button type="submit" class='button'>Login</button>
</article>
</form>
<?php
include 'header.php';