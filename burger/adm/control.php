<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HamburGeek</title>
    <script src="../js/script.js"></script>
    <link rel="shortcut icon" href="../imgs/favicoun.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid text-light border-bottom border-dark control p-3">
        <div class="row">
            <div class="col text-start">
                <a href="../adm/home.php"><img src="../imgs/logo4.png " alt="" class="logo"></a>
            </div>
            <div class="col text-end p-3">
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }
                if (isset($_SESSION['login'])) {

                    $login = $_SESSION['login'];
                    $nome = $_SESSION['nome'];
                    $nivel = $_SESSION['nivel'];

                ?>
                    <?php
                    if ($nivel == 'adm') {
                        echo "Bem vindo $nome | "
                    ?>

                        <a href="../produto/listProduto.php" class="joca">
                            Gerenciar Produtos
                        </a>

                    <?php
                    } else {
                    ?>
                        <a class="btn btn-primary" href="../user/profile.php">
                            Área do Usuário
                        </a>
                    <?php
                    }
                    ?>
                    <a href="../adm/logout.php" class="joca">| Sair</a>
                <?php
                } else {
                ?>
                    <a href='../adm/login.php' class="joca">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                        Login</a> |
                    <a href='../user/formUser.php' class="joca">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        Não possuo cadastro</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <section class="heigth">