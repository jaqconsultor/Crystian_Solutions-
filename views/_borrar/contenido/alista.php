 <div class="panel panel-warning" >
                        <div class="panel-heading">
                            <div class="panel-title">Lista de Aulas</div>
                        </div>  
                        <div style="padding-top:30px" class="panel-body" >
                            <table id="exampledt1" class="table table-border table-bordered table-cell-hover table-condensed table-hover table-hovered table-responsive table-striped display" cellspacing="0" width="90%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Action</th>
                                        <th>Aula</th>
                                        <th>Nivel</th>
                                        <th>Año/Grado</th>
                                        <th>Materia/Curso</th>
                                        <th>Estado</th>
                                        <th>Pais</th>
                                        <th>Docente</th>
                                        <th>Objetivos</th>
                                        <th>Requisitos</th>
                                        <th class="text-center">Funciones Especiales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datos as $item) { ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo site_url('contenido/aulas/capitulos'); ?>/<?php echo $item["codigo"] ?>"> Ver Capitulos </a>
                                            </td>
                                            <td><?php echo $item["codigo"] ?></td>
                                            <td><?php echo $item["Nivel"] ?></td>
                                            <td><?php echo $item["Grado"] ?></td>
                                            <td><?php echo $item["Materia"] ?></td>
                                            <td><?php echo $item["ctd_inscritos"] ?></td>
                                            <td><?php echo $item["Pais"] ?></td>
                                            <td><?php echo $item["Instructor"] ?></td>  
                                            <td><?php echo $item["Objetivos"] ?></td> 
                                            <td><?php echo $item["Requisitos"] ?></td> 
                                            <td><button type='button' class='btn btn-danger'>Quitar</button></td>
                                        </tr>
                                    <?php } ?>     
                                </tbody>
                            </table>
                        </div> 
                    </div>