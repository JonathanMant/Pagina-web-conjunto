<!DOCTYPE HTML>
<?php
session_start();
?>

<html lang="en">
	<head>
		<title>Solicitar un turno </title>
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
						<h2>Turnos</h2>
						<p>Todo más organizado</p>
					</header>
					<div class="row">
						<div class="col-12">

							<!-- Text -->
							

					<section class="box">
									<h3>Turno</h3>

		<?php	
		extract($_GET);
		
		require("connect_db.php");
		$ceddd=$_SESSION['cedula'];



									echo "<div class='table-wrapper'; >";
									echo "	<table class='alt';>";
											echo "<thead>";
											echo	"<tr>";
													echo "<th>Fecha</th>";
												echo	"<th>Hora</th>";
												echo "</tr>";
											echo "</thead>";

											echo "<form action='Solicit_tun' method='post'>";
											echo "<tbody>";
												echo "<tr>";
													echo "<td><input type='date' name='fechaa'></td>";
													echo "<td><input type='time' name='horaa'></td>";
											echo	"</tr>";
												
												}
										echo	"</tbody>";
											
									echo	"</table>";
										
								echo	"</div>";
echo "								<ul class='actions special'>";

                            echo "<input href='#.html' type='submit' value='Guardar' class='button primary' >";


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