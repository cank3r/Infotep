<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taller de Informatica</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/jquery-1.12.1.js"></script>	
	<script src="js/bootstrap.js"></script>
	<script>
		$(document).on("ready",function(){
			$("#iniciar").on("click",function(){
				console.log("Hola");
				$(".caja").show("slow");
			});
		});
	</script>
</head>
<body>
	<header class="navbar navbar-top-fixed arriba">
		<div class="container">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-3">
					<img src="img/logo.png" alt="Infotep" width="100" height="60" class="logo">
				</div>
				<div class="col-xs-12 col-md-9">
					<h3 class="titulo visible-xs">Taller de Informatica</h3>
					<h3 class="visible-md visible-lg titulo2 ">Taller de Informatica</h3>
					<h3 class="visible-sm titulo3 ">Taller de Informatica</h3>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid menu">
		<div class="row">
			<div class="col-xs-12">
				<a href="#">Inicio</a>
				<a href="#">|</a>
				<a href="#">Mis Cursos</a>
				<a href="#">|</a>
				<a href="#" id="iniciar">Iniciar Sesión</a>
			</div>
		</div>
	</div>

	<div class="container principal">
		<div class="row">
			<div class="col-xs-12">
				<div class="caja">
					<h3>INICIAR SESION</h3>
					<div class="formulario">
						<form action="">
							<div class="form-group">
								<input type="text" class="form-control inpus" placeholder="Email Adress">
							</div>
							<div class="form-group">
								<input type="password" class="form-control inpus" placeholder="Password">
							</div>
							<input type="submit" value="INICIAR SESSION" class="btn btn-warning btn-block boton">
						</form>
						<br>
						<div class="col-xs-8">
							<a href="#">Olvidaste tu Contraseña?</a>
						</div>
						<br>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container-fluid pie">
			<h4>Curso de los vacanos 2016 &reg;</h4>
		</div>
	</footer>

</body>
</html>