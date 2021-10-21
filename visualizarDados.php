<?php
    require_once('controles/visualizardadosClientes.php');

//recebe o id enviado pelo ajax na pagina da index
$id= $_GET['id'];

////chama a funçao para buscar no banco de dados
$dadosCliente=visualizarCliente($id);




?>


<html>
    <head>
        <meta charset="UTF-8">
        <title> visualizar dados</title>
    
    </head>
    <body>
        <table>
            <tr>
                <td>Nome:</td>
                <td><?=$dadosCliente['nome']?></td>
            </tr>
            <tr>
                <td>Celular:</td>
                <td><?=$dadosCliente['celular']?></td>
            </tr>
            <tr>
                <td>telefone:</td>
                <td><?=$dadosCliente['telefone']?></td>
            </tr>
            <tr>
                <td>rg:</td>
                <td><?=$dadosCliente['rg']?></td>
            </tr>
            <tr>
                <td>cpf:</td>
                <td><?=$dadosCliente['cpf']?></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><?=$dadosCliente['email']?></td>
            </tr>
        
        
        </table>
    </body>



</html>