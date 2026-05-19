<?php require_once '../resources/config.php'; ?>

<?php include VIEW_LAND . DS . 'head.php'; ?>

    <?php include VIEW_LAND . DS . 'nav.php'; ?>

        <?php $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        echo $url;
        
        ?>
        <?php 
            if ($url == '/' || $url == '/index.php') {
                include VIEW_LAND . DS . 'inicionosotros.php';
            
                include VIEW_LAND . DS . 'inicioservicios.php';
          
                include VIEW_LAND . DS . 'inicioeligenos.php';
          
                include VIEW_LAND . DS . 'iniciotestimonios.php';
     
                include VIEW_LAND . DS . 'iniciocitas.php';
            }

            if($url == '/servicios')
                {
                    include VIEW_LAND . DS . 'servicios' . DS . 'servis.php';

                    include VIEW_LAND . DS . 'servicios' . DS . 'cita.php';
                }
        ?>

     <?php  ?>
    
     <?php  ?>
    
     <?php  ?>

     <?php  ?>
    
     <?php  ?>

     <?php include VIEW_LAND . DS . 'footer.php'; ?>
    