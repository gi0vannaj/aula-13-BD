<?php

/****************************************************************
    Objetivo: listar todos os dados de clientes do Banco de dados
    Data:23/09/2021
    Autor:Giovanna
*****************************************************************/

//Import do arquivo
require_once('BD/conexaoMysql.php');

function listar()
{
    $sql = "select * from tblcliente order by idcliente desc ";
    
    //abre a conexao com o banco de dados
    $conexao = conexaoMysql(); 
    
    //solicita ao B a execuçao do script SQL
    $select = mysqli_query($conexao ,$sql);
    
    return $select;
}













?>