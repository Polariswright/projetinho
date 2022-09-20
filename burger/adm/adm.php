<?php
include "control.php";
include "conexao.php";
$sql = "select * from produto order by nomePdt";
$seleciona = mysqli_query($conexao, $sql);
?>

<h1>ÁREA DO ADMINISTRADOR</h1>
<div class="row">
    <div class="col">
        <div class="card">
           
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
