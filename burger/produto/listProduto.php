<?php
include "../adm/control.php";
include "../adm/conexao.php";
$sql = "select * from produto order by tipoPdd";
$seleciona = mysqli_query($conexao, $sql);

?>
<h1 class="text-center">Relatório de produtos cadastrados</h1>
<hr>
<div class="row">
    <div class="col text-end">
        <a href="formProduto.php"><button type="button" class="btn btn-success btn-sm">Cadastrar novo produto</button></a>
    </div>
</div>
<!--Inicio da tabela(tabela padrão que pode ser modificada)-->
<table class="table table-bordered table-sm mt-2">
    <!--Título da tabela-->
    <thead>
        <tr>
            <th scope="col">ID do Produto</th>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Tipo de Produto</th>
            <th scope="col">Tipo de Pedido</th>
            <th scope="col">Gerenciamento</th>
        </tr>
    </thead>
    <!--Título da tabela-->
    <?php
    while ($exibe = mysqli_fetch_array($seleciona)) {
        $idProd = $exibe['idProd'];
    ?>
    <!--Dados da tabela(ao mudar a tabela, ficar atento aos PHPs abertos nos dados)-->
        <tbody>
            <tr>
                <td><?php echo $exibe['idProd'] ?></td>
                <td><?php echo $exibe['nomePdt'] ?></td>
                <td><?php echo $exibe['tipoPdt'] ?></td>
                <td><?php echo $exibe['tipoPdd'] ?></td>
                <td>
                    <a href="verProduto.php?idProd=<?php echo $idProd; ?>">
                        <button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                    <a href="excluirProduto.php?idProd=<?php echo $idProd; ?>">
                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir <?php echo $exibe['nomePdt']?>?')">Excluir</button></a>
                </td>
            </tr>
        </tbody>
        <!--Dados da tabela-->
    <?php
    }
    ?>
</table>
<!--Fim da tabela-->

<?php
include "../adm/footer.php";
?>