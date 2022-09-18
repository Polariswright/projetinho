<?php
include "control.php";
include "conexao.php";
$sql = "select * from produto order by tipoPdt";
$seleciona = mysqli_query($conexao, $sql);

?>
<h1>INDEX</h1>
<hr>
<div class="row">
  <?php
  //Loop do card no index
  while ($exibe = mysqli_fetch_array($seleciona)) {
    $idProd = $exibe['idProd'];
  ?>

    <div class="col-12 col-md-4">
      <!--Card do index(padrão/ caso ocorra mudança no tipo de card, se atentar ao lugar do PHP aberto)-->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top">
        <div class="card-body">
          <p class="card-text"><?php echo $exibe['nomePdt'] ?></p>
        </div>
      </div>
      <!--Card do index-->
    </div>

  <?php
  }
  ?>
</div>

<?php
include "footer.php";
?>