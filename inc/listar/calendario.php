 <?php 
         $titulo    = 'Registro De Usuarios';
         $subtitulo = 'Lista De Usuarios';         


                $sql = "SELECT * FROM $tb_eventos WHERE estado_evento = 'Activo'";
                $result = $conexion->query($sql);
                $rows = $result->num_rows;

             
?>

       	


 

<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: new Date(),
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [

               <?php  if ($rows > 0) { 
                      foreach ($result as $fila) {
                ?>

				{
					id: <?php echo $fila['id_evento']; ?>,
					title: '<?php echo $fila['titulo_evento']; ?>',
					start: '<?php echo $fila['desde_evento']; ?>',
					end: '<?php echo $fila['hasta_evento']; ?>',
					color: '<?php echo $fila['prioridad_evento']; ?>'
				},

				<?php }} ?> 

				
				
			]
		});
		
	});

</script>