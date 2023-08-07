<hr />
<p><a href="<?php echo site_url("news" ); ?>">List News</a></p>
<hr />
<h2>Modify a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['id']) ?>

	<label for="id">Id</label>
	<input type="input" name="id"  value="<?php echo  $news_item['id']; ?>"/><br />

	<label for="title">Title</label>
	<input type="input" name="title"  value="<?php echo  $news_item['title']; ?>"/><br />

	<label for="text">Text</label>
	<textarea name="texto"><?php echo $news_item['texto'];?></textarea><br />

	<label for="cantidad">cantidad</label>
	<input type="input" name="cantidad"  value="<?php echo  $news_item['cantidad']; ?>"/><br />

	<input type="submit" name="submit" value="Modify news item" />

</form>

