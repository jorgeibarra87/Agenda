<?php
	
	if((isset($_GET['accion'])) && (isset($_GET['id'])) && (is_numeric($_GET['id'])) &&($_GET['accion'] == 'editar')){
		
		$id = $_GET['id'];
		$agenda = Agenda::soloID($id);

		$array = $agenda->selectID();

		$datos = $array->fetch_array();

		$accion = 'update';

	}

	if((isset($_GET['accion'])) && (isset($_GET['id'])) && (is_numeric($_GET['id'])) &&($_GET['accion'] == 'eliminar')){
		
		$id = $_GET['id'];
		$agenda = Agenda::soloID($id);

		$array = $agenda->delete();
	}

?>