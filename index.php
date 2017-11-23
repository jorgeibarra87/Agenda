<?php
include 'class.agenda.php';


$datos = array('nombre'=>'', 'domicilio'=>'', 'telefono'=>'', 'comentarios'=>'Comentarios', 'id'=>'');
$accion = 'insert';
include 'get.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi Agenda</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script" >

</head>
<body>
	<header><a href="index.php"><h1>|MI AGENDA.|</h1></a></header>
	<form action="post.php" method="post">
		<div class="icon-user-plus"></div>
		<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="required">
		<input type="text" name="domicilio" value="<?php echo $datos['domicilio']; ?>" placeholder="Calle y numero" required="required">
		<input type="text" name="telefono" value="<?php echo $datos['telefono']; ?>" placeholder="Telefono" required="required">
		<textarea name="comentarios" required="required"><?php echo $datos['comentarios']; ?></textarea>
	
		<input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
		<input type="hidden" name="accion" value="<?php echo $accion; ?>">
		<input type="submit" name="submit" value="Enviar">

	</form>

	<?php include 'tabla.php'; ?>
<footer>Agenda PHP jorgeibarra87@gmail.com</footer>
</body>
</html>
