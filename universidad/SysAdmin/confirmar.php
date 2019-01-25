<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Departamento de informática y automática</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
		<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/resume.min.css" rel="stylesheet">
	</head>
	
	<body id="page-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none">Departamento IA</span>
			<span class="d-none d-lg-block">
			  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/logo_usal.png" alt="">
			</span>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#inicio">Inicio</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#acerca-de">Quienes somos</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#contacto">Contacto</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#productos">Productos</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#registrarse">Registrarse</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#panel-usuario">Panel de usuario</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="/webmail">Correo</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="/ftp">FTP web</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.php#estado">Estado</a>
			  </li>
			</ul>
		  </div>
		</nav>
		
		<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="registrarse">
        <div class="my-auto">
			<h2 class="mb-5">Confirmar registro</h2>
			<form action="/perl/confirmar.pl" method="post">
				<p>Introduce el código que has recibido en tu correo para confirmar tu cuenta: </p>
				<?php
					// The value of the variable mensaje is found
					if(isset($_GET['codigo']))
					{
						$codigo = $_GET["codigo"];
						echo "<input name=\"codigo\" type=\"text\" value=\"$codigo\"/>";
					}
					else{
						echo "<input name=\"codigo\" type=\"text\"/>";
					}
				?>
				<input name="enviar" value="Enviar" type="submit"/>
			</form>
		</div>
		</section>
	</body>
</html>