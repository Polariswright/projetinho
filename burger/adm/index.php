<?php
include "control.php";
include "conexao.php";
$sql = "select * from produto order by tipoPdt";
$seleciona = mysqli_query($conexao, $sql);

?>

<!--Início do Carrossel-->
<div class="carrossel m-5 border border-dark">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imgs/brasa.png" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="../imgs/batata.png" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="../imgs/refil.png" class="d-block w-100 " alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!--Fim do Carrossel-->

<hr>


<div class="row">
  <?php
  //Loop do card no index
  while ($exibe = mysqli_fetch_array($seleciona)) {
    $idProd = $exibe['idProd'];
  ?>

    <div class="col-12 col-md-4">
      <!--Card do index(padrão/ caso ocorra mudança no tipo de card, se atentar ao lugar do PHP aberto)-->
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $exibe['nomePdt'] ?></h5>
              <p class="card-text"><?php echo $exibe['descricao'] ?></p>
              <p class="card-text"><small class="text-muted"><?php echo number_format($exibe['preco'], 2, ',', '.') ?></small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo $exibe['foto'] ?>" class="img-fluid rounded-start" alt="...">
          </div>
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