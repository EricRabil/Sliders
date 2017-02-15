<h1>The settings will be completely wiped and re-configured, including the plugins section!
<form method="post" action="process.setup.php">
    <label>MySQL IP Address - Leave blank if localhost</label><br>
<input type="text" name="mysql.ip" placeholder="localhost">
<br>
<label>MySQL Username - Root is not recommended</label><br>
<input type="text" name="mysql.user">
<br>
<label>MySQL Password</label><br>
<input type="text" name="mysql.password">
<br>
<label>MySQL Database</label><br>
<input type="text" name="mysql.database">
<hr>
<label>MySQL Port</label><br>
<input type="text" name="mysql.port" value="3306">
<hr>
<input type="submit" value="Configure">
</form>