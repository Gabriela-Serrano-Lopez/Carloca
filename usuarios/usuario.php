<link rel="stylesheet" href="../css/sidebar.css">		
<link rel="stylesheet" href="inicio.css">	
<link rel="stylesheet" href="mainpaginas.css">		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/5d4588f949.js" crossorigin="anonymous"></script>
<div class="sidebar-container" style="width:200px">
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
					header("location: ../usuarios/usuario.php");
				}
				
				if(isset($_SESSION['usuarios_login']))
				{
				?>
        <br><br>
					Bienvenido,
				<?php
						echo $_SESSION['usuario_login'];
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
    <a href="lista_usuario.php">Usuarios</a>
    <a href="#">Productos</a>
  </div>
    </li>
    <li>
     
     <a href="../cerrar_sesion.php"><i class="fas fa-power-off"></i> Salir
       </a>
     </li>
  </ul>
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