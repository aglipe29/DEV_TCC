<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Questionário</title>
</head>
    <style>
        body{
            background-color: #131d47;
        }

        .navbar{
            background-color: #131d47;
            overflow: hidden;
            border-bottom: 3px solid white;
        }

        .btn a{
            font-size: 50px;
            text-decoration: none;  
            color:white;
            padding-left: 20px;
        }

        .perguntas{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            text-align: center;
            background-color: #5DDADB;
            width: 80%;
            border-radius: 20px;
            position: absolute;
            margin-top: 30px;
            margin-left: 8%;
            color: #131d47;
            padding: 10px;
         }

         .perguntas .filmes{
             width: 20%;
             margin-top: 5%;
             margin-left: 5%;
             color: white;
             background-color: #131d47;
             padding: 10px;
             border-radius: 20px;
        
         }

         .perguntas .jogos{
             width: 20%;
             margin-left: 37%;
             margin-top: -127px;
             color: white;
             background-color: #131d47;
             border-radius: 20px;
             padding: 10px;
         }

         .perguntas .series{
             width: 20%;
             margin-left: 70%;
             margin-top: -128px;
             color: white;
             background-color: #131d47;
             border-radius: 20px;
             padding: 10px;
         }

         .perguntas .livros{
             width: 20%;
             margin-left: 20%;
             margin-top: 5%;
             color: white;
             background-color: #131d47;
             border-radius: 20px;
             padding: 10px;
         }

         .perguntas .animes{
             width: 20%;
             margin-left: 53%;
             margin-top: -11%;
             margin-bottom: 5%;
             color: white;
             background-color: #131d47;
             border-radius: 20px;
             padding: 10px;
         }

         a{
             text-decoration: none;
             color: white;
         }
    </style>
<body> 

    <div class="navbar">

        <div class="btn">
            
           <b><a href="Tela de Transição.php">&#10550;</a></b> 
        
    </div>
</div>

<div class="perguntas">
    <b><p> O que você mais consome últimamente?</p></b>

    <div class="filmes">
        <b><p>Filmes</p></b>
        <a href="Tela de Chat Filmes.php"><i class="fas fa-video"></i></a>
    </div>

    <div class="jogos">
        <b><p>Jogos</p></b>
       <a href="Tela de Chat Jogos.php"><i class="fas fa-gamepad"></i></a>
    </div>

    <div class="series">
        <b><p>Séries</p></b>
       <a href="Tela de Chat Séries.php"> <i class="fas fa-tv"></i></a>
    </div>

    <div class="livros">
        <b><p>Livros</p></b>
       <a href="Tela de Chat Livros.php"> <i class="fas fa-book-open"></i></a>
    </div>

    <div class="animes">
        <b><p>Animes</p></b>
        <a href="Tela de Chat Animes.php"><i class="fas fa-hat-wizard"></i></a>
    </div>
</div>




   
    
</body>
</html>