
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
<?php include ("../sidebar.php")?>
<div class="content-container" style="background-color:white">

  <div class="container-fluid">
  			
  <div class="wrapper">
	
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
               <a style=" text-decoration: none; color: #fff"  href="tabla_usuarios.php" ><div class="card-block">
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
                    <h3 class="m-b-20">PEPORTES</h3><br>
                   <h1 class="text-right"><i class="fa fa-chart-bar f-left"></i><span>486</span></h1>
                  </div></a>
            </div>
        </div>
	</div>
</div>		
		<br><br><br>
    
	</div>
			
	</div>