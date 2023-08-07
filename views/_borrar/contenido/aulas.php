
<div class="container"> 

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Busqueda</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">Campos para la Busqueda</div>
                <div class="panel-footer">Panel Footer</div>
            </div>
        </div>
    </div> 

    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Nuevo Registro</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">Campos para el Nuevo Registro</div>
                <div class="panel-footer">Panel Footer</div>
            </div>
        </div>
    </div> 
    
    
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Materias - Capitulos</div>
        </div>  
        <center>                          
            <table id="exampledt" class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display" cellspacing="0" width="90%">
                <thead>
                <!--<a href="#" class="btn btn-primary btn-xs pull-left"><b>+</b> Add new categories</a><br>-->
                <tr>
<!--                    <th class="text-center">Action</th>-->
                    <th>Aula</th>
                    <th>Nivel</th>
                    <th>Grado</th>
                    <th>Materia</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
<!--                        <th class="text-center">Action</th>-->
                        <th>Aula</th>
                        <th>Nivel</th>
                        <th>Grado</th>
                        <th>Materia</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($datos as $news_item): ?>
                        <tr>
                            <!--<td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td></td>-->
                            <td><strong><?php echo $news_item['codigo']; ?></strong></td>
                            <td><?php echo $news_item['Nivel']; ?></td>
                            <td><?php echo $news_item['Grado']; ?></td>
                            <td><?php echo $news_item['Materia']; ?> </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>

        </center> 

    </div>

</div>




