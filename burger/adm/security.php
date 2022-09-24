<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    echo "
        <script>
            window.location='../adm/login.php'
        </script>
    ";
}

?>