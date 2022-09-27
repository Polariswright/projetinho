<?php
include "../adm/securityAdm.php";
include "../adm/conexao.php";


if (isset($_POST['nomePdt'])) {

    //entrada
    $nomePdt = trim($_POST['nomePdt']);
    $tipoPdt = trim($_POST['tipoPdt']);
    $tipoPdd = trim($_POST['tipoPdd']);
    $descricao = trim($_POST['descricao']);
    $preco = trim($_POST['preco']);
    $preco = strtr($preco,",",".");
    $foto ="../foto/noPic.jpg";

    //processamento
    $sql = "insert into produto(nomePdt,tipoPdt,tipoPdd,descricao,preco,foto) values
    ('$nomePdt','$tipoPdt','$tipoPdd','$descricao','$preco','$foto')";

    $incluir = mysqli_query($conexao, $sql);


    //saida
    if ($incluir) {

        echo "
            <script>
                window.location='listProduto.php';
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
                <p>Esta é uma página de tratamento de dados</p>
                <p>Clique <a href='formProduto.php'>aqui</a> para cadastrar produtos.</p>
            
            ";
}
