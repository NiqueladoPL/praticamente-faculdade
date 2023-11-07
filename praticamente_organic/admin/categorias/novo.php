<?php

session_start();
if (!isset($_SESSION['email_usu'])){
    header('location: login.php');
}

if (
  isset($_POST['nova_cat']) &&
  !empty($_POST['nome']) &&
  isset($_POST['descricao'])
) {

  require_once('../../config/conexao.php');

  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
 
  $sql = "INSERT INTO categorias VALUES (NULL, '$nome', '$descricao')";
  $exec = $conn->query($sql);

  header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PRATICAMENTE - Nova Categoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      background-color: #f5f5f5;
    }
    .header {
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 50px;
    }
    .form-control {
      margin-bottom: 10px;
    }
    #nome_cabecalho {
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="header"> <a id="nome_cabecalho" href="../../index.php">PRATICAMENTE</a> </div>
  <div class="container">
    <form method="POST">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?php ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="" required>
      </div>
      <br>
      <a class="btn btn-danger" href="../">Cancelar</a>
      <button name="nova_cat" type="submit" class="btn btn-primary">Salvar</button>
    </form>
  </div>
</body>
</html>