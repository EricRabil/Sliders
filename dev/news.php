<?php
//This is the news management page - Creating, modifying, and deleting pages will be handled here.
include 'corepage.php';
$page = "newsManager";
?>
<article class="box post post-excerpt">
    <header>
        <h2><a>News Manager</a></h2>
        <hr>
        <p>Create a post</p>
        <hr>
    </header>
    <form method='post' action='news.create.php'>
    <input type='text' class='text' name='title'>
    <br>
    <input type='text' class='text' name='subtitle'>
    <br>
    <textarea name='content' rows='20'></textarea>
    <button type='submit'>Submit</button>
    </form>
    <p>
        
    </p>
    <p>
        
    </p>
</article>
<?php
include 'header.php';