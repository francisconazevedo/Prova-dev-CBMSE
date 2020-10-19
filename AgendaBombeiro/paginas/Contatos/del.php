
<?php
/* Arquivo del.php criado apenas para deletar os contatos inteiros, porem o Banco na sua
construção não foi colocado o DELETE CASCADE que libera a exclusão com Chave estrangeira, Portanto
apenas exclui os itens que não estão ligados, como o Primeiro cadastro por exemplo (nome, sobrenome)
*/
    $idContato = mysqli_real_escape_string($conexao,$_GET["id"]);
    $sql1 = "DELETE FROM pessoa WHERE id='{$idContato}'";
    mysqli_query($conexao,$sql1) or die("ERROR".mysqli_error($conexao));
    
    
    $sql3 = "DELETE FROM contato_pessoa WHERE pessoa_id='{$idContato}'";
    mysqli_query($conexao,$sql3) or die("ERROR".mysqli_error($conexao));

?>