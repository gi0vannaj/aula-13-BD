<?php
/*******************************************
    Objetivo: Arquivo responsável por receber o id do cliente e encaminhar para a funçao que ira excluir o dado
    Data: 29/09/2021
    Autor: giovanna
********************************************/

//Import do arquivo de configuração de varaiveis e constantes
require_once('../functions/config.php');

//Import do arquivo para excluir no BD
require_once(SRC.'/bd/excluirCliente.php');

//O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
    $idCliente = $_GET['id'];


//chama a funçao excluir e encaminha o id que sera removido do banco de dados
if(excluir($idCliente))
    echo(BD_MSG_EXCLUIR);
else
    echo("
                <script>
                    alert('".BD_MSG_ERRO."');
                    window.history.back();
                </script>
            
            ");
        



?>