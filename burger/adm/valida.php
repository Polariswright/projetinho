<?php

include "conexao.php";

if (isset($_POST['login'])) {

    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    $sql = "select * from user where login='$login' and senha='$senha'";
    $testLogin = mysqli_query($conexao, $sql);
    $existe = mysqli_num_rows($testLogin);


    if ($existe) {

        $dados = mysqli_fetch_array($testLogin);
        $nome = $dados['nome'];
        $nivel = $dados['nivel'];
        $cel = $dados['cel'];
        $tel = $dados['tel'];
        $endereco = $dados['endereco'];

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['login'] = $login;
        $_SESSION['nome'] = $nome;
        $_SESSION['tel'] = $tel;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['cel'] = $cel;
        $_SESSION['endereco'] = $endereco;

        if ($nivel == 'adm') {
            header('location: adm.php');
        } else {

            header('location: index.php');
        }
    } else {

?>
        <div class="container mt-3">
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Senha inválida
            </div>
        </div>
    <?php } ?>
<?php
}
?>