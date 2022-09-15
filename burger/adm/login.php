<?php
include "control.php"
?>
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card alert bg-warning rounded">
            <div class="card-body alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </div>
            <div class="card-footer alert">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="login" class="form-label" name="login">Login</label>
                        <input type="text" name="login" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label" name="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">OK</button>
                    <p><a href="../user/formUser.php">Não possuo cadastro</a></p>
                </form>

                <?php
                include "valida.php"
                ?>

            </div>
        </div>
    </div>
    <?php
    include "footer.php"
    ?>