<?php 
         $titulo    = 'Lista De Eventos';
         $subtitulo = 'Mis Eventos';         


                $sql = "SELECT * FROM $tb_eventos";
                $result = $conexion->query($sql);
                $rows = $result->num_rows;

             
?>

            






        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $titulo; ?></h1>
                    </div>
                </div>






                <div class="row">
                    <div class="col-lg-12">
                    <div id="add-btn"><a href="eventos.php" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Evento</a></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $subtitulo; ?>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Contenido -->

                                  
                                   
                                <table width="100%" class="table table-striped table-bordered table-hover" id="tabla-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Nota</th>
                                            <th>Desde</th>
                                            <th>Hasta</th>
                                            <th>Prioridad</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php  if ($rows > 0) { 
                                foreach ($result as $fila) {
                                ?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $fila['id_evento']; ?></td>
                                            <td><?php echo $fila['titulo_evento']; ?></td>
                                            <td><?php echo $fila['nota_evento']; ?></td>
                                            <td><?php echo $fila['desde_evento']; ?></td>
                                            <td><?php echo $fila['hasta_evento']; ?>4</td>
                                            <td><?php echo $fila['prioridad_evento']; ?></td>
                                            <td><?php echo $fila['estado_evento']; ?></td>
                                            
                                            <td>
                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#eventos-<?php echo $fila['id_evento']; ?>">
                                            <i class="fa fa-search"></i></button>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a data-href="inc/eliminar/evento.php?id_evento=<?php echo $fila['id_evento']; ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash"></i></a>
                                             

                                            </td>
                                            
                                        </tr>
                                    <?php } } ?> 
                                    </tbody>
                                </table>
                                    


                                
                            </div>
                        </div>
                    </div>
                </div>



         </div>
         
    </div>

