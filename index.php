<?php
//ativa a utilizaçao de variaveuis de sessao
session_start();


$nome = (string) null;
$rg = (string) null;
$cpf = (string) null;
$telefone = (string) null;
$celular = (string) null;
$email = (string) null;
$obs = (string) null;
$id = (int) 0;
$modo = (string) "Salvar";//varaiavel utilizada para definir o modo de manipulaçao com o banco de dados(se for salvar sera feito o insert, se tiver atualizar sera feito update)


require_once('functions/config.php');//IMPORT DO ARQUIVO DE CONFIGURAÇAO DE VARIAVEIS E CONSTANTES
   
require_once(SRC.'BD/conexaoMysql.php');
//    conexaoMysql();

require_once(SRC.'controles/exibeDadosClientes.php');

//verifica a existencia da variavel de sessao que usamos para trazer os dados para editar
if(isset($_SESSION['cliente']))
{
    $nome = $_SESSION['cliente'] ['nome'];
    $id = $_SESSION['cliente'] ['idcliente'];
    $rg = $_SESSION['cliente'] ['rg'];
    $cpf = $_SESSION['cliente'] ['cpf'];
    $telefone = $_SESSION['cliente'] ['telefone'];
    $celular = $_SESSION['cliente'] ['celular'];
    $email = $_SESSION['cliente'] ['email'];
    $obs = $_SESSION['cliente'] ['obs'];
    $modo = "Atualizar";
    
}

//elimina um objeto, variavel da memoria
unset($_SESSION['cliente']);


?>




<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="js/jquery.js"></script>
        
        <script>
            $(document).ready(function(){
                //alterando uma propriedade de css ao carregar da pagina
                $('#containerModal').css('display','none');
                
                //abre a modal
               $('.pesquisar').click(function(){
                  $('#containerModal').fadeIn(1000);
                   
                   //recebe o id do cliente que foi adicionado pelo data atributo no html
                   let idcliente= $(this).data('id');
                   
                   //realiza uma requisiçao para consumir dados de uma outra pagina
                   $.ajax({
                       type:"GET",  //tipo de requisiçao (get,post,put,etc)
                       url:"visualizarDados.php",  //url da pagina que sera consumida
                       data:{id:idcliente},
                       success:function(dados){  //se a requisiçao der certo, iremos receber o conteudo na variavel dados
                           $('#modal').html(dados);
                       }
                   });
               }); 
                
                //fecha a modal
                $('#fecharModal').click(function(){
                    $('#containerModal').fadeOut();
                });
            });
        
        </script>

    </head>
    <body>
        <div id="containerModal">
            <span id="fecharModal">Fechar</span>
            <div id="modal">
                teste
            
            </div>
        </div>
        <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Contatos </h1>
            </div>
            <div id="cadastroInformacoes">
                <!--  Principais elementos de formulario para HTML5
                    <input type="tell"> indica que a caixa recebe um telfone
                    <input type="email"> indica que a caixa recebe um email como minimo necessario para ser um email (@)
                    <input type="url"> indica que a caixa recebe uma url valida como minimo necessario (http://)
                    <input type="range"> cria um elemento tipo barra de rolagem horizontal
                    <input type="color"> cria uma paleta de cor para escolha do usuario
                    <input type="date"> cria um calendario para escolha de data
                    <input type="month"> cria um calendario para escolha de somente mes e ano
                    <input type="week"> cria um calendario que retorna o numero da semana do ano
                    <input type="time"> cria um calendario que retorna o numero da semana do ano

                -->
        

            <form  name="frmCadastro" method="post" action="controles/recebeDadosClientes.php?modo=<?=$modo?>&id=<?=$id?>"> <!--as variaveis modo e id que foram utilizadas no action do from sao responsaveis por encaminhar para a pagina recebeDadosCliente.php duas informaçoes: 
                modo- define se é para inserir ou atualizar
                id- identifica o registro a ser atualiazado no BD -->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite seu Nome">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> RG: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtRg" value="<?=$rg?>" placeholder="Digite seu Rg">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> CPF: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtCpf" value="<?=$cpf?>" placeholder="Digite seu CPF">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Telefone: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtTelefone" value="<?=$telefone?>" placeholder="Digite seu Telefone">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Celular: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtCelular" value="<?=$celular?>" placeholder="Digite seu Celular">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Email: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="email" name="txtEmail" value="<?=$email?>" placeholder="Digite seu Email">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Observações: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <textarea name="txtObs" cols="50" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="<?=$modo?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="consultaDeDados">
            <table id="tblConsulta" >
                <tr>
                    <td id="tblTitulo" colspan="5">
                        <h1> Consulta de Dados.</h1>
                    </td>
                </tr>
                <tr id="tblLinhas">
                    <td class="tblColunas destaque"> Nome </td>
                    <td class="tblColunas destaque"> Celular </td>
                    <td class="tblColunas destaque"> Email </td>
                    <td class="tblColunas destaque"> Opções </td>
                </tr>
                
                <?php
                  $dadosClientes =  exibirClientes();
                    
                                        //cria um array de dados do banco
                    while($rsClientes = mysqli_fetch_assoc($dadosClientes))
                    {
                       
                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$rsClientes['nome']?></td>
                    <td class="tblColunas registros"><?=$rsClientes['celular']?></td>
                    <td class="tblColunas registros"><?=$rsClientes['email']?></td>
                    <td class="tblColunas registros">
                        
                        <a href="controles/editarDadosClientes.php?id=<?=$rsClientes['idcliente']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                        
                        <a onclick="return confirm('Tem certeza que deseja excluir');"href="controles/excluirDadosClientes.php?id=<?=$rsClientes['idcliente']?>">
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                        
                        <img src="img/search.png" alt="Visualizar" title="Visualizar" class="pesquisar" data-id="<?=$rsClientes['idcliente']?>">
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </body>
</html>