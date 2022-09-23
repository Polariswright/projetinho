<?php

session_start(); //inicia a sessão
$_SESSION= array(); // carrega a array de dados
session_destroy();//destrói todas as sessões inciadas
header('location: \burger\adm\index.php');//redireciona para a área principal

?>