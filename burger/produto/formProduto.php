<?php
include "../adm/control.php";
?>

<div class="container">
    <!--Inicio do formulário(fomulário padrão que pode ser modificado)-->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card alert bg-warning">
                <h1 class="text-center">
                    Cadastro de produtos
                </h1>
                <hr>
                <form name="form" action="includeProduto.php" class="was-validated" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="nomePdt" class="form-label">Nome do produto:</label>
                        <input type="text" class="form-control" id="nomePdt" name="nomePdt" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tipoPdt" class="form-label">Tipo de produto:</label>
                        <input type="text" class="form-control" id="tipoPdt" name="tipoPdt" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tipoPdd" class="form-label">Tipo de pedido:</label>
                        <input type="text" class="form-control" id="tipoPdd" name="tipoPdd" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="preco" class="form-label">Preço do produto:</label>
                        <input type="text" class="form-control" id="preco" name="preco" required maxlength="20">

                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descição do produto</label>
                        <textarea class="form-control" id="descricao" rows="3" maxlength="150" name="descricao"></textarea>
                    </div>
                    <!-- Botão para abrir o  Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Cadastrar produto
                    </button>

                    <!--Inicio do Modal(modal padrão que pode ser modificado) -->
                    <div class="modal text-center" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmação de cadastro</h4>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Cadastrado realizado com sucesso!
                                </div>

                                <!-- Modal footer(caso ocorra mudança no modal, ficar atento: button type= submit) -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Fim do modal-->
                </form>
            </div>
        </div>
    </div>
    <!--Fim do formulário-->
</div>

<?php
include "../adm/footer.php";
?>