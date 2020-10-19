<?php
/*Aqui eu fiz a recuperação do parâmetro ID da tabela 'pessoa' pelo método Global GET
na própria url, e foi utilizado na chamada ao Banco de DADOS, bem como na consulta SQL
*/
    $idcontatovi= $_GET["idCont"];
    $consult = "SELECT nome , sobrenome FROM pessoa WHERE id='{$idcontatovi}'";
    $resultado1= mysqli_query($conexao,$consult) or die("ERROR".mysqli_error($conexao));
    $dados5 = mysqli_fetch_assoc($resultado1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Página Editar Pessoa é utilizada para trazer os parâmetros da linha que foi selecionada na Lista
dos contatos, os parâmetros podem ser alterados, a página tambem tem navegão de volta a tela principal e Botão 
para Editar e alterar os DADOS direto no Banco. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditarPessoa</title>
    <!-- Ligação com o BOOTSTRAP abaixo -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body>

<h3 style="position: relative; left: 200px; top:100px;">Editar Pessoa</h3>
    <form method="post" style="position: relative; left: 200px; top:100px;">
        <table>
            <tr>
            <div class="mb-3">
                <td>Nome</td>
                
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                
                <td><input type="text" name="nome1" class="form-control" size="52" value="<?=$dados5['nome'] ?>"></td>
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                <td>Sobrenome</td>
                <br>
            </div>
            </tr>
            <div class="mb-3">
                <td><input type="text" name="sobrenome1" class="form-control" size="52" value="<?=$dados5['sobrenome'] ?>"></td>
            </div>
            </tr>
            
        </table>
        <input type="submit" value="Editar" class="btn btn-success"style="position: relative; left: 500px; top:100px;">
        <a href="index.php?menuop=listaContato" class="btn btn-success" style="position: relative; left: 500px; top:100px;">Cancelar</a>
    </form>
    <?php 
    //Aqui é feita a conexão com o Banco de Dados para alteração dos DADOS 
    //Utilizado o método POST para verificação das variáveis e UPDATE no BANCO
        if(!empty($_POST['nome1']) and ($_POST['sobrenome1'])){
            $nome3 = $_POST['nome1'];
            $sobrenome3= $_POST['sobrenome1'];

            $erro=0;

            $consulta = "UPDATE `pessoa` SET `nome` = '$nome3', `sobrenome` = '$sobrenome3' WHERE `pessoa`.`id` = 1";
            $re = mysqli_query($conexao, $consulta) or die("Erro na consulta !".mysqli_error($conexao));
    ?>
            <li style="position: relative; left: 200px; top:100px;"> Sucesso! </li>;
       <?php 
       //fechamento da condição if
        }
        ?>
    
</body>
</html>