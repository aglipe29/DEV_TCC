<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

       // print_r('Email: ' . $email);
       // print_r('Senha: ' . $senha);

      $sql ="SELECT * FROM Usuario WHERE email = '$email' and senha ='$senha'";

      $result = $con->query($sql);

      //print_r($result);
    

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header('Location: Tela de Inicio e Login.php');
 
    }

    else{

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
           
           header('Location: Tela de Transição.php');
    }
}
 
    
    else{
        header('Location: Tela de Inicio e Login.php');
    }

?>