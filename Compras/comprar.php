<?php 
	$pagina = "comprar";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $TitulodePagina = "comprar"; ?></title>
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
			Cuerpo de la Pagina 
			-->
		<div class="main-panel">
		<div class="content">
			<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12">
					hola

				</div>
			</div>	
			</div>
		</div>

		<!-- Aqui va El Pie de Pagina -->
		<?php include "Plantilla/footer.php" ?>
		<!-- Estilo de el footer -->
		<style type="text/css">
			footer{
				position: absolute;
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