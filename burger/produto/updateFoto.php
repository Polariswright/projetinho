<?php

include "../adm/conexao.php";

if (isset($_POST['idProd'])) {

    $idProd =$_POST['idProd'];
    $nome = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    $caminho = '../foto/';
    $foto = $caminho . $nome;

    $upload = move_uploaded_file($temp,$foto);
    if ($upload) {

        $sql = "update produto set foto='$foto'
        where idProd='$idProd'";
        $alterar = mysqli_query($conexao, $sql);
    }
    if ($alterar) {

        echo "
            <script>
                alert('Foto atualizada com sucesso!');
                window.location= 'listProduto.php';
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
} else {
    echo "
    <p>Esta e uma pagina de tratamento de dados</p>
    <p>Clique <a href='listarUser.php'>aqui</a> para cadastrar um usuário.</p>

    ";
}
