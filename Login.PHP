<?PHP



$dbHost = 'Localhost';

$dbUsername ='root';

$dbPass = '';

$dbName = 'Nixies';



$con = mysqli_connect($dbHost,$dbUsername,$dbPass,$dbName);




if(mysqli_connect_errno())

{

    echo "Erro";

}

else{

    echo "Conexao efetuada com sucesso";

}



?>