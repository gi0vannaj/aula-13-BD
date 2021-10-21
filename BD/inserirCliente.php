<?php
/******************************
objetivo: inserir dados do Cliente no Banco de dados
data 16/09/21
**********************/

//Import do arquivo
require_once('../BD/conexaoMysql.php');
    function inserir ($arayCliente)
    {
        $sql = "insert into tblcliente
                (
                    nome,
                    rg,
                    cpf,
                    telefone,
                    celular,
                    email,
                    obs
                )
                values
                (
                    '".$arayCliente['nome']."',
                    '".$arayCliente['rg']."',
                    '".$arayCliente['cpf']."',
                    '".$arayCliente['telefone']."',
                    '".$arayCliente['celular']."',
                    '".$arayCliente['email']."',
                    '".$arayCliente['obs']."'
                )
        ";
        
    //Chamando a funçao que estabelece a conexao com o BD
        $conexao = conexaoMysql();
    //Enviar o script   SQL para o BD
           if( mysqli_query($conexao, $sql))
               return true; //retorna verdadeiro se o registro for inserido no banco de dados
            else
                return false;//retorna falso se houver algum problema
        
        //echo($sql);

    }
        
    









?>