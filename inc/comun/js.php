

 <script src="libs/vendor/jquery/jquery.min.js"></script>
 <script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
 <script src="libs/vendor/metisMenu/metisMenu.min.js"></script>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $("#error-1").fadeOut(2000);
    },3000);
});
</script>

<script>
$(document).ready(function() {    
    $('#email').blur(function(){

        $('#alerta').html('<i class="fa fa-spinner fa-pulse fa-fw"></i>').fadeOut(1000);

        var email = $(this).val();        
        var dataString = 'email='+email;

        $.ajax({
            type: "POST",
            url: "inc/php-comun/check_email.php",
            data: dataString,
            success: function(data) {
                $('#alerta').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>




 <script>
       $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
        })
    </script>


<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("password_1");

function validatePassword(){
  if(password.value != password_1.value) {
    password_1.setCustomValidity("La Contraseña No Coicide");
  } else {
    password_1.setCustomValidity('');
  }
}

password.onchange = validatePassword;
password_1.onkeyup = validatePassword;
	</script>  


     

     <script src="libs/vendor/fullcalendar/lib/moment.min.js"></script>
     <script src='libs/vendor/fullcalendar/lib/jquery.min.js'></script>
     <script src='libs/vendor/fullcalendar/fullcalendar.min.js'></script>
     <script src='libs/vendor/fullcalendar/locale/es.js'></script>
     <?php require('inc/listar/calendario.php'); ?>


       

    <!-- DataTables JavaScript -->
    <script src="libs/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="libs/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="libs/vendor/datatables-responsive/dataTables.responsive.js"></script>
   
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="libs/vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
     <script type="text/javascript">
            $(function () {
                $('#desde_f').datetimepicker({
                    format: 'YYYY-M-D hh:mm:ss'

                });
                 $('#hasta_f').datetimepicker({
                    format: 'YYYY-M-D hh:mm:ss'

                 });
            });
        </script>



        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="libs/vendor/elFinder/js/elfinder.min.js"></script>
        <script src="libs/vendor/elFinder/js/i18n/elfinder.es.js"></script>
        <script type="text/javascript" charset="utf-8">
		
			$(document).ready(function() {
				$('#elfinder').elfinder({
					url : 'libs/vendor/elFinder/php/connector.minimal.php',  
					  lang: 'es',
					  height: 500                   
				});
			});
		</script>

<script src="upload-php/orakuploader.js"></script> 



<script src="libs/custon/sb-admin-2.js"></script>

     <script>
    $(document).ready(function() {
        $('#tabla-1').DataTable({
            responsive: true,
            "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
        });
    });
    </script>


   

</body>
</html>

