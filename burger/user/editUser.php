<?php
include "../adm/security.php";
include "../adm/control.php";
include "../adm/conexao.php";

$erro = 0;
if (isset($_GET['login'])) {
    $idProd = $_GET['login'];

    $sql = "select * from user where login='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
} else {

    $erro++;
}
?>
<h1>Editar Meus Dados</h1>
<hr>
<?php

if ($erro) {

    echo "
            <p>Sistema Indisponível</p>
            ";
} else {


?>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card p-3">
                <form action="updateUser.php" method="post">
                    <input type="hidden" name="idProd" value="<?php echo $exibe['login'] ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $exibe['nome'] ?>">
                        <label for="nome" class="form-label">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $exibe['email'] ?>">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" value="<?php echo $exibe['endereco'] ?>">
                        <label for="endereco" class="form-label">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cel" placeholder="Celular" name="cel" value="<?php echo $exibe['celular'] ?>">
                        <label for="cel" class="form-label">Celular</label>
                    </div>
                <?php
            }
                ?>
                <div class="row">
                    <div class="col text-start">
                        <button class="btn btn-danger " onclick="window.history.go(-1)">
                            Voltar
                        </button>
                    </div>
                    <div class="col text-end">
                        <!-- Button trigger modal -->
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Salvar mudanças
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../adm/footer.php" ?>