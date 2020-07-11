<div style="padding: 20px">

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" /><br />
    <p/>
    <label for="text">Content</label>
    <input type="text" name="text"/><br />
    
    <p/>
    <input type="submit" name="submit" value="Create news item" />

</form>


</div>
