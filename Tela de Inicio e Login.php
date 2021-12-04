<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

    <style>
        body {background-color: #131d47;
                 font-family: Arial, Helvetica, sans-serif;
            
        }
        .navbar {
  overflow: hidden;
  background-color:#131d47;
  border-bottom: 3px solid white;
  
}

.navbar a {
  float: left;
  font-size: 16px;
  color: #131d47;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

.dropdown {
  float: right;
  overflow: hidden;
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







.Login{
    background-color:#5DDADB;
    position: absolute;
    top: 12%;
    left: 60%;
    padding: 60px;
    border-radius: 30px;
    top: 12%;

}

.Titulos{
    color: white;
    text-align: center;
}

input{
    border-radius: 15px;
    padding: 15px;
    font-size: 15px;
    background-color:white;
}

button{
    background-color: #131d47;
    color: white;
    padding: 10px;
    outline: #131d47;
    border-radius: 15px;
    width: 100%;
}

.btn1 a{
    color: white;
    text-decoration: none;
    font-size: 20px;

}

.btn2 a {
    color: white;
    text-decoration: none;
    font-size: 20px;
}

.forgot a{
    text-decoration: none;
    color: white;
    padding: none;


}





    </style>
</head>
<body>
    
    
    <div class="navbar">
       
    
        <div class="dropdown">
          <button class="dropbtn"> <b>Mais Sobre o Nixies &#9662
            <i class="fa fa-caret-down"></i>
            </b>
          </button>
          
          <div class="dropdown-content"><b>
            <a href="Sobre os devs.html">Sobre os Dev's</a>
            <a href="atualizações.html">Atualizações</a>
            <a href="Tela de Assinatura.html">Nixies Premium</a>
          </b>
          </div>
        </div> 
      </div>
      
   </div>

  
        <div class="Login">
            <form method="POST" action="testeLogin.php">
            <div class="Titulos">
            <h1><b>Login</b></h1>
            <div class="Input">
            <input type="text" placeholder="Email" name="email" id="email">
            <br>
            <br>
            <input type="password" placeholder="Senha" name="senha" id="senha">
            </div>
            <br>
            <br>
           <input type="submit" value="Logar" id="submit" name="submit" style="width: 100%; background-color: #131d47; color: white; 
            font-size: 20px;"><br>
            <h2> OU </h2>

            <button>
                <div class="btn2">
                <b><a href="Tela de Cadastro.php" >Criar Conta</a></b>
            </div>
            </button>

           
                <p>  
                    <div class="forgot">
                   <b><a href="Esqueceu a Senha.html"> Esqueceu sua Senha?</a></b>
                </div>
                </p>
            </div>

        </div>
            </form>
        </div>

        <div class="Imagem">
            <img src="Imagem Nixies.jpg" width="800" height="600"
            alt="">
        </div>

        
    
        
   
</html>