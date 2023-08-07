
<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="texto"></textarea><br />
    
	<label for="cantidad">Cantidad</label>
	<input type="input" name="cantidad" /><br />

	<input type="submit" name="submit" value="Create news item" />

</form>

<hr />
<p><a href="<?php echo site_url("news" ); ?>">List News</a></p>
<hr />