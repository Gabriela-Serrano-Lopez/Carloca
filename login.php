<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Carloca's</title>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/5d4588f949.js" crossorigin="anonymous"></script>
</head>
	<body>
<?php
require_once 'DBconect.php';
session_start();
if(isset($_SESSION["admin_login"]))	//Condicion admin
{
	header("location: admin/admin_portada.php");	
}
if(isset($_SESSION["mesero_login"]))	//Condicion personal
{
	header("location: personal/personal_portada.php"); 
}
if(isset($_SESSION["cajero_login"]))	//Condicion personal
{
	header("location: personal/personal_portada.php"); 
}
if(isset($_SESSION["usuarios_login"]))	//Condicion Usuarios
{
	header("location: usuarios/usuarios_portada.php");
}

if(isset($_REQUEST['btn_login']))	
{
	$email		=$_REQUEST["txt_email"];	//textbox nombre "txt_email"
	$password	=$_REQUEST["txt_password"];	//textbox nombre "txt_password"
	$role=$_REQUEST["txt_role"];	;		//select opcion nombre "txt_role"
		
	if(empty($email)){						
		$errorMsg[]="Por favor ingrese Email";	//Revisar email
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese Password";	//Revisar password vacio
	}
	else if(empty($role)){
		$errorMsg[]="Por favor seleccione rol ";	//Revisar rol vacio
	}
	else if($email AND $password AND $role)
	{
		try
		{
			$select_stmt=$db->prepare("SELECT email,password,role FROM usuario
										WHERE
										email=:uemail AND password=:upassword AND role=:urole"); 
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->bindParam(":upassword",$password);
			$select_stmt->bindParam(":urole",$role);
			$select_stmt->execute();	//execute query
					
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];
				$dbrole		=$row["role"];
			}
			if($email!=null AND $password!=null AND $role!=null)	
			{
				if($select_stmt->rowCount()>0)
				{
					if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
					{
						switch($dbrole)		//inicio de sesión de usuario base de roles
						{
							case "1":
								$_SESSION["admin_login"]=$email;			
								$loginMsg="Admin: Inicio sesión con éxito";	
								header("refresh:3;admin/admin_portada.php");	
								break;
								
							case "2";
								$_SESSION["mesero_login"]=$email;				
								$loginMsg="Personal: Inicio sesión con éxito";		
								header("refresh:3;personal/personal_portada.php");	
								break;
								
							case "3":
								$_SESSION["cajero_login"]=$email;				
								$loginMsg="Usuario: Inicio sesión con éxito";	
								header("refresh:3;usuarios/usuarios_portada");		
								break;
							case "4":
									$_SESSION["usuarios_login"]=$email;				
									$loginMsg="Usuario: Inicio sesión con éxito";	
									header("refresh:3;usuarios/usuarios_portada.php");		
									break;
								
							default:
								$errorMsg[]="correo electrónico o contraseña incorrectos";
						}
					}
					else
					{
						$errorMsg[]="correo electrónico o contraseña incorrectos";
					}
				}
				else
				{
					$errorMsg[]="correo electrónico o contraseña incorrectos";
				}
			}
			else
			{
				$errorMsg[]="correo electrónico o contraseña incorrectos";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="correo electrónico o contraseña incorrectos";
	}
}

?>

	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>ÉXITO ! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?> 


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		<div class="card-header">
			<center><h3 style="color:  #2e0116; font-size:40px">Iniciar Sesion</h3> </center>
			</div>
			<br>
			<div class="card-body">
				<form >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"  ><i  class="fas fa-envelope"></i></span>
						</div>
						<input type="text"style="font-size:15px" name="txt_email"class="form-control" placeholder="Ingrese email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" style="font-size:15px" name="txt_password" class="form-control"placeholder="Ingrese passowrd">
					</div>
					<div class="form-group">
					<select style="font-size:15px"  class="input-lg col-12"  name="txt_role">
	<option value="" selected="selected"> - selecccionar rol <br> </option>
      <option value="1">Administrador</option>
      <option value="2">Mesero</option>
      <option value="3">Cajero</option>
      <option value="4">Cliente</option>
    </select><br>
  </div>
<div class="form-group">

						<input type="submit" name="btn_login"value="Iniciar sesion" class="btn float-right login_btn" style="font-size: 15px">
					</div><br>
					<div class="form-group">
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Ya te registraste?<a href="registro.php">Registrate!!</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>