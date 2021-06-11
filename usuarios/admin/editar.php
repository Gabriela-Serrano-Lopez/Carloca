<style>
.ti{
	color: #2e0116;
	font-size: 25px;
}

.bigicon {
    font-size: 25px;
    color: #36A0FF;
}
</style>

<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../DBconect.php";
$sentencia = $db->prepare("SELECT * FROM usuario WHERE id = ?;");
$sentencia->execute([$id]);
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);
if($usuario === FALSE){
	echo "¡No existe algún usuario con ese ID!";
	exit();
}

?>
<?php include_once "../sidebar.php" ?>
<div class="content-container" style="background-color:white">

<div class="container-fluid">
            
<div class="wrapper">
  
  <div class="container">
       <div class="row">
          <div class="col-12">
              <div class="well well-sm">
				  <form class="form-horizontal"  method="post" action="guardarDatosEditados.php" >
				      <fieldset> 
					  <legend class="text-center header ti" >Editar usuario con el 	Id: <?php echo $usuario->id; ?></legend>
      <br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-user  bigicon"></i></span>
						</div>
	    	<input style="font-size:15px" value="<?php echo $usuario->username ?>" class="form-control" name="username" required type="text" id="username" >
            </div><br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span   class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-envelope  bigicon"></i></span>
						</div><br>
            
            <input style="font-size:15px" value="<?php echo $usuario->email ?>" class="form-control  bigicon" name="email" required type="emil" id="email" >
            </div><br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span   class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-key  bigicon"></i></span>
						</div>
        	<input style="font-size:15px" value="<?php echo $usuario->password ?>" class="form-control" name="password" required type="password" id="password" >
			</div><br>
            <div class="input-group form-group  col-8">
			<div class="input-group-prepend">
							<span class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-user  bigicon"></i></span>
						</div>			
            <input style="font-size:15px" value="<?php echo $usuario->role ?>" class="form-control" name="role" required type="number" min="1" max="4"id="role" >
			</div>
            <br><br><input style="font-size:15px; background-color:  #04630A; color:rgb(255,255,255)" class="btn" type="submit" value="Guardar">
			<a class="btn " input style="font-size:15px; background-color:#A1A2A1;margin:19px; color:rgb(255,255,255)"  href="lista_usuario.php">Cancelar</a>
			<fieldset> 
		</form>
		</div>
        </div>
    </div>
	</div></div></div></div>



