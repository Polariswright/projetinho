<?php
include "../adm/securityAdm.php";
include "../adm/conexao.php";

if(isset($_GET['idProd'])){

    $idProd =$_GET['idProd'];

    $sql="delete from produto where idProd='$idProd'";
    $excluir=mysqli_query($conexao,$sql);
    if($excluir){
        header('location: listProduto.php');
    }else{
        echo "
            <p>Sistema temporariamente fora do ar. Tente
            novamente mais tarde.</p>
            <p>Entre em contato com o Admnistrador do
            Sistema.</p>
        
        ";
        echo mysqli_error($conexao);
    }
}
else{
    echo "
            <p>Esta e uma pagina de tratamento de dados</p>
            <p>Clique <a href='listProduto.php'>aqui</a> para excluir um produto.</p>
        
        ";
 }



?>