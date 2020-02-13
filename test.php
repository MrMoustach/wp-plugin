<div class="test">
    <h1>This is a test heading to test the page</h1>
</div>
<?= get_option('siteurl',false); ?>
<form action="#" method="POST">
    <input type="text" name="url" value="<?= get_option('blogname',false) ?>">
    <input type="submit" name="submit" value="Change">
</form>
<?php
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['url'])){
            update_option('blogname',$_POST['url'],null);
        }
    }
?>
