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
                
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

        </div>
    </div>
</div>