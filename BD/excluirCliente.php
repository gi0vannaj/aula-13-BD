<?php

/******************************
objetivo: excluir dados do Cliente no Banco de dados
data 29/09/21
**********************/

require_once('../BD/conexaoMysql.php');
function excluir($idcliente)
{
    $sql = "delete from tblcliente where idcliente =".$idcliente;
    
    //Chamando a funçao que estabelece a conexao com o BD
    $conexao = conexaoMysql();
    
    if( mysqli_query($conexao, $sql))
        return true; 
    else
        return false;
}


?>