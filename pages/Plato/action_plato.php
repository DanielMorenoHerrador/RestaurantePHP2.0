<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO plato (titulo, comensales, tipo) VALUES ('".$_REQUEST['titulo']."', '".$_REQUEST['comensales']."', '".$_REQUEST['tipo']."')");
header('Location: http://localhost/dev/EquipoRest/pages/Plato/listaplatos.php');
?>