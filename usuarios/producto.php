<link rel="stylesheet" href="../css/header.css"><?php
session_start();
require 'funciones.php';
?>
<style>
  .titulo-producto{
font-size: 15px;
}
</style>
<body>
  
 <h1> MENU</h1>
    <div class="container" id="main">
        <div class="row">
            <?php
              require 'vendor/autoload.php';
              $producto = new Kawschool\Producto;
              $info_productos = $producto->mostrar();
              $cantidad = count($info_productos);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++){
                  $item = $info_productos[$x];
            ?>
              <div class="col-sm-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="text-center titulo-producto"><?php print $item['titulo'] ?></h4>  
                    </div>
                    <div class="panel-body">
                      <?php
                          $foto = 'upload/'.$item['foto'];
                          if(file_exists($foto)){
                        ?>
                          <img src="<?php print $foto; ?>" class="img-responsive">
                      <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                      
                      <?php }?>
                    </div>
              
                    <div class="panel-footer">
                    <p><?php print $item['descripcion'] ?></p>
                        <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block">
                      Ordemar
                        </a>
                    </div>
                  </div>
              
              
              </div>
          <?php
                }
            }else{?>
              <h4>NO HAY REGISTROS</h4>

          <?php }?>




        </div>
      

    </div> <!-- /container -->
</body>