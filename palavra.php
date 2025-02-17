<!DOCTYPE html>
<html lang="pt">

<?php

  // Fazer um select genérico
  require_once "bd/banco.php"; // Usado para SELECT, INSERT, ETC...
  require_once "bd/tabelas.php";


  // Pesquisar
  $banco = new banco;
  // Realiza a pesquisa somente quando receber os dados que deve pesquisar
  if(isset($_GET["palavra"])){
    $sql = "SELECT * FROM ".$_GET['tabela']." WHERE nome LIKE '".$_GET["palavra"]."'";
    $resultado = $banco->select($sql);
  }

?>

<head>
  <meta charset="UTF-8">
  <title>Dicionário Mudo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/cover.css">
</head>

<body>

  <div class="cover-container d-flex p-3 mx-auto flex-column" style="width: 100%; max-width:1080px;">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Dicionário Mudo</h3>
        <nav class="nav nav-masthead justify-content-center navbar-expand-md ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="dicionario.html">Dicionário</a>
              </li>

              <li class="nav-item">
                <select class="" href="#" id="tabela" name="tabela" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <option href="#">Animais</option>
                  <option href="#">Comidas</option>
                  <option href="#">Gestos</option>
                </select>
              </li>

            </ul>
            <input class="form-control ml-2 mr-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" id="pesquisa" name="pesquisa">
            <button class="btn btn-outline-light my-2 my-sm-0" onclick="pesquisar()">Pesquisar</button>
          </div>
        </nav>

      </div>
    </header>

    <main role="main" class="container">

      <div class="jumbotron mt-4">
        <div class="container">
          <h1 id="palavra"><?php echo $resultado[0][1]; ?></h1>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>GIF</h2>
            <img style="width:400px" id="gif" src="<?php echo $resultado[0][3]; ?>">
          </div>
          <div class="col text-center">
            <h2>Imagem</h2>
            <img style="width:400px" id="imagem" src="<?php echo $resultado[0][2]; ?>">
          </div>
        </div>

    </main>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
