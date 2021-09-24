<?php
/*
--------
Objetivo:arquivo para configurar a conexao com o Bando de Dados MySQL
Data: 15/09/2021
Autor: Giovanna 
--------
*/

//abrindo conexao com a base de dados MySQL
function conexaoMysql ()
{   
    //declaraçao de variaveis para conexao com banco de dados
    $server   = (string) BD_SERVER;
    $user     = (string) BD_USER;
    $password = (string) BD_PASSWORD;
    $database = (string) BD_DATABASE;
    
    
    /*
        Formas de se conectar com o banco de dados
        
        mysql_connect();
        mysqli_connect(); MAIS SEGURO, POSSIBILITA POO E PROCEDURAL, MAIS ATUAL
        PDO();Conexao com qualquer banco
    */
    
    if($conexao = mysqli_connect($server, $user, $password, $database))
        return $conexao;
    
    else
    {
        echo(ERRO_CONEXAO_BD);
        return false;
    }
    
    
}












?>