<?php 
/*******************************************
    Objetivo: Buscar ou listar os dados de clientes solicitando ao Banco de dados
    Data: 23/09/2021
    Autor: Giovanna
********************************************/

//Import do arquivo para inserir no BD
require_once(SRC.'BD/listarClientes.php');

function exibirClientes()
{
    //chama a funçao que busca os dados no banco e recebe os registros de clientes
    $dados = listar();
    return $dados;
}









?>