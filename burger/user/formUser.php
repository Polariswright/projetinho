<?php
include "../adm/control.php";
?>
<div class="container">
    <!--Inicio do formulário(formulário padrão que pode ser modificado)-->
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card alert">
                <form name="form" action="#" class="was-validated" method="POST">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="caixinha form-control" id="login" name="login" placeholder="Login" required>
                        <label for="login" class="form-label">Login:</label>

                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="email" class="caixinha form-control" id="email" name="email" placeholder="example@email.com" required>
                        <label for="nome" class="form-label">Email:</label>

                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="caixinha form-control" id="nome" name="nome" required placeholder="Nome completo">
                        <label for="email" class="form-label">Nome:</label>

                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="caixinha form-control" id="cel" name="cel" required maxlength="20" placeholder="Digite seu celular">
                        <label for="cel" class="form-label">Celular:</label>

                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="caixinha form-control" id="endereco" name="endereco" required placeholder="Endereço">
                        <label for="endereco" class="form-label">Endereço:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="caixinha form-control" id="senha" placeholder="Crie uma senha" name="senha" required>
                        <label for="pwd" class="form-label">Senha:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="caixinha form-control" id="senhaC" placeholder="Confirme sua senha" name="senhaC" required>
                        <label for="pwd" class="form-label">Confirmar Senha:</label>
                    </div>
                    <div class="form-check mb-3 text-start">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">Aceitar termos</label>
                    </div>
                    <?php include "includeUser.php"; ?>
                    <!-- Botão para abrir o  Modal -->
                    <button type="submit" class="ok btn" data-bs-toggle="modal" data-bs-target="#myModal">
                        Se cadastrar
                    </button>

                </form>
            </div>
        </div>
    </div>
    <!--Fim do formulário-->
</div>

<?php
include "../adm/footer.php";
?>