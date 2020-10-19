<?php
    include("db/conexao.php");
    //abaixo o modelo para inserir na Tabela contato_pessoa
    //INSERT INTO contato_pessoa (contato,pessoa_id,tipo_contato_id) VALUES('kkkk',23,2)
?>
<!DOCTYPE html>
<html>
    <!-- Página Cadastrar utilizada apenas para Inserir os Dados de Nome, Sobrenome na Tabela pessoa-->
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
</head>
<body>
    <h3 style="position: relative; left: 200px; top:100px;">Cadastrar Pessoa</h3>
    <form method="post" style="position: relative; left: 200px; top:100px;">
        <table>
            <tr>
            <div class="mb-3">
                <td>Nome</td>
                
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                
                <td><input type="text" name="nome" class="form-control" size="52" placeholder="Ex: João"></td>
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                <td>Sobrenome</td>
                <br>
            </div>
            </tr>
            <div class="mb-3">
                <td><input type="text" name="sobrenome" class="form-control" size="52" placeholder="Ex: Alves"></td>
            </div>
            </tr>
            
        </table>
        <input type="submit" value="Salvar" class="btn btn-success"style="position: relative; left: 500px; top:100px;">
        <a href="../index.php" class="btn btn-success" style="position: relative; left: 500px; top:100px;">Cancelar</a>
    </form>
  <?php 
    //Aqui é feita a conexão com o Banco de Dados para alteração dos DADOS 
    //Utilizado o método POST para verificação das variáveis e UPDATE no BANCO
        if(!empty($_POST['nome']) and ($_POST['sobrenome'])){
            $nome = $_POST['nome'];
            $sobrenome= $_POST['sobrenome'];

            $erro=0;

            $consulta = "INSERT INTO pessoa(nome,sobrenome) VALUES('$nome','$sobrenome')";
            $re = mysqli_query($conexao, $consulta) or die("Erro na consulta !".mysqli_error($conexao));
    ?>
            <li style="position: relative; left: 200px; top:100px;"> Sucesso! </li>;
       <?php 
       //fechamento da condição if
        }
        ?>
  
</body>
</html>