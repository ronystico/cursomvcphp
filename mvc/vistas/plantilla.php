<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">

</head>

<body>

<?php include 'modulos/menu.php'; ?>

<section>
</section>
<?php
$rutas = new RutasControlador();
$rutas -> Rutas();
?>	
</body>

</html>
