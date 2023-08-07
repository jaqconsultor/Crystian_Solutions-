
<div class="container">

	<table id="exampledt"
		class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display"
		cellspacing="0" width="90%">
		<thead>
			<!--<a href="#" class="btn btn-primary btn-xs pull-left"><b>+</b> Add new categories</a><br>-->
			<tr>
				<!--                    <th class="text-center">Action</th>-->
				<th>nu_control</th>
				<th>fe_factura</th>
				<th>nu_factura</th>
				<th>nu_comanda</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<!--                        <th class="text-center">Action</th>-->
				<th>nu_control</th>
				<th>fe_factura</th>
				<th>nu_factura</th>
				<th>nu_comanda</th>
			</tr>
		</tfoot>
		<tbody>
                    <?php foreach ($datos as $news_item): ?>
                        <tr>
				<!--<td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td></td>-->
				<td><strong><?php echo $news_item['id']; ?></strong></td>
				<td><?php echo $news_item['nb_aereolinea']; ?></td>
				<td><?php echo $news_item['code_aereo']; ?></td>
				<td><?php echo $news_item['m_tarifa']; ?> </td>
			</tr>
                    <?php endforeach ?>
                </tbody>
	</table>

</div>


