<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Enric Jimenez Sauló</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<?php include "cabecera.php"; ?>
						<div id="contenido">
							<!-- Header -->
						
							
							
							<?php include "home.php"; ?>
						
							</div>
						</div>
					</div>
					
				<!-- Sidebar -->
					<div id="sidebar">
							<?php include "menu.php"; ?>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#tic").click(function(event) {
					$("#contenido").load('tic.php');
					  window.scrollTo(0, 0);
				});
				$("#metodologia").click(function(event) {
					$("#contenido").load('metodologia.php');
					window.scrollTo(0, 0);
					
				});
				$("#deporte").click(function(event) {
					$("#contenido").load('deporte.php');
					window.scrollTo(0, 0);
					
				});
				$("#vida").click(function(event) {
					$("#contenido").load('vida.php');
					window.scrollTo(0, 0);
					
				});
				$("#corporal").click(function(event) {
					$("#contenido").load('corporal.php');
					window.scrollTo(0, 0);
					
				});
				$("#revistas").click(function(event) {
					$("#contenido").load('revistas.php');
					window.scrollTo(0, 0);
					
				});
				$("#profe").click(function(event) {
					$("#contenido").load('home.php');
					window.scrollTo(0, 0);
				});
			});
		</script>

	</body>
</html>