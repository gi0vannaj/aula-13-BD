<?php
/*******************************************
    Objetivo: Arquivo responsável por receber o id do cliente e encaminhar para a funçao que ira buscar o dado
    Data: 06/10/2021
    Autor: giovanna
********************************************/

//Import do arquivo de configuração de varaiveis e constantes
require_once('../functions/config.php');

//Import do arquivo para excluir no BD
require_once(SRC.'/bd/listarClientes.php');

//O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
    $idCliente = $_GET['id'];

////chama a funçao para buscar pelo id do cliente
$dadosClientes = buscar($idCliente);
    
//chama a funçao buscar e encaminha o id que sera localizado o banco de dados
if($rsClientes = mysqli_fetch_assoc($dadosClientes))
{
    
    //   ativa a utilizaçao de variaveis de sessao (sao variaveis globais)
    session_start();
        
        //criamos uma variavel de sessao para guardar o array com os dados do cliente que retornou do BD
        $_SESSION['cliente'] = $rsClientes;
    
        //permite chamar uma variavel de sessao para guardar o array atraves do php
        header('location:../index.php'); 

}
else
//    echo("
//                <script>
//                    alert('".BD_MSG_ERRO."');
//                    window.history.back();
//                </script>
//            
//            ");
        



?>
