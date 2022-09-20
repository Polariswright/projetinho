<?php

include "../adm/conexao.php";


if (isset($_POST['idProd'])) {

    $idProd = ($_POST['idProd']);
    $nomePdt = trim($_POST['nomePdt']);
    $preco = trim($_POST['preco']);
    $preco = strtr($preco,",",".");
    $descricao = trim($_POST['descricao']);


    $sql = "update produto set nomePdt='$nomePdt',preco='$preco',descricao='$descricao'  where idProd='$idProd'";
    $alterar = mysqli_query($conexao, $sql);


    if ($alterar) {
        header('location: listProduto.php');
    } else {

        echo "
            <p>Sistema temporariamente fora do ar. Tente
            novamente mais tarde.</p>
            <p>Entre em contato com o Admnistrador do
            Sistema.</p>
        
        ";
        echo mysqli_error($conexao);
    }
} else {

    echo "
    <p>Esta e uma pagina de tratamento de dados</p>
    <p>Clique <a href='listProduto.php'>aqui</a> para cadastrar um novo produto no catálogo.</p>

";
}
