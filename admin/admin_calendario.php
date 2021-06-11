
<link rel="stylesheet" href="../css/sidebar.css">		
<link rel="stylesheet" href="calendario.css">	
<link rel="stylesheet" href="mainpaginas.css">		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/5d4588f949.js" crossorigin="anonymous"></script>

<div class="sidebar-container   "style="width:200px">
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

<div class="content-container" style="background-color:white">

  <div class="container-fluid">
  			
  <div class="wrapper">
	
	<div class="container">
  
<?php
$monthNames = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", 
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

if (!isset($_REQUEST["mes"])) $_REQUEST["mes"] = date("n");
if (!isset($_REQUEST["anio"])) $_REQUEST["anio"] = date("Y");

$cMonth = $_REQUEST["mes"];
$cYear = $_REQUEST["anio"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?>
<table width="100%" style="border:10px solid #999;font-size:40px">
<tr align="center">
<td bgcolor="#0ED06F;" style="color:#FFFFFF;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="50%" align="left"><a href="<?php echo $_SERVER["PHP_SELF"]."?mes=". $prev_month."&anio=".$prev_year; ?>" style="color:#FFFFFF"><i class="fas fa-arrow-left"></i></a></td>
<td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"]."?mes=". $next_month."&anio=".$next_year; ?>" style="color:#FFFFFF"><i class="fas fa-arrow-right"></i></a></td>
</tr>
</table>
</td>
</tr><br><br><br><br>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#0ED06F;" style="color:#FFFFFF;"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
</tr>
<tr>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>D</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>L</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>M</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>M</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>J</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>V</strong></td>
<td align="center" bgcolor="#0ED06F;" style="color:#FFFFFF;border:2px solid #999;"><strong>S</strong></td>
</tr>
<?php 
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i<($maxday+$startday); $i++) {
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $startday) echo "<td></td>";
    else  {?>
		<td align="center" style="border:2px solid #999;"  valign="middle" height="20px" <?php if ((date("d")== $i - $startday + 1) && !isset ($_GET['mes'])){?> style="background:#999; color:#FFF"<?php }?>> <?php echo ($i - $startday + 1) ?> </td>
	<?php }
    if(($i % 7) == 6 ) echo "</tr>";
}
?>
</table>
</td>
</tr>
</table>
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