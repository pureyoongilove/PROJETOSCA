<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "academia";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

$_SESSION['con'] = $con;

if ($con) {
    //echo "Conexão ok";
} else {
    echo "Conexão falhou";
}