<!DOCTYPE html>
<html>
<title>Carloca's</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/5d4588f949.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">

  <img src="img/img2.jpg" style="width:100%">
  <a href="cajero.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>LOGIN</p>
  </a>
  
  
</nav> 

<!-- Navbar on small screens (Hidden on medium and large screens)-->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="login.php" class="w3-bar-item w3-button" style="width:25% !important">LOGIN</a>
   
  </div>
</div> 

<!-- Page Content-->
<div class="w3-padding-large" id="main"> 

  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Carloca's</h1>
    <p>Restaurant.</p>
    <img src="img/img2.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Carloca's</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Carloca's restaurante ofrece a sus clientes diferentes espacios con una capacidad de mas de 400 comensales.
    Disponemos de salones privados, donde podrá celebrar sus acontecimientos familiares mas especiales y de empresa.
    Además de nuestra carta muy variada, que destaca por sus productos frescos y de gran calidad y que podríamos remarcar 
    nuestras ensaladas y espectaculares croquetas de jamón ibérico y boletus con foie con una gran aparición de nuestros productos
     de temporada en cada estación.
    </p>
    <div class="card-content">
        <img class="spectrum1" src="img/img1.jpg" width="100%">
        <h4 class="spectrum-h2">Sucursal</h4>
        <p>Avenida Universidad # 940, C.U., 20131 Aguascalientes, Ags.</p></a>
      </div>
      <!-- .card-content -->

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="registro.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Todos los derechos Reservados:
    <a href="#home"> Carloca's.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- END PAGE CONTENT -->
</div>

</body>
</html>

