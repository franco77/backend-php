 
 <script>
      $(document).ready(function(){
    $('#avatar').orakuploader({
        orakuploader_path         : 'upload-php/',
        
        orakuploader_main_path : 'files/avatar',
        /*orakuploaer_thumbnail_path : 'files/tn',*/
        
        orakuploader_add_image       : 'upload-php/images/avatar.png',
        orakuploader_add_label       : 'Selecciona Una Imagen',
        
        orakuploader_use_sortable : true,
        
        orakuploader_resize_to       : 600,
        orakuploader_thumbnail_size  : 150,

        

        orakuploader_attach_images: ['<?php echo $foto_user; ?>'],

        orakuploader_maximum_uploads : 1,
        orakuploader_hide_on_exceed : true,
        orakuploader_hide_in_progress: true,
        
        orakuploader_max_exceeded : function() {
        alert("solo puedes subir una sola imagen.");
        }
        
    });
});
   </script>


 