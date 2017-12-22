<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Crud PG</title>

	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
	    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
	    <link rel="stylesheet" href="assets/css/style.css" />
	    <link rel="stylesheet" href="assets/css/demo.css">
		<link rel="stylesheet" href="assets/css/footer-distributed.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	</head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Crud pg</a>
				</div>
					<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Empleado
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="?c=empleado&a=Nuevo">Ingreso</a></li>
							<li><a href="?c=empleado&a=Buscar">Buscar</a></li>
							<li><a href="?c=empleado&a=AsignaSueldo">Asignar Sueldo</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Sueldo
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Ingreso</a></li>
							<li><a href="#">Buscar</a></li>
							<li><a href="#">Pendiente</a></li>
						</ul>
					</li>
					<li><a href="#">Page 3</a></li>
				</ul>
			</div>
		</nav>
		<?php if (isset($_REQUEST['message'])) : ?>
			<?php $tipo = ($_REQUEST['titulo'] == 'exito') ? 'success' : 'danger'; ?>
			<div class="alert alert-<?php echo $tipo; ?> fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong><?php echo $_REQUEST['titulo']; ?>!</strong> <?php echo $_REQUEST['message']; ?>
			</div>
		<?php endif; ?>
    <div class="container">
