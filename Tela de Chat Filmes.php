<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Chat Filmes</title>
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

        .telaFundo{
            width: 95%;
            height: 75%;
            position: absolute;
            background-color:#5DDADB;
            padding: 20px;
            margin-top: 10px;
            border-radius: 20px;
        }

       

        

        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            width: 18%;
            text-align: center;
            font-size: 16px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;
            font-family:Arial, Helvetica, sans-serif ;
            font-size: 20px;
            }

        .chip img {
             float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .chat{
            width: 70%;
            height: 90%;
            display: inline-block;
            background-image: linear-gradient(to right, #131d47 ,white );
            border-radius: 15px;
            padding: 20px;
            margin-left: 25%;
          }

       .chat .input{
           background-color: #131d47;
           padding: 13px;
           border-radius: 15px;
           width: 102%;
           margin-top: 41%;
           margin-left: -22px;
       }

       i{
           color: white;
           float: right;
           font-size: 30px;
           margin-right: 20px;
           margin-top: 5px;
       }

       input{
           border-radius: 10px;
           font-size: 15px;
           padding: 10px;
           width: 50%;
           outline: none;
       }

       button{
           background-color: blue;
           color: white;
           outline: none;
           padding: 8px;
           margin-left: 15px;
           font-size: 15px;
       }




    </style>

</head>
<body>

    <div class="navbar">

        <div class="btn">
            
           <b><a href="Tela de Questionário.php">&#10550;</a></b> 
        
    </div>
</div>

<div class="telaFundo">

    <div class="chat">

       <b><p style="font-size: 30px; text-align: center; background-color:#5DDADB; border-radius: 15px;font-family: Arial, Helvetica, sans-serif; color: #131d47; padding: 10px; margin-top: -20px; width: 103%; margin-left: -22px; ">
            
            Filmes</p></b>

            
        <div class="input">
            
        <input type="text" placeholder="Digitar..."> <i class="fas fa-microphone"></i>
        <button><b>Enviar</b></button>
    </div>
    </div>
   

    <div class="participantes">
    <b><p style="background-color: white; color: #131d47; border-radius: 20px; width: 20%; padding: 10px; 
    text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 20px;margin-top: -35%;">
        Participantes</p></b>
    </div>

    <div class="chip">
        <img src="avatar imagem.png" alt="Person" width="96" height="96">
        Participante 1
      </div>

      <br><br>

      <div class="chip">
        <img src="avatar imagem.png" alt="Person" width="96" height="96">
        Participante 2
      </div>

      <br><br>

      <div class="chip">
        <img src="avatar imagem.png" alt="Person" width="96" height="96">
        Participante 3
      </div>
      
      <br><br>


      <div class="chip">
        <img src="avatar imagem.png" alt="Person" width="96" height="96">
        Participante 4
      </div>

      <br><br>

      <div class="chip">
        <img src="avatar imagem.png" alt="Person" width="96" height="96">
        Participante 5
      </div>

      <br><br>

      

       

    
</div>

    

</body>
</html>