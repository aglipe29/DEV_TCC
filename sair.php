<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: Tela de Inicio e Login.php');

?>