<?php
//CONECTAR CON BASE DE DATOS
require '../../db/db_connect.php';
$mysqli = conectar();
$resultado = $mysqli->query("DELETE FROM ingrediente WHERE nombre= '$_POST[nombre]'");
header('Location: https://restaurantephp2.herokuapp.com/pages/Ingrediente/listaingredientes.php');
