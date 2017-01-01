    <?php 
                
                $titulo    = 'Registro De Logs';
                $subtitulo = 'Lista De Logs';         
                $sql       = "SELECT * FROM $tb_logs";
                $result    = $conexion->query($sql);
                $rows      = $result->num_rows;
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
                                                            <th>Usuario</th>
                                                            <th>Tabla</th>
                                                            <th>Nivel</th>
                                                            <th>Ip</th>
                                                            <th>Navegador</th>
                                                            <th>Consulta</th>
                                                            <th>Fecha</th>
                                                            <th>Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php  if ($rows > 0) { 
                                                foreach ($result as $fila) {
                                                ?>  
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $fila['id_log']; ?></td>
                                                            <td><?php echo $fila['usuario_log']; ?></td>
                                                            <td><?php echo $fila['tabla_log']; ?></td>
                                                            <td><?php echo $fila['nivel_log']; ?></td>
                                                            <td><?php echo $fila['ip_log']; ?></td>
                                                            <td><?php echo $fila['navegador_log']; ?></td>
                                                            <td><?php echo $fila['consulta_log']; ?></td>
                                                            <td><?php echo $fila['fecha_log']; ?></td>
                                                            <td>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#usuarios-<?php echo $fila['id']; ?>">
                                                            <i class="fa fa-search"></i></button>
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

