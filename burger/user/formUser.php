<?php
include "../adm/control.php";
?>
<div class="container">
    <!--Inicio do formulário(formulário padrão que pode ser modificado)-->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card alert bg-warning">
                <form name="form" action="includeUser.php" class="was-validated" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>

                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>

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
                    <!-- Botão para abrir o  Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Se cadastrar
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
                </form>
            </div>
        </div>
    </div>
    <!--Fim do formulário-->
</div>

<?php
include "../adm/footer.php";
?>