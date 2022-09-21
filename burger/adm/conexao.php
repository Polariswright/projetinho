<?php

$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "burger";


$conexao = mysqli_connect($local, $usuario, $senha, $banco);


mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, "SET character_set_connection= utf8");
mysqli_query($conexao, "SET character_set_client=utf8");
mysqli_query($conexao, "SET character_set_results= utf8");



?>