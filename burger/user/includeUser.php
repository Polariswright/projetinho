<?php


include "../adm/conexao.php";


if (isset($_POST['login'])) {

    //entrada
    $login = trim($_POST['login']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $cel = trim($_POST['cel']);
    $senha = trim($_POST['senha']);
    $senhaC = trim($_POST['senhaC']);
    $endereco = trim($_POST['endereco']);
    $nivel = "user";
    if ($senhaC != $senha) {
?>
        <!--pequena notificação para caso a senha esteja incorreta(pode ser modificada)-->
        <div class="container mt-3">
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Senhas não conferem.
            </div>
        </div>
<?php
    } else {


        //processamento
        $sql = "insert into user(login,nome,email,celular,senha,endereco,nivel) values
        ('$login','$nome','$email','$cel','$senha','$endereco','$nivel')";

        $incluir = mysqli_query($conexao, $sql);


        //saida
        if ($incluir) {

            echo "
                    <script>
                        window.location='../adm/login.php';
                    </script>
                
                ";
        } else {

            echo "
                    <p>Sistema temporariamente fora do ar. Tente
                    novamente mais tarde.</p>
                    <p>Entre em contato com o Admnistrador do
                    Sistema.</p>
                
                ";
            echo mysqli_error($conexao);
        }
    }
}
