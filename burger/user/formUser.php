<?php
include "../adm/control.php";
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card alert bg-warning">
                <form name="form" action="includeUser.php" class="was-validated" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                        
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
                    <div class="form-check mb-3 text-end">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">Aceito???</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "../adm/footer.php";
?>