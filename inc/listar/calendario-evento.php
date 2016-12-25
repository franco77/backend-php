       <?php 
       $titulo='Eventos';
       $subtitulo='Calendario De Eventos';
       ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $titulo; ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               


                                       





                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <?php echo $subtitulo; ?>
                                                    </div>
                                                    <!-- /.panel-heading -->
                                                    <div class="panel-body">
                                                        <?php require('inc/add/evento.php') ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                       
                                            <div class="col-lg-8">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <?php echo $subtitulo; ?>
                                                    </div>
                                                    <!-- /.panel-heading -->
                                                    <div class="panel-body">

                                                        <div id='calendar'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




            </div>
            
        </div>