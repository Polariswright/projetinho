<?php
include "control.php";
?>
<div class="row justify-content-end">
    <div class="col-4">
        <div class="card alert bg-warning rounded">
            <div class="card-body alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </div>
            <!--card contendo o fomulário de login-->
            <div class="card-footer alert">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="login" class="form-label" name="login">Login</label>
                        <input type="text" name="login" class="form-control" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Recipient's username" id="showLg" name="senha">
                        <button class="btn" type="button" onclick="seeLg(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </button>

                    </div>
                    <button type="submit" class="btn btn-primary">OK</button>
                    <p><a href="../user/formUser.php">Não possuo cadastro</a></p>
                </form>
                <!--alerta de  de login (pode ser customizado no valida.php)-->
                <?php
                include "valida.php";
                ?>

            </div>
        </div>
        <!--fim do card contendo-->
    </div>
    <?php
    include "footer.php";
    ?>