<?php
    $idcontato1= $_GET["id"];
    $sql2 = "SELECT nome , sobrenome FROM pessoa WHERE id='{$idcontato1}'";
    $resultado= mysqli_query($conexao,$sql2) or die("ERROR".mysqli_error($conexao));
    $dados1 = mysqli_fetch_assoc($resultado);
    //INSERT INTO `contato_pessoa` (`id`, `contato`, `pessoa_id`, `tipo_contato_id`) VALUES (NULL, 'roosewelt@gmail.com', '1', '3');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body style="background-color: deepskyblue;">
<h3 style="position: relative; left: 200px; top:100px;">Adicionar Contato</h3>
    <table style="position: relative; left: 200px; top:100px; background-color: darkseagreen;" >
            <tr>
            <div class="mb-3" >
                <td>Nome</td>
                
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                
                <td><input type="text" name="nome" class="form-control" size="52" value="<?=$dados1['nome'] ?>"></td>
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                <td>Sobrenome</td>
                <br>
            </div>
            </tr>
            <div class="mb-3">
                <td><input type="text" name="sobrenome" class="form-control" size="52" value="<?=$dados1['sobrenome'] ?>"></td>
            </div>
            </tr>
        </table>
        
    <div>
        <h3 style="position: relative; left: 200px; top:100px; ">Contatos</h3>
        <table style="position: relative; left: 200px; top:100px;">
            <thead>
            <tr>
                <td style="background-color: darkseagreen;">Tipo do Contato  </td>
                <td style="background-color: darkseagreen; text-align: center;">Contato</td>
                
            </tr>
            </thead>
    <form action="post">
            <tbody style="background-color: darkseagreen;">
                <tr>
                    <td><select name="tipo">
                            <option value="1">1-Telefone</option>
                            <option value="2">2-Celular</option>
                            <option value="3">3-Email</option>
                            <option value="4">4-Outros</option>
                        </select></td>
                    <td><input name="contato" type="text" size="52" placeholder="(79)99999-9999 ou roosewelt@bombeiro.com.br"></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
        <input type="submit" value="Salvar" class="btn btn-success"style="position: relative; left: 800px; top:200px;">

    </form>
    <a href="index.php?menuop=listaContato" class="btn btn-success" style="position: relative; left: 800px; top:200px;">Voltar</a>
    <?php
    if(!empty($_POST['contato']) and ($_POST['tipo'])){
        $tipo1 = $_POST['tipo'];
        $contato6= $_POST['contato'];

        $erro=0;
        $idcontato10= $_GET["id"];
        $sql12 = "INSERT INTO contato_pessoa (`id`, `contato`, `pessoa_id`, `tipo_contato_id`) VALUES (NULL, '$contato6', '$idcontato10', '$tipo1')";
        $resultado12= mysqli_query($conexao,$sql12) or die("ERROR".mysqli_error($conexao));
        //$dados12 = mysqli_fetch_assoc($resultado12);
        //INSERT INTO `contato_pessoa` (`id`, `contato`, `pessoa_id`, `tipo_contato_id`) VALUES (NULL, 'roosewelt@gmail.com', '1', '3');
    }
    ?>
</body>
</html>
