<?php
$erro = 0;
include "../adm/securityAdm.php";
include "../adm/control.php";
include "../adm/conexao.php";

if (isset($_GET['idProd'])) {
    $idProd = $_GET['idProd'];

    $sql = "select * from produto where idProd='$idProd'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
} else {

    $erro++;
}

?>
<div class="text-end">
    <a href="listarUser.php">
        <button class="btn btn-success btn-sm">
            Lista de Produtos
        </button>
    </a>
</div>
<h2>Gerenciar</h2>
<hr>
<div class="container text-start bg-gradient p-3">
    <div class="row">
        <div class="col-2 text-center">
            <!--card para imagem de ilustração do produto(borda e imagem circulada e pode ser modificada(padrão width: 100%))-->
            <a href="editFoto.php?idProd=<?php echo $exibe['idProd'] ?>">
                <div class="card text-bg-dark rounded-circle">
                    <img src="<?php echo $exibe['foto'] ?>" class="card-img rounded-circle" alt="...">
                </div>
                ALTERAR FOTO
            </a>
        </div>
        <div class="col-10">
            <?php

            if (!$erro) {

            ?>
                <!--grupo de lista (escolhido por padrão e pode ser modificado/na possível mudança de estilo da lista, se atentar aos PHPs na lista)-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Tipo de produto: </strong><?php echo $exibe['tipoPdt'] ?></li>
                    <li class="list-group-item"><strong>Tipo de Pedido: </strong> <?php echo $exibe['tipoPdd'] ?></li>
                    <li class="list-group-item"><strong>Descrição do produto: </strong><?php echo $exibe['descricao'] ?></li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <strong>Preço: </strong><?php echo "R$ " . number_format($exibe['preco'], 2, ',', '.') ?>
                            </div>
                            <div class="col">
                                <button class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
                                    Voltar
                                </button>
                            </div>
                            <div class="col">
                                <a href="editProduto.php?idProd=<?php echo $exibe['idProd'] ?>">
                                    <button class="btn btn-success btn-sm">
                                        Editar Dados
                                    </button></a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--grupo de lista-->
            <?php
            } else {

                echo "
                    <p>Nenhum produto foi selecinado</p>
                    ";
            }


            ?>
        </div>
    </div>
</div>

<?php
include "../adm/footer.php";

?>