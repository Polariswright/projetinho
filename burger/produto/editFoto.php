<?php

include "../adm/conexao.php";
include "../adm/control.php";

if (isset($_GET['idProd'])) {

    $idProd = $_GET['idProd'];
    $sql = "select * from produto where idProd='$idProd'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
}

?>


<div class="container pag">
    <h1>Alterar Foto: <?php echo $exibe['nomePdt']?></h1>
    <hr>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="updateFoto.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idProd" value="<?php echo $idProd ?>">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="foto" aria-describedby="inputGroupFileAddon03" aria-label="Upload" name="foto">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon03">Resgistrar foto</button>
                </div>
                <div class="row">
                    <div class="col text-start">
                        <button type="button" class="btn btn-warning btn-sm mt-5" onclick="window.history.go(-1)">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php

include "../adm/footer.php";
