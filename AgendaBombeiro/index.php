<?php
    /*Inclusão do Banco de Dados com o arquivo index.php que é utilizado por todas
    telas codificadas.
    */
    include("db/conexao.php");
    
    //include("paginas/Pessoa/inserir-pessoa.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    
    <!-- Cabeçalho HTML do arquivo index, usado para fazer a ligação com o BOOTSTRAP por CDN
      e definir título para o arquivo.
    -->

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(images/papeldeparede.jpg); background-color: #FFF;">
   
    <header>
       <!-- Aqui é definida a NavBar do site, como tambem a navegação entre as páginas listadas -->
        <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #ff6400;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?menuop=listaContato">
      <!-- Imagem Icone do NAVBAR-->
        <img src="images/bombeiro.png" alt="some text" width="60" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?menuop=listaContato">Lista Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?menuop=cadastrar">Cadastrar Pessoa</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="index.php?menuop=sobre">Sobre</a>
        </li>
        
      </ul>
      <!-- Definir um Formulário para recuperar a Pesquisa entre a Lista de Contato (não obtive tempo hábio para terminar)  -->
      <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Pesquisa" aria-label="Search">
        
        <!-- Abaixo temos o Botão apenas  com o Icone Seach definido(Função Incompleta)-->
        <button class="btn btn-primary" type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg></button>
      </form>
    </div>
  </div>
</nav>
    </header>
    <main>
            
        <?php
        //Aqui eu criei um SWITCH para navegação entre todas as telas visíveis e ocultas do Site
            $menuop =(isset($_GET["menuop"]))?$_GET["menuop"]:"listaContato";
            switch($menuop){
                
                case 'listaContato':
                    include("paginas/Contatos/listacontatos.php");
                break;
                case 'del':
                  include("paginas/Contatos/del.php");
                break;
                case 'adccontato':
                include("paginas/Contatos/adccontato.php");
                break;
                case 'visualizarcontato':
                  include("paginas/Contatos/visualizarcontato.php");
                break;

                case 'editarcontato' :
                  include("paginas/Contatos/editarcontato.php");
                break;

                case 'editarpessoa':
                  include("paginas/Pessoa/editarpessoa.php");
                break;
            
                case 'cadastrar':
                    include("paginas/Pessoa/cadastrar.php");
                break;
                case 'sobre':
                    include("paginas/Sobre/sobre.php");
                break;
        
                default:
                    include("paginas/Contatos/listacontatos.php");
                break;
            }
        ?>
    </main>
</body>
</html>