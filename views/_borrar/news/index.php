<hr />
<p>
<a href="<?php echo site_url("news/create" ); ?>">Create New</a>
</p>
<hr />
<table width="80%" border="1">
  <tr>
    <td>Titulo</td>
    <td>Texto</td>
    <td>Cantidad</td>
    <td>Accion View</td>
    <td>Accion Edit</td>
    <td>Accion Delete</td>
  </tr>
  
 <?php foreach ($news as $news_item): ?>
  <tr>
    <td><strong><?php echo $news_item['title']; ?></strong></td>
    <td><?php echo $news_item['texto']; ?></td>
    <td><?php echo $news_item['cantidad']; ?></td>
    <td>
    <a href="<?php echo site_url("news/view/" . $news_item['id'] ); ?>">View</a></td>
    <td><a href="<?php echo site_url("news/edit/" . $news_item['id'] ); ?>">Edit</a></td>
    <td><a href="<?php echo site_url("news/delete/" . $news_item['id'] ); ?>">Delete</a></td>
  </tr>
<?php endforeach ?>
  
</table>
<p>&nbsp; </p>
