 <?php 
//Variables De Los Titulos 

    $titulo     = 'Mi Perfil De Usuario';
    $subtitulo  = 'Mis Datos Usuario';
    $subtitulo1 = 'Editar Datos'; 
    $subtitulo2 = 'Actualizar Contraseña'; 
    $subtitulo3 = 'Informacion';      


        $id=$_GET['id'];
        if(isset($id)){

                $sql = "SELECT * FROM $tb_usuarios WHERE id='$_SESSION[id]'";
                $result = $conexion->query($sql);
                $rows = $result->num_rows;
        }


        
?>

            


<style>
  .uploadButton, .multibox {
   background: transparent;
   border: none;
   }
   .multibox:hover {
    background: transparent;
}
</style>



        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $titulo; ?></h1>
                    </div>
                </div>






                          <div class="row"><!-- inicio De Row-1 -->
                                  <div class="col-lg-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <?php echo $subtitulo; ?>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <!-- Contenido -->

                                                  
                                                   
                                               
                                                <?php  if ($rows > 0) { 
                                                foreach ($result as $fila) {
                                                ?>  
                                                        
                                                <div class="table-responsive">
                                                  <table width="100%" class="table table-bordered" id="table-edit">
                                                   <tbody>

                                                      <tr>
                                                      <th scope="col">Avatar</th>
                                                      <th align="center"><img src="files/avatar/<?php echo $fila['avatar']; ?>" width="150" class="img-responsive img-circle" alt=""></th>
                                                    </tr>

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
                                                      <td><?php echo $fila['password']; ?></td>
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
                                                      <?php $foto_user = $fila['avatar']; ?>
                                                    <?php } } ?> 
                                            </div>
                                        </div>

                                    <!-- Este Panel Contiene Un Alert Informativo-->
                                    <div class="panel panel-default">
                                       <div class="panel-heading">
                                           <?php echo $subtitulo3; ?>
                                        </div>
                                            <div class="panel-body">
                                                <div class="alert alert-warning">
                                                  Si No Desea Actualizar La Contraseña Porfavor Dejar Los Campos Vacios <strong><i class="fa fa-warning"></i></strong>.
                                                </div>
                                           </div>
                                    </div>
                                    <!-- Fin Del Panel Informativo --> 


                                </div><!--este </div>  sierra la columna de 600px-->



              <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $subtitulo1; ?>
                        </div>
                           <div class="panel-body">
                              <form name="edit_login" action="inc/edit/perfil.php" method="post">



                                
                                 <div class="form-group ">
                                   <label class="control-label " for="usuario"> Avatar </label>
                                    <div class="input-group">
                                      <input class="form-control"  id="avatar" orakuploader="on" name="avatar" type="file"/>
                                      </div>
                                 </div>






                                 <div class="form-group ">
                                   <label class="control-label " for="usuario"> Usuario </label>
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="fa fa-user"></i>
                                      </div>
                                         <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo $fila['usuario']; ?>" />
                                    </div>
                                 </div>

                                 <div class="form-group ">
                                    <label class="control-label " for="email">Email</label>
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <i class="fa fa-envelope-o"></i>
                                          </div>
                                             <input class="form-control" id="email" name="email" type="text" value="<?php echo $fila['email']; ?>" />
                                        </div>
                                 </div>
                                 
                                 <div class="form-group ">
                                    <label class="control-label " for="nombre">Nombre</label>
                                      <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-external-link"></i>
                                       </div>
                                          <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $fila['nombre']; ?>" />
                                      </div>
                                 </div>

                                 <div class="form-group ">
                                     <label class="control-label " for="apellido"> Apellido</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                             <i class="fa fa-external-link-square"></i>
                                          </div>
                                            <input class="form-control" id="apellido" name="apellido" type="text" value="<?php echo $fila['apellido']; ?>" />
                                        </div>
                                 </div>

                                 <div class="form-group ">
                                   <label class="control-label " for="telefono">Telefono</label>
                                     <div class="input-group">
                                       <div class="input-group-addon">
                                           <i class="fa fa-phone"></i>
                                        </div>
                                          <input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo $fila['telefono']; ?>" />
                                      </div>
                                 </div>

                                 <div class="form-group ">
                                    <label class="control-label " for="perfil">Perfil</label>
                                      <textarea class="form-control" cols="40" id="perfil" name="perfil" rows="5"><?php echo $fila['perfil']; ?></textarea>
                                  </div>

                                  <div class="form-group">
                                    <div>
                                      <button class="btn btn-primary" name="edit" type="submit">Editar</button>
                                      </div>
                                      </div>
                                      <input type="hidden" name="id" value="<?php echo $fila['id']; ?>"></input>
                                    
                                 
                                 </form>
                         
                            </div>
                      </div>
                   </div>

        </div><!-- Fin De Row-1 -->
                                                     
      

              <!-- Cambio de Password -->

                              <div class="row">
                                <div class="col-md-6"></div>
 
                                 
                                  <div class="col-md-6">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <?php echo $subtitulo2; ?>
                                            </div>
                                      <div class="panel-body">
                                    <form name="edit_login" action="inc/edit/perfil.php" method="post">
                                       <div class="form-group ">
                                              <label class="control-label " for="password">
                                               Password
                                              </label>
                                              <div class="input-group">
                                               <div class="input-group-addon">
                                                <i class="fa fa-lock">
                                                </i>
                                               </div>
                                        <input class="form-control" id="password" name="password" type="password" value="" />
                                         </div>
                                             </div>


                                        <div class="form-group ">
                                              <label class="control-label " for="password_1">
                                               Repita El Password
                                              </label>
                                              <div class="input-group">
                                               <div class="input-group-addon">
                                                <i class="fa fa-lock">
                                                </i>
                                               </div>
                                        <input class="form-control" id="password_1" name="password_1" type="password" value="" />
                                         </div>
                                             </div>

                                       

                                         <div class="form-group">
                                         <div>
                                            <button class="btn btn-primary" name="edit_pass" type="submit">
                                                Editar Password
                                              </button>
                                              </div>
                                              </div>
                                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>"></input>
                                     
                                    </form>
                                    

                                   

                                    
                                            </div>
                                        </div>
                                      </div>
                                    </div>


</div> 
</div>
