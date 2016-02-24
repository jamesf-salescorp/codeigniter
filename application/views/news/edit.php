<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['slug']); ?>

<?php echo '<h2>'.$news_item['slug'].'</h2>';
 
    
echo '<label for="text">Title</label>';
echo '<input type="input" name="title" value="'.$news_item['title'].'"/><br />';

echo '<label for="text">Text</label>';
echo '<textarea name="text">'.$news_item['text'].'</textarea><br />'; ?>

    <input type="submit" name="submit" value="Edit news item" />

</form>