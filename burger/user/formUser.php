<?php
include "../adm/control.php";
?>
<div class="container">
    <!--Inicio do formulário-->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card alert bg-warning">
                <form name="form" action="includeUser.php" class="was-validated" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tel" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="tel" name="tel" required maxlength="20">

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="cel" class="form-label">Celular:</label>
                        <input type="text" class="form-control" id="cel" name="cel" required maxlength="20">

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha" required>
                    </div>
                    <div class="form-check mb-3 text-start">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">Aceitar termos</label>
                    </div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                       Se cadastrar
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
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

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Fim do formulário-->
</div>

<?php
include "../adm/footer.php";
?>
