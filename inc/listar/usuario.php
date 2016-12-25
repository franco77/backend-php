 <?php 
         $titulo    = 'Registro De Usuarios';
         $subtitulo = 'Lista De Usuarios';         


                $sql = "SELECT * FROM $tb_usuarios";
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
                       <div id="add-btn"><a href="a-usuarios.php" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Usuario</a></div>
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
                                                            <th>Password</th>
                                                            <th>Email</th>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Telefono</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php  if ($rows > 0) { 
                                                foreach ($result as $fila) {
                                                ?>  
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $fila['id']; ?></td>
                                                            <td><?php echo $fila['usuario']; ?></td>
                                                            <td><?php echo $fila['email']; ?></td>
                                                            <td><?php echo $fila['password']; ?>4</td>
                                                            <td><?php echo $fila['nombre']; ?></td>
                                                            <td><?php echo $fila['apellido']; ?></td>
                                                            <td><?php echo $fila['telefono']; ?></td>
                                                            <td>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#usuarios-<?php echo $fila['id']; ?>">
                                                            <i class="fa fa-search"></i></button>
                                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                             <a data-href="inc/eliminar/usuario.php?id=<?php echo $fila['id']; ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash"></i></a>

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

