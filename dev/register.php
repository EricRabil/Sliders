<?php
include 'corepage.php';
$page = "auth.register";
?>
<article class="box post post-excerpt">
    <header>
        <h2><a><?php echo title; ?> Registration</a></h2>
    </header>
<form method="post" <?php echo "action='".hyperLinkPrefix."process.register.php'"; ?>>
<div style="width:300px;">
    <label>Username</label>
    <input type="text" name="username">
    <br>
    <label>Password</label>
    <input type="password" name="password">
    <br>
    <label>Verify Password</label>
    <input type="password" name="verifyPassword">
    <button type="submit">Submit</button>
    </div>
</form>
</article>
<?php
include 'header.php';