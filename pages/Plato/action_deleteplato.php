<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("DELETE FROM plato WHERE titulo= '$_POST[titulo]'");
header('Location: https://restaurantephp2.herokuapp.com/pages/Plato/listaplatos.php');
?>