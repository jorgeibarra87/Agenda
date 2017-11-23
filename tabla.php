<table>
	<th>Nombre</th>
	<th>Domicilio</th>
	<th>Telefono</th>
	<th>Comentarios</th>
	<th>editar</th>
	<th>eliminar</th>
<?php

$agenda = Agenda::ningunDato();

$datos = $agenda->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';

	echo '<td>',$row['nombre'],'</td>';
	echo '<td>',$row['domicilio'],'</td>';
	echo '<td>',$row['telefono'],'</td>';
	echo '<td>',$row['comentarios'],'</td>';
	echo "<td><a class = \"icon-pencil\" href=\"index.php?accion=editar&&id=$row[id]\"></a></td>";
	echo "<td><a class = \"icon-cross\" href=\"index.php?accion=eliminar&&id=$row[id]\"></a></td>";

	echo '<tr>';
}

?>	
</table>