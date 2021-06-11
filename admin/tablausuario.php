
<link rel="stylesheet" href="../css/sidebar.css">		
<link rel="stylesheet" href="inicio.css">	
<link rel="stylesheet" href="mainpaginas.css">		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/5d4588f949.js" crossorigin="anonymous"></script>
<div class="sidebar-container  " style="width:200px">
  <div class="sidebar-logo">
    Carloca's <br>
    <img src="../img/img2.jpg" alt="" width="120px">
   
  </div>
  <hr>
  <ul class="sidebar-navigation " >  
    <li class="header" style="font-size:10px;text-aling:center;">
    <h4 class="algo">ADMINISTRADOR </h4>
    <img  class="algo" src="../img/icon.png"   alt="" while="90px"  height= "90px" ></li>
    <h5 style="font-size:12px;text-aling:center;">
				<?php
				session_start();

				if(!isset($_SESSION['admin_login']))	
				{
					header("location: ../index.php");  
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../personal/personal_portada.php");	
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../usuarios/usuarios_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
        <br><br>
					Bienvenido,
				<?php
						echo $_SESSION['admin_login'];
				}
				?>
				</h5>

    <hr>
  <li>
   
   <a href="admin_portada.php"><i class="fa fa-home" ></i> Inicio </a>
   </li>
   <li>
   <a href="admin_calendario.php"><i class="fas fa-calendar-alt"></i> Calendario</a>
   </li>
   <li>
    <button class="dropdown-btn"><i class="fas fa-utensils"></i> Ventas
    <i class="fa fa-caret-down fa-sm"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Diaria</a>
    <a href="#">Mensual</a>
  </div>
  </li>
    <li>
    <button class="dropdown-btn"><i class="fa fa-cog" ></i>Administracion
    <i class="fa fa-caret-down fa-sm"></i>
  </button>
  <div class="dropdown-container">
    <a href="admin_1.php">Usuarios</a>
    <a href="#">Productos</a>
  </div>
    </li>
    <li>
     
     <a href="../cerrar_sesion.php"><i class="fas fa-power-off"></i> Salir
       </a>
     </li>
  </ul>
</div>

<div class="content-container" style="">

  <div class="container-fluid">
  			
  <div class="wrapper">
	
	<div class="container">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-blue order-card">
                <a style=" text-decoration: none;color: #fff" href=""><div class="card-block">
                    <h3 class="m-b-20">VENTAS</h3><br>
                    <h1 class="text-right"><i class="fa fa-utensils f-left"></i><span>486</span></h1>
                 </div></a>
            </div>
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-yellow order-card">
               <a style=" text-decoration: none; color: #fff"  href="tablausuario.php" ><div class="card-block">
                    <h3 class="m-b-20">USUARIOS</h3><br>
                       <h1 class="text-right"><i class="fa fa-user f-left"></i>
                       <?php
$conn = new mysqli("localhost","root", "", "bdcarloca");
$sql = "SELECT * FROM usuario";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);?>
    <span><?php  echo $rowcount; ?></span>
    
   

    <?php
}
?>
                    
                    
                    
                    </h1>
                 </div></a>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-4">
            <div class="card bg-c-pink order-card">
                <a style=" text-decoration: none;  color:#fff"href=""> <div class="card-block">
                    <h3 class="m-b-20">REPORTE</h3><br>
                   <h1 class="text-right"><i class="fa fa-chart-bar f-left"></i><span>486</span></h1>
                  </div></a>
            </div>
        </div>
	</div>
</div>		
 <hr>
 <?php
include_once "BDconect.php";
$sentencia = $base_de_datos->query("SELECT * FROM usuario;");
$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="font-size: 20px;  background-color:#31F4CA">
                            Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
				<tr">
					<th width="4%">id</th>
					<th  width="18%">Usuario</th>
					<th  width="24%">Email</th>
					<th  width="19%"> Password</th>
					<th  width="24%">Role</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuario as $usuarios){ ?>
				<tr>
					<td><?php echo $usuarios->id ?></td>
					<td><?php echo $usuarios->username ?></td>
					<td><?php echo $usuarios->email ?></td>
					<td><?php echo "********" ?></td>
					<td><?php echo $usuarios->role ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

  </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
		
		</div>
		
		<br><br><br>
    
	</div>
			
	</div>
  <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>