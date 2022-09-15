<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HamburGeek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid text-light bg-warning p-3">
        <div class="row">
            <div class="col text-start ">
                Senac Madureira
            </div>
            <div class="col text-end ">
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }
                if (isset($_SESSION['login'])) {

                    $login = $_SESSION['login'];
                    $nome = $_SESSION['nome'];

                    echo "Bem vindo, $nome | <a href='../adm/logout.php'>Logout</a>";
                } else {
                    echo "
                        <a href='../adm/login.php'>Login</a> |
                        <a href='../user/formUser.php'>Não possuo cadastro</a>
                    ";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">