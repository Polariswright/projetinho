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
        $cel = $dados['celular'];
        $email = $dados['email'];
        $endereco = $dados['endereco'];

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['login'] = $login;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['celular'] = $cel;
        $_SESSION['endereco'] = $endereco;

        if ($nivel == 'adm') {
            echo "<script> window.location = 'adm.php'</script>";
        } else {

            echo "<script> window.location = 'index.php'</script>";
        }
    } else {

?>
        <!--pequena notificação para caso a senha esteja incorreta(pode ser modificada)-->
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