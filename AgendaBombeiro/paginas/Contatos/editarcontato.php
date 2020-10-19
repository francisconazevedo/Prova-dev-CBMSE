<?php
    $idcontatovi= $_GET["idconta"];
    $consult = "SELECT nome , sobrenome FROM pessoa WHERE id='{$idcontatovi}'";
    $resultado1= mysqli_query($conexao,$consult) or die("ERROR".mysqli_error($conexao));
    $dados5 = mysqli_fetch_assoc($resultado1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditarContato</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body>
<h3 style="position: relative; left: 200px; top:100px;">Editar Contato</h3>
    <table style="position: relative; left: 200px; top:100px;">
            <tr>
            <div class="mb-3">
                <td>Nome</td>
                
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                
                <td><input type="text" name="nome" class="form-control" size="52" value="<?=$dados5['nome'] ?>"></td>
            </div>
            </tr>
            <tr>
            <div class="mb-3">
                <td>Sobrenome</td>
                <br>
            </div>
            </tr>
            <div class="mb-3">
                <td><input type="text" name="sobrenome" class="form-control" size="52" value="<?=$dados5['sobrenome'] ?>"></td>
            </div>
            </tr>
        </table>
        
    <div>
        <h3 style="position: relative; left: 200px; top:100px;">Contatos</h3>
        <table style="position: relative; left: 200px; top:100px;">
            <thead style="text-align: center;">
            <tr style="background-color: burlywood;">
                <td>Tipo do Contato</td>
                <td>Contato</td>
                
            </tr>
            </thead>
            <tbody>
            <?php
                $idcontato8= $_GET["idconta"];
                $consulta8 = "SELECT * FROM contato_pessoa WHERE pessoa_id='{$idcontato8}'";
                $resultado8= mysqli_query($conexao,$consulta8) or die("ERROR".mysqli_error($conexao));
                //$dados6 = mysqli_fetch_assoc($resultado3);
                while($dados8 = mysqli_fetch_assoc($resultado8)){
            ?>
                <tr>
                    <td><select name="tipo" >
                            <option value="1">1-Telefone</option>
                            <option value="2">2-Celular</option>
                            <option value="3">3-Email</option>
                            <option value="4">4-Outros</option>
                        </select></td>
                    <td><input type="text" value="<?=$dados8["contato"]?>"></td>
                <?php
                }
                ?>
                    
                </tr>
            </tbody>
        </table>
    </div>
        <input type="submit" value="Editar" class="btn btn-success"style="position: relative; left: 800px; top:200px;">
        <a href="index.php?menuop=listaContato" class="btn btn-success" style="position: relative; left: 800px; top:200px;">Voltar</a>
    </form>
    
</body>
</html>