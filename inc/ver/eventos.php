<?php 
         $titulo    = 'Lista De Eventos';
         $subtitulo = 'Mis Eventos';         


                $sql = "SELECT * FROM $tb_eventos ORDER BY fecha_eveto DESC";
                $result = $conexion->query($sql);
                $rows = $result->num_rows;

             
?>

 
                   
                        <?php  if ($rows > 0) { 
                        foreach ($result as $fila) {
                        ?> 
                            <!-- Modal -->
                            <div class="modal fade" id="eventos-<?php echo $fila['id_evento']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width: 900px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Eventos</h4>
                                        </div>
                                        <div class="modal-body">
                                            

                                              
                                                        
                                                <div class="table-responsive">
                                                  <table width="100%" class="table table-bordered" id="table-edit">
                                                   <tbody>
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <td><?php echo $fila['id_evento']; ?></td>
                                                    </tr>
                                                    <tr> 
                                                      <th scope="col">Titulo</th>
                                                      <td><?php echo $fila['titulo_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Nota</th>
                                                      <td><?php echo $fila['nota_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Dsde</th>  
                                                      <td><?php echo $fila['desde_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Hasta</th>
                                                      <td><?php echo $fila['hasta_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Autor</th> 
                                                      <td><?php echo $fila['autor_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th scope="col">Estado</th>
                                                      <td><?php echo $fila['estado_evento']; ?></td>
                                                    </tr>
                                                    <tr>
                                                       <th scope="col">Creado El</th>
                                                      <td><?php echo $fila['fecha_eveto']; ?></td>
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