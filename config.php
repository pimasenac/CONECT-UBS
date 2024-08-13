<?php

$dbHost = 'Localhost';
$dbUsername ='root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//if($conexao->connect_errno)
//{
//  echo"ERROU";
//}
//else
//{
//    echo"CONEXÃO EFETUADA COM SUCESSO";
//}

?>