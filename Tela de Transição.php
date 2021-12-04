<?php

    session_start();
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
   {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Tela de Inicio e Login.php');
   }
   $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Home</title>

    <style>
        body{
            background-color: #131d47;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color:#131d47;
            text-align: center;
            color:white;
            font-size: 30px;
            border-bottom: 3px solid white;
            padding: none;
        }   

        .navbar .voltar a{
            float: left;
            font-size: 50px;
            text-decoration: none;  
            color:white;
            padding-left: 20px;
        }

        .dropdown {
        float: right;
        bottom: 90%;
        
        

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
        }

        .dropdown-content a:hover {
         background-color: blue;
        }   

        .dropdown:hover .dropdown-content {
        display:list-item;
        }

        .paragrafo{
            text-align: center;
            font-size: 30px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }




        
        .servidor{
            font-family: Arial, Helvetica, sans-serif;
            color:#131d47;
            background-color: #5DDADB;
            position: absolute;
            padding: 50px;
            text-align: center;
            font-size: 30px;
            border-radius: 20px;
            left: 20%;
            top: 30%;

        }

       

        .servidor .diceIcon a{
            display: inline-block;
            color: white;
            background-color:#131d47;
            padding: 30px;
            border-radius: 20px;
            text-decoration: none;
           }

           .perfil{
            font-family: Arial, Helvetica, sans-serif;
            color:#131d47;
            background-color: #5DDADB;
            position: absolute;
            padding: 50px;
            text-align: center;
            font-size: 30px;
            border-radius: 20px;
            
            top: 30%;
            left: 55%;
        }

        .perfil .userIcon a{
            display: inline-block;
            color: white;
            background-color:#131d47;
            padding: 30px;
            border-radius: 20px;
            text-decoration: none;

        }

         </style>
</head>
<body>


    <div class="navbar"> 
        <div class="voltar">
           <b><a href="sair.php">&#10550;</a></b>

        </div>
          
           

           <div class="dropdown">
            <button class="dropbtn"><b>Mais Sobre o Nixies &#9662
              </b>
            </button>

            <div class="dropdown-content">
                <a href="Sobre os devs.html">Sobre os Dev's</a>
                <a href="atualizações.html">Atualizações</a>
                <a href="Tela de Assinatura.html">Nixies Premium</a>

            </div>
           </div>
    </div>

    <div class="paragrafo">

   <b><p> O que você Quer Fazer Agora?</p></b>

    </div>
           <div class="servidor">
               
              <b> <p> Sortear Servidor</p></b>
            
            <br><br>

            <div class="diceIcon">
               <a href="Tela de Questionário.php"><i class="fas fa-dice"></i></a>
            </div>

        </div>


        <div class="perfil">
           <b> <p>Personalizar Perfil</p></b>

            <br><br>

            <div class="userIcon">
               <a href="Tela de Perfil.php"><i class="fas fa-user"></i></a>
            </div>
        </div>


        
        
       
           
    

   
    
</body>
</html>