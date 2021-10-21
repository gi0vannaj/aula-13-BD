<?php

/*******************************************
    Objetivo: Arquivo responsável por  biscar o registro para exibir na modal do visualizar
    Data: 21/10/2021
    Autor: giovanna
********************************************/

function visualizarCliente($id)
{
    //Import do arquivo de configuração de varaiveis e constantes
require_once('functions/config.php');

//Import do arquivo para excluir no BD
require_once(SRC.'/bd/listarClientes.php');

//Recebe o  id  enviado como argunmento na funçao
    $idCliente = $id;

////chama a funçao para buscar pelo id do cliente
$dadosClientes = buscar($idCliente);
    
//converte o resultado do BD em um array atraves do mysqli_assoc
if($rsClientes = mysqli_fetch_assoc($dadosClientes))
    return $rsClientes;
else
    return false;
}

?>