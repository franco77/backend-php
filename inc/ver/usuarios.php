<?php 
         $titulo    = 'Datos De Usuario';
                


                $sql = "SELECT * FROM $tb_usuarios";
                $result = $conexion->query($sql);
                $rows = $result->num_rows;

             
?>

 
                   
                        <?php  if ($rows > 0) { 
                        foreach ($result as $fila) {
                        ?> 
                            <!-- Modal -->
                            <div class="modal fade" id="usuarios-<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width: 900px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $titulo; ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            

                                              
                                                        
                                                <div class="table-responsive">
                                                  <table width="100%" class="table table-bordered" id="table-edit">
                                                   <tbody>
                                                    <tr>
                                                      <th scope="col">id</th>
                                                      <th><?php echo $fila['id']; ?></th>
                                                    </tr>
                                                    <tr> 
                                                      <th scope="col">Usuario</th>
                                                      <td><?php echo $fila['usuario']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Email</th>
                                                      <td><?php echo $fila['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Password</th>  
                                                      <td><?php echo '******************'; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Nombre</th>
                                                      <td><?php echo $fila['nombre']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Apellido</th> 
                                                      <td><?php echo $fila['apellido']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Telefono</th>
                                                      <td><?php echo $fila['telefono']; ?></td>
                                                    </tr>
                                                    <tr>
                                                       <th scope="col">Perfil</th>
                                                      <td><?php echo $fila['perfil']; ?></td>
                                                    </tr>  
                                                   
                                                  </tbody>
                                                </table>
                                               </div>

                                                    




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                              
                            </div>
                           
                         <?php } } ?>