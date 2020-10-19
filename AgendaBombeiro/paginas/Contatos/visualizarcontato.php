<?php
    $idcontatovi= $_GET["idContato"];
    $consult = "SELECT nome , sobrenome FROM pessoa WHERE id='{$idcontatovi}'";
    $resultado1= mysqli_query($conexao,$consult) or die("ERROR".mysqli_error($conexao));
    $dados5 = mysqli_fetch_assoc($resultado1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(images/paginasadc.jpg);">
    <h3 style="position: relative; left: 200px; top:100px;">Visualizar Contato</h3>
    <form method="post" style="position: relative; left: 200px; top:100px;">
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" value="<?=$dados5['nome'] ?>"></td>
            </tr>
            <tr>
                <td>Sobrenome</td>
                <td><input type="text" name="sobrenome" value="<?=$dados5['sobrenome'] ?>"></td>
            </tr>
        </table>
        
    </form>
    
    <div style="position: relative; left: 200px; top:100px;">
        <br>
        <h3>Contato</h3>
        <div>
            <a  style="position: relative; left: 400px;" class="btn btn-success" href="index.php?menuop=adccontato&id=<?=$idcontatovi?>" role="button"><svg width="55px" height="40px" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> Adicionar </a>
        </div>
        <table border="1" style="text-align: center; position: relative; top: 10px; background-color: #FFF;">
            <thead style="text-align: center;">
            <tr>
                <td>Tipo de Contato</td>
                <td>Contato</td>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody style="text-align: center;">
            <?php
                $idcontatov= $_GET["idContato"];
                $consulta1 = "SELECT * FROM contato_pessoa WHERE pessoa_id='{$idcontatov}'";
                $resultado3= mysqli_query($conexao,$consulta1) or die("ERROR".mysqli_error($conexao));
                //$dados6 = mysqli_fetch_assoc($resultado3);
                while($dados6 = mysqli_fetch_assoc($resultado3)){
            ?>
                <tr>
                    <td><?=$dados6["tipo_contato_id"]?></td>
                    <td><?=$dados6["contato"]?></td>
                
                    <td>
                    <a class="btn btn-outline-warning" href="index.php?menuop=editarcontato&idContt=<?=$dados5["id"]?>" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>Editar Contato</a>
                    <a class="btn btn-outline-danger" href="index.php?menuop=del&idcon=<?=$dados5['id'] ?>" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>Deletar</a>
                    </td>
                    <?php }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="index.php?menuop=listaContato" class="btn btn-success" style="position: relative; left: 800px; top:200px;">Voltar</a>
</body>
</html>