<?php
        if(isset($_POST['submit']))
        {
          include_once('config.php');
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];

          $result = mysqli_query($con,"INSERT INTO Usuario (nome,email,senha) VALUES ('$nome','$email','$senha')");

          header('Location: Tela de Inicio e Login.php');
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body{
            background-color: #131d47;
        }

        .navbar{
            background-color: #131d47;
            overflow: hidden;
            border-bottom: 3px white solid;
        }

        .btn a{
            font-size: 50px;
            text-decoration: none;  
            color:white;
            padding-left: 20px;
        }

        .dropdown {
        float: right;
        margin-top: -5%;
        }

        .dropdown .dropbtn {
        font-size: 20px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: #131d47;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
        background-color:#131d47;
        }

        .dropdown-content {
        display:none;
        position: absolute;
        background-color:#131d47;
         min-width: 170px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        font-size: 20px;
        float: none;
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: list-item;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        }

        .dropdown-content a:hover {
         background-color: blue;
        }   

        .dropdown:hover .dropdown-content {
        display:list-item;
        }

        .Cadastro {
            background-color:#5DDADB;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 25px;
            color: #131d47;
            position: absolute;
            top: 23%;
            left: 35%;
            padding: 45px;
        }

        input{
            border-radius: 15px;
            padding: 15px;
             font-size: 15px;
            background-color:white;
            width: 90%;
        }

       button{
           background-color: #131d47;
           width: 100%;
           padding: 15px;
           border-radius: 15px;
           outline: none;
       }

       button a{
           text-decoration: none;
           color: white;
           font-size: 20px;
       }
         
        h1{
        text-align: center;
    }

      </style>
</head>
<body>
    
    <div class="Navbar">

        <div class="btn">
            
                <b><a href="Tela de Inicio e Login.php">&#10550;</a></b>
            
        </div>

        <div class="dropdown">
            <button class="dropbtn"><b>Mais Sobre o Nixies &#9662
              <i class="fa fa-caret-down"></i></b>
            </button>

            <div class="dropdown-content">
                <a href="Sobre os devs.html">Sobre os Dev's</a>
                <a href="atualizações.html">Atualizações</a>
                <a href="Tela de Assinatura.html">Nixies Premium</a>

            </div>
           </div>


    </div>

    <div class="Cadastro">
        <form method="POST" action="Tela de Cadastro.php">
        
        <h1>Vai Entrar Como?</h1>
        <div class="Input">
             <p>
        
        <input type="text" placeholder="Nome" name="nome" id="nome">
        <br><br>
       
        <input type="text" placeholder="Email" name="email" id="email">
             </p>
        <br>
        
       
        <input type="password" placeholder="Senha" name="senha" id="senha">
        
        <br>  
        <br>
       </div> 
        <br>
        <br>
       
        <input type="submit" value="Criar Conta" name="submit" id="submit" style="width: 100%; background-color: #131d47;
        color: white; font-size: 20px; padding: 10px;">
        </div>

    </div>
        </form>
    </div>
</body>
</html>