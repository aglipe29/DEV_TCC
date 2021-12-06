<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script> 
        var from = null, start = 0,  url = 'http://localhost/DEV_TCC/chat.php';
        $(document).ready(function (){
            from = prompt("Por favor, digite seu nome");
            load();
           $('form').submit(function (e){
               $.post(url, {
                   mensagem: $('#mensagem').val(),
                   from: from
               });
               $('#mensagem').val('');
               return false;
           })
    });

    function load(){
        $.get(url + '?start=' + start, function(result){
            if(result.items){
                result.items.forEach(item => {
                    start = item.id;
                    $('#mensagens').append(renderMessage(item));
                    });
                    $('#mensagens').animate({scrollTop: $('#mensagens')[0].scrollHeight});
                };
                load();
            });
    }

    function renderMessage(item){
        let time = new Date(item.created);
        time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
        return `<div class="msg"><p>${item.from}</p>${item.mensagem}<span>${time}</span></div>`;
    }

    </script> 
    
    <title>Chat Filmes</title>

 
    <style>

body{
            background-color: #131d47;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #mensagens{
            height: 78vh;
            overflow-x:hidden;
            padding: 10px;
            background-image:  linear-gradient(to left, #131d47 ,#5DDADB );
        }

        form{
            display: flex;
        }

        input{
            font-style: 1.2rem;
            padding: 10px;
            margin: 10px 5px;
            appearance: none;
            -webkit-appearance: none;
            border: 3px solid #5DDADB;
            border-radius: 10px;
        }

        #mensagem{
            flex: 2;
        }

        .navbar{
            background-color: #131d47;
            overflow: hidden;
            border-bottom: 3px solid white;
        }

        .navbar p{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            text-align: center;
            margin-top: -4%;
        }

        .btn a{
            font-size: 50px;
            text-decoration: none;  
            color:white;
            padding-left: 20px;
        }

        .msg{
            background-color: #dcf8c6;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 8px;
            width: fit-content;
        }

        .msg p{
            margin: 0;
            font-weight: bold;
        }

        .msg span{
            font-size: 0.7rem;
            margin-left: 15px;
        }



        




    </style>

</head>
<body>


    <div class="navbar">

        <div class="btn">
            
           <b><a href="Tela de Questionário.php">&#10550;</a></b> 

          <b><p>Filmes</p></b>
        
    </div>

    </div>
    
   

    

    <div id="mensagens"></div>
    <form>
        <input type="text" id="mensagem" autocomplete="off" autofocus placeholder="Digite uma mensagem...">
        <input type="submit" value="Enviar" style="background-color:#131d47; color:white;">
    </form>

    



    

    

</body>
</html>