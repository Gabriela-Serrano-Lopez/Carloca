<?php include ("../sidebar.php")?>
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
<div class="content-container">

  <div class="container-fluid">
  			
  <div class="wrapper">
  <div class="container">
  <div class="row">
          <div class="col-12">
              <div class="well well-sm">
				  <form class="form-horizontal"  method="post" action="nuevo.php" >
				      <fieldset> 
					  <legend class="text-center header ti" >Nuevo usuario</legend>
      <br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-user  bigicon"></i></span>
						</div>
	    	<input style="font-size:15px"  class="form-control" name="username" type="text" id="username"  placeholder="Usuario">
            </div><br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span   class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-envelope  bigicon"></i></span>
						</div><br>
            
            <input style="font-size:15px"  class="form-control  bigicon" name="email" type="emil" id="email"    placeholder="@" >
            </div><br>
            <div class="input-group form-group">
						<div class="input-group-prepend">
							<span   class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-key  bigicon"></i></span>
						</div>
        	<input style="font-size:15px" class="form-control" name="password" type="password" id="password" placeholder="Password" >
			</div><br>
            <div class="input-group form-group  col-8">
			<div class="input-group-prepend">
							<span class="col-md-1 col-md-offset-2 text-center"><i  class="fas fa-user  bigicon"></i></span>
						</div>			
            <input style="font-size:15px" class="form-control" name="role" type="number" min="1" max="4"id="role" placeholder="Role" >
			</div>
            <br><br><input style="font-size:15px; background-color:  #04630A; color:rgb(255,255,255)" class="btn" type="submit" value="Guardar">
			<a class="btn " input style="font-size:15px; background-color:#A1A2A1;margin:19px; color:rgb(255,255,255)"  href="lista_usuario.php">Cancelar</a>
			<fieldset> 
		</form>
		</div>
        </div>
    </div>
	</div>
	
        </div>
   </div>
</div>
