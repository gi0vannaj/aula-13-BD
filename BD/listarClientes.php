<?php

/****************************************************************
    Objetivo: listar todos os dados de clientes do Banco de dados
    Data:23/09/2021
    Autor:Giovanna
*****************************************************************/

//Import do arquivo
require_once(SRC.'BD/conexaoMysql.php');

//retorna todos os registros existentes do banco
function listar()
{
    $sql = "select * from tblcliente order by idcliente desc ";
    
    //abre a conexao com o banco de dados
    $conexao = conexaoMysql(); 
    
    //solicita ao Bd a execuçao do script SQL
    $select = mysqli_query($conexao ,$sql);
    
    return $select;
}

//retorna apenas um registro com base no id
function buscar($idCliente)
{
     $sql = "select * from tblcliente
            where idcliente = ".$idCliente;
    
    //abre a conexao com o banco de dados
    $conexao = conexaoMysql(); 
    
    //solicita ao Bd a execuçao do script SQL
    $select = mysqli_query($conexao ,$sql);
    
    return $select;
}











?>