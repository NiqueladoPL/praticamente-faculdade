<?php

session_start();
if (!isset($_SESSION['email_usu'])){
    header('location: login.php');
}

require_once('../../config/conexao.php');

if (
  isset($_POST['new_prod']) &&
  !empty($_POST['codigo']) &&
  !empty($_POST['nome']) &&
  !empty($_FILES['imagem']) &&
  !empty($_POST['valor']) &&
  !empty($_POST['descricao']) &&
  !empty($_POST['status']) &&
  !empty($_POST['categoria'])
) {

  require_once('../../config/conexao.php');

  $ext = strtolower(substr($_FILES['imagem']['name'], -4));
  $new_name = date("Y.m.d-H.i.s") . $ext;
  $dir = '../../img/img_banco/';
  move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name);


  if ($conn) {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $imagem = $new_name;
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $categoria = $_POST['categoria'];

    $ativo = "";
    if ($status == '1') {
      $ativo = 1;
    } elseif ($status == '2') {
      $ativo = 0;
    }

    $sql = "INSERT INTO produtos VALUES (NULL, '$codigo', '$nome','$imagem','$valor', '$descricao','$ativo','$categoria')";
    $exec = $conn->query($sql);
  }

  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>PRATICAMENTE - Novo Produto</title>
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
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="codigo">Código</label>
        <input type="text" class="form-control" id="codigo" name="codigo">
      </div>
      <div class="form-group">
        <label for="imagem">Imagem:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="imagem" name="imagem">
          <label class="custom-file-label" for="imagem">Escolher arquivo</label>
        </div>
      </div>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="">
      </div>

      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" step="0.01" class="form-control" id="valor" name="valor">
      </div>

      <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" id="descricao" name="descricao">
      </div>

      <div class="form-group">
        <label for="categoria">Categoria</label>
        <select class="form-control" name="categoria" id="categoria" required>
          <option value="#">Selecione</option>
          <?php
          // Consulta SQL para buscar as categorias
          $query = "SELECT id_cat, nome_cat FROM categorias";
          $result = $conn->query($query);

          // Verificar se a consulta retornou resultados
          if ($result->num_rows > 0) {
            // Iterar sobre os resultados e gerar as opções do select
            while ($row = $result->fetch_assoc()) {
              $id = $row['id_cat'];
              $nome = $row['nome_cat'];
              echo "<option value='$id'>$nome</option>";
            }
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
          <option value="#">Selecione</option>
          <option value="1">Ativo</option>
          <option value="2">Inativo</option>
        </select>
      </div>
      <a class="btn btn-danger" href="../">Cancelar</a>
      <button name="new_prod" type="submit" class="btn btn-primary">Salvar</button>
    </form>
  </div>
</body>

</html>