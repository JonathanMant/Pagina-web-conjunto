<!DOCTYPE HTML>
<?php
session_start();
?>

<html lang="en">
	<head>
		<title>Parqueadero del usuario </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Mi</a>Conjunto</h1>
					<nav id="nav">
						<ul>
							<li><a href="index_propietario.html">Inicio</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Opciones</a>
								<ul>
									
									<li><a href="desconectar.php">Cerrar sesión</a></li>
									<li>
										
										
									</li>
								</ul>
							</li>
							</li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Parqueadero</h2>
						<p>Todo más organizado</p>
					</header>
					<div class="row">
						<div class="col-12">

							<!-- Text -->
							

					<section class="box">
									<h3>Parqueadero</h3>

		<?php	
		extract($_GET);
		
		require("connect_db.php");
		$cedd=$_SESSION['cedula'];


                          $sql=("SELECT Parqueadero.codigo_parqueadero , Parqueadero.Parte FROM login , propietario ,Parqueadero WHERE login.cedula='$cedd' and login.cedula=propietario.login_cedula and propietario.login_cedula = Parqueadero.propietario_login_cedula");     
								$query=mysqli_query($mysqli,$sql);

									echo "<div class='table-wrapper'; >";
									echo "	<table class='alt';>";
											echo "<thead>";
											echo	"<tr>";
													echo "<th>Id parqueadero</th>";
												echo	"<th>Parte</th>";
												echo "</tr>";
											echo "</thead>";


											?>

											<?php
											while($arreglo=mysqli_fetch_array($query)){
											echo "<tbody>";
												echo "<tr>";
													echo "<td>$arreglo[0]</td>";
													echo "<td>$arreglo[1]</td>";
											echo	"</tr>";
												
												}
										echo	"</tbody>";
											
									echo	"</table>";
										
								echo	"</div>";
							echo	"</section>";

						echo "</div>";
					echo "</div>";
					echo "<div class='row'>";
						echo "<div class='col-12'>";
?>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>