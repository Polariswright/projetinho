<?php
include "../adm/control.php";
include "../adm/conexao.php";

$erro = 0;
if (isset($_GET['idProd'])) {
    $idProd = $_GET['idProd'];

    $sql = "select * from produto where idProd=$idProd";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
} else {

    $erro++;
}
?>
<h1>Editar Dados</h1>
<hr>
<?php

if ($erro) {

    echo "
            <p>Nenhum professor foi selecinado</p>
            <p>Clique em voltar para selecionar o professor que deseja editar</p>
            ";
} else {


?>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card p-3">
                <form action="updateProduto.php" method="post">
                    <input type="hidden" name="idProd" value="<?php echo $exibe['idProd'] ?>">
                    <fieldset disabled>
                        <div class="form-floating mb-3">
                            <input type="text" id="tipoPdt" class="form-control" placeholder="<?php echo $exibe['tipoPdt'] ?>">
                            <label for="tipoPdt" class="form-label"><?php echo $exibe['tipoPdt'] ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tipoPdd" placeholder="Tipo de pedido" name="tipoPdd" value="<?php echo $exibe['tipoPdd'] ?>">
                            <label for="tipoPdd" class="form-label">Tipo de Pedido</label>
                        </div>
                    </fieldset>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nomePdt" placeholder="Nome do Produto" name="nomePdt" value="<?php echo $exibe['nomePdt'] ?>">
                        <label for="nomePdt" class="form-label">Nome do Produto</label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" value="<?php echo number_format($exibe['preco'], 2, ',', '.') ?>">
                            <label for="preco">Preço</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" maxlength="150" placeholder="Drecrição do produto"><?php echo $exibe['descricao'] ?></textarea>
                        <label for="descricao" class="form-label">Descrição do produto</label>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Salvar mudanças
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmação de mudança</h5>
                                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        Dados alterados com sucesso!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../adm/footer.php" ?>