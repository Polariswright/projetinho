<?php
$erro = 0;
include "../adm/security.php";
include "../adm/control.php";
include "../adm/conexao.php";

if (isset($_GET['login'])) {
    $login = $_GET['login'];

    $sql = "select * from user where login='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
    $nome =$exibe['nome'];
    $email =$exibe['email'];
    $celular =$exibe['celular'];
    $endereco =$exibe['endereco'];
} else {

    $erro++;
}

?>
<div class="row">
    <div class="col">
        <div class="card">
            <h1 class="card-title">
                Meus dados
            </h1>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">Nome: <?php echo $login ?></li>
                <li class="list-group-item">Nome: <?php echo $nome ?></li>
                <li class="list-group-item">Email: <?php echo $email ?></li>
                <li class="list-group-item">Endereço: <?php echo $endereco ?></li>
                <li class="list-group-item">Celular: <?php echo $celular?></li>
            </ul>

        </div>
    </div>
    <div class="col">
        <a href="editUser.php" class="btn btn-info btn-sm">
            Editar Dados
        </a>
    </div>
    <div class="col">
        <a href="deletUser.php" class="btn btn-danger btn-sm">
            Excluir Conta
        </a>
    </div>
</div>
<?php include "../adm/footer.php" ?>