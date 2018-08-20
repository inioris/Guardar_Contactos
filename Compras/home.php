<?php
	

	$ofertas = array();
	$ofertas[001] = array(
		'nombre' => 'SPA para 2', 
		'introdescripcion' => 'vive un momento',
		'description' => 'no te puedes perder',
		'imagen' => 'https://img.grouponcdn.com/deal/cpswVu21jkHeq2fhJwVH/Rt-960x576/v1/c700x420.jpg',
		'precio' => 1000,
		'precioOferta' => 40
	);
	$ofertas[002] = array(
		'nombre' => 'Camara', 
		'introdescripcion' => 'la mejor calidad',
		'description' => 'para ti',
		'imagen' => 'https://media.aws.alkosto.com/media/catalog/product/cache/6/image/69ace863370f34bdf190e4e164b6e123/_/b/_b0a50bd888272c27c7d75bc2aaefe2d4621ed4e12e60bd9f04_pimgpsh_fullsize_distr_1.jpg',
		'precio' => 300,
		'precioOferta' => 10
	);
	$ofertas[003] = array(
		'nombre' => 'Bicicleta', 
		'introdescripcion' => 've DOnde Quieras',
		'description' => 'no te puedes perder',
		'imagen' => 'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201709/14/00108450805455____1__640x640.jpg',
		'precio' => 100,
		'precioOferta' => 10
	);
	$ofertas[004] = array(
		'nombre' => 'piano', 
		'introdescripcion' => 'para hacer mejores momentos',
		'description' => 'no te puedes perder',
		'imagen' => 'https://static.roland.com/assets/images/products/main/v-piano_grand_angle_open_full_main.jpg',
		'precio' => 1500,
		'precioOferta' => 1000
	);



	$pagina = "home";

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $TitulodePagina = "Home"; ?></title>
	<!-- Estilos -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="estilos/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="estilos/css/main.css">

        <script src="estilos/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!-- Aqui Comienza la el Codigo -->
	<div class="wrapper">
		<!--  
			Cabezera 
		-->
		<?php include "Plantilla/cabezera.php"; ?>
		<!--  
			Yumbo tron 
		-->
		<!--
		Estilo Yumbo tron 
			-->
			<style type="text/css">
				.jumbotron{
				width: 100%;
				}
			</style>
		<?php include "Plantilla/yumbotron.php"; ?>
		<!-- 
			Cuerpo de la Pagina 
			-->
		<div class="main-panel">
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<!-- Listando Productos -->
					<style type="text/css">
						img{
							width: 200px;
							height: 200px;
						}
					</style>
        			<?php 
        				foreach ($ofertas as $key) {
        					echo "<div class='col-md-3 col-lg-3 col-sm-3'>";
        					echo "<img src=".$key['imagen'].">";
        					echo "<p>". $key['nombre'] ."</p>";
        					echo "<h4>". $key['introdescripcion'] ."</h4>";
        					echo '<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>';
        					echo '</div>';

        				}
        			?>
        			<?php $hola = new DateTime(); echo $hola->format('d-m-Y H:i:s') ?>

				</div>
			</div>	
			</div>
		</div>

		<!-- Aqui va El Pie de Pagina -->
		<?php include "Plantilla/footer.php" ?>
		<!-- Estilo de el footer -->
		<style type="text/css">
			footer{
				position: fixed;
 				bottom: 0;
				background-color: lightgray;
				width: 100%;
				height: 60px;

			}
			footer nav ul li{
				display: inline;
				padding: 10px;
				padding-top: 20px;
				text-decoration: none;
				top: 3em;
			}
			footer nav ul{
				
				padding-top: 20px;

			}
			#informacion{
				padding-top: 20px;
			}
		</style>
	</div>
	</div>

	<!-- Estilos js -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="estilos/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="estilos/js/vendor/bootstrap.min.js"></script>

        <script src="estilos/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

</body>
</html>