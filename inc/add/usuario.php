 <?php 
         $titulo    = 'Registro De Usuarios';
         $subtitulo = 'Formulario De Registro'; 

                $sql = "SELECT * FROM $tb_nivel";
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

<?php 
if(isset($_GET['error']))
{
echo '<div id="error-1" class="alert alert-warning" role="alert">ERROR PERO NO SE PUDO REGISTRAR EL USUARIO. Revisa si el email ingresado no esta siendo utilizado por otro usuario</div>';
 }
 ?>




                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <?php echo $subtitulo; ?>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <!-- Contenido -->




                                    <form action="inc/add/php_usuario.php" method="post">
                                          <div class="form-group ">
                                                <label class="control-label " for="usuario">Nombre Usuario</label>
                                                   <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                         <input class="form-control" id="usuario" name="usuario" type="text"/>
                                                    </div>
                                            </div>

                                                 <div class="form-group ">
                                                    <label class="control-label requiredField" for="email">Email </label>
                                                      <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                                          <input class="form-control" id="email" name="email" type="text"/>
                                                        </div>
                                                        <br/>
                                                        <div id="alerta"></div>
                                                 </div>

                                                 <div class="form-group ">
                                                     <label class="control-label " for="password">Password</label>
                                                       <div class="input-group">
                                                         <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                          <input class="form-control" id="password" name="password" type="password"/>
                                                        </div>
                                                 </div>

                                                 <div class="form-group ">
                                                     <label class="control-label " for="nombre">Nombre</label>
                                                       <div class="input-group">
                                                         <div class="input-group-addon"><i class="fa fa-y-combinator"></i>
                                                          </div>
                                                           <input class="form-control" id="nombre" name="nombre" type="text"/>
                                                       </div>
                                                 </div>

                                                 <div class="form-group ">
                                                      <label class="control-label " for="apellido">Apellido</label>
                                                         <div class="input-group">
                                                           <div class="input-group-addon"><i class="fa fa-lastfm-square"></i>
                                                            </div>
                                                              <input class="form-control" id="apellido" name="apellido" type="text"/>
                                                         </div>
                                                 </div>

                                                 <div class="form-group ">
                                                    <label class="control-label " for="telefono"> Telephone</label>
                                                       <div class="input-group">
                                                          <div class="input-group-addon"><i class="fa fa-phone"> </i>
                                                          </div>
                                                           <input class="form-control" id="telefono" name="telefono" type="text"/>
                                                      </div>
                                                 </div>


                                                 <div class="form-group ">
                                                    <label class="control-label " for="nivel"> Nivel</label>
                                                       <select class="select form-control" id="nivel" name="nivel">
                                                          <?php 
                                                          if ($rows > 0) {
                                                          foreach ($result as $fila ) { ?>
                                                             
                                                             <option value="<?php echo $fila['id_nivel']; ?>"> <?php echo $fila['usuario_nivel']; ?> </option>

                                                           <?php }} ?>
                                                       </select>
                                                   </div>   



                                                 <div class="form-group ">
                                                  <label class="control-label " for="perfil"> Perfil</label>
                                                  <textarea class="form-control" cols="40" id="perfil" name="perfil" rows="5"></textarea>
                                                 </div>

                                                 <div class="form-group">
                                                  <div>
                                                   <input class="btn btn-primary" name="guardar_usuario" value="Registrar Usuarios" type="submit">
                                                    </div>
                                                 </div>
                                                </form>




                                           </div>
                                        </div>
                                    </div>
                                </div>



             </div>
             
        </div>