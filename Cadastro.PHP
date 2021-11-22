<?PHP

$dbHost = 'Localhost';
$dbUsername ='root';
$dbUsername = '';
$dbName = 'Nixies';

$conexao = new mysqli($dbHost,$dbUsername,$dbUsername,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}
else{
    echo "Conexao efetuada com sucesso";
}

?>
