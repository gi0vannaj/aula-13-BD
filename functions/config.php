<?php

/*--------
    Objetivo: aquivo de configuraçao de variaveis e constantes que serao utilizdas no sistema
    Data: 15/09/2021
--------
*/

//CONSTANTE PARA INDICAR A PASTA RAIZ DO SERVIDOR MAIS A ESTRUTURA DE DIRETORIO ATE O MEU PROJETO
    define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/AULA13/crud/');

//variantes e constantes opara conexao com o banco de dados
const BD_SERVER = 'localhost';
const BD_USER = 'root';
const BD_PASSWORD = 'bcd127';
const BD_DATABASE = 'dbcontatos20212t';


//mensagens de erro do sistema
    
    const ERRO_CONEXAO_BD = "Falha na conexao com o BANCO DE DADOS. Entre em conato com o administrador do sistema";

    const ERRO_CAIXA_VAZIA = "Não foi possivel realizar a operção, pois existem campos obrigatórios a serem preenchidos";

    const ERRO_MAXLENGHT = "Não foi possivel realizar a operção, pois a quantidade de caracteres ultrapassa o permitido no Banco de Dados";

//mensagens de aceitaçao e validaçao de dados no banco
    
    const BD_MSG_INSERIR = "Regitro salvo com sucesso no Bando de Dados";
    const BD_MSG_ERRO = "ERRO: Nao foi possivel manipular os dados no banco de dados";

?>