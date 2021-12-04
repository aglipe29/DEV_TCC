<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Perfil</title>
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

        .card{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 15px;
            background-color: #5DDADB;
            position: absolute;
            border-radius: 40px;
            padding: 50px;
            left: 35%;
            top: 15%;
            color: #131d47;
            }

       

        .card .icon{
           display: inline-block;
           color: white;
           background-color: #131d47;
           position: absolute;
           padding: 35px;
           left: 32%;
           top: 5%;
           font-size: 50px;
           border-radius: 50px;
        }

         input{
            font-size:  15px;
            border-radius: 15px;
            padding: 15px;
        }

</style>
<body>
    
    <div class="navbar">

        <div class="btn">
            
           <b> <a href="Tela de Transição.php">&#10550;</a></b>
        
    </div>

    <div class="card">
        <div class="icon">
        <i class="fas fa-user"></i>
        </div>
        <br><br><br><br><br><br>
        <div class="nomeusu">
        <b><p style="font: bolder;">Nome de Usuário</p></b>
        <input type="text" >
    </div>
        <br>
        <b><p style="font: bolder;">Site ou Link</p></b>
        <input type="text" >
        <br><br>
        <b><p style="font: bolder;">Biografia</p></b>
        <input type="text">


       
       
      </div>
      
</body>
</html>