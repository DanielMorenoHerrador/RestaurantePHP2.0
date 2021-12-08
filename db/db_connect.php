<?php

function conectar(){
//Conexión con base de datos
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306","ba1eefc4733675","eeecf84b","heroku_3593c8764c5d08e");
//Control de errores
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
    . $mysqli->connect_error;
}

return $mysqli;

}
