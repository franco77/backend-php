


<form action="inc/add/php_evento.php" method="post">
     <div class="form-group ">
          <label class="control-label " for="Titulo">Titulo </label>
            <div class="input-group">
               <div class="input-group-addon">
                 <i class="fa fa-gg"></i>
               </div>
                 <input class="form-control" id="titulo" name="titulo" type="text"/>
            </div>
     </div>

     <div class="form-group ">
         <label class="control-label " for="nota">Nota</label>
            <textarea class="form-control" cols="40" id="nota" name="nota" rows="5"></textarea>
     </div>

    <div class="form-group ">
        <label class="control-label " for="fecha_d"> Desde Fecha </label>
           <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar-check-o"> </i>
              </div>
               <input class="form-control" id="desde_f" name="fecha_d" type="text"/>
           </div>
     </div>

    
     <div class="form-group ">
      <label class="control-label " for="fecha_h">Hasta Fecha</label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-calendar-plus-o"></i>
       </div>
       <input class="form-control" id="hasta_f" name="fecha_h" type="text"/>
      </div>
     </div>


     <div class="form-group ">
      <label class="control-label " for="prioridad">Prioridad</label>
      <select class="select form-control" id="prioridad" name="prioridad">
       <option value="#6B8E23"> Normal</option>
       <option value="#FFA500">Alta</option>
       <option value="#708090">Baja </option>
      </select>
     </div>

     <div class="form-group">
      <div>
       <input class="btn btn-primary" value="Guardar" name="guardar_nota" type="submit">
       <input type="hidden" name="autor" value="<?php echo $_SESSION['id']; ?>">
        
      </div>
     </div>

    </form>