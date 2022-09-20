<?php
include "control.php";
include "conexao.php";
$sql = "select * from produto order by tipoPdt";
$sql1 = "select tipoPdt from produto where tipoPdt='Hamburguer'";
$sql2 = "select tipoPdt from produto where tipoPdt='Batata'";
$sql3 = "select tipoPdt from produto where  tipoPdt='Bebida'";
$seleciona = mysqli_query($conexao, $sql);
$burger = mysqli_query($conexao, $sql1);
$potato = mysqli_query($conexao, $sql2);
$drink = mysqli_query($conexao, $sql3);

?>
<div class="row">
  <div class="col">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search">
      <button class="btn btn-success" type="submit">Go</button>
    </div>
  </div>
  <div class="col text-end">
    <h4><a class="" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
          <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
        </svg>
        Filtrar</a>
    </h4>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Filtro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h1>Categoria</h1>
        <form action="#" method="get" name="form">
          <select class="form-select" aria-label="Default select example" name="category">
            <option selected>Open this select menu</option>
            <option >Burger</option>
            <option >Potato</option>
            <option >Drink</option>
          </select>
          <hr>
          <button type="submit" class="btn btn-outline-danger">Confirmar</button>
        </form>
      </div>
    </div>
  </div>

</div>

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


<div class="row mt-2">
  <?php
  //Loop do card no index
  while ($exibe = mysqli_fetch_array($seleciona)) {
    $idProd = $exibe['idProd'];
  ?>

    <div class="col">
      <!--Card do index(padrão/ caso ocorra mudança no tipo de card, se atentar ao lugar do PHP aberto)-->
      <div class="card m-3" style="width: 18rem;">
        <img src="<?php echo $exibe['foto'] ?>" class="card-img-top">
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