<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "formulário";

$conexao = new mysqli($dbHost,$dbUsername,$dbpassword,$dbname);

if($conexao->connect_errno)
{
    echo "erro";

}
else
{
    echo "conexão efetuada com sucesso";
}


?>