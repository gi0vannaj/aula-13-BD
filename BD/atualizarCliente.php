<?php 
/*******************************************
    Objetivo: atualizar dados de clientes existente no Banco de dados
    Data: 13/10/2021
    Autor: Giovanna
********************************************/

//import do arquivo de conexao com o banco de dados
require_once('../BD/conexaoMysql.php');

function editar($arrayCliente)
{
    $sql= "update tblcliente set 
                nome = '".$arrayCliente['nome']."',
                rg = '".$arrayCliente['rg']."',
                cpf = '".$arrayCliente['cpf']."',
                telefone = '".$arrayCliente['telefone']."',
                celular = '".$arrayCliente['celular']."',
                email = '".$arrayCliente['email']."',
                obs = '".$arrayCliente['obs']."'
                
            where idcliente = ".$arrayCliente['id'];
    
        //Chamando a funçao que estabelece a conexao com o BD
        $conexao = conexaoMysql();
    //Enviar o script   SQL para o BD
        if( mysqli_query($conexao, $sql))
            return true; //retorna verdadeiro se o registro for inserido no banco de dados
        else
            return false;//retorna falso se houver algum problema
}


?>