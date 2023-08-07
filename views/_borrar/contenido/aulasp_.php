
<div class="container"> 

    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Lista de Aulas</div>
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
                    {datos}
                        <tr>
                            <!--<td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td></td>-->
                            <td><strong>{codigo}</strong></td>
                            <td>{Nivel}</td>
                            <td>{Grado}</td>
                            <td>{Materia} </td>
                        </tr>
                    {/datos}
                </tbody>

            </table>

        </center> 

    </div>

</div>




