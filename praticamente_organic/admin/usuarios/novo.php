<?php

  session_start();
  if (!isset($_SESSION['email_usu'])){
      header('location: login.php');
  }

if (
  isset($_POST['new_user']) &&
  !empty($_POST['nome']) &&
  !empty($_POST['email']) &&
  !empty($_POST['pass']) &&
  !empty($_POST['pass_repeat']) &&
  !empty($_POST['status']) &&
  ($_POST['pass'] == $_POST['pass_repeat'])
) {

  require_once('../../config/conexao.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $status = $_POST['status'];

  $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  echo $pass;

  $sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$email', '$hash', '$status')";
  $exec = $conn->query($sql);

  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>PRATICAMENTE - Novo Usuário</title>
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
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="pass" required>
      </div>
      <div class="form-group">
        <label for="repetir-senha">Repita a Senha</label>
        <input type="password" class="form-control" id="repetir-senha" name="pass_repeat" required>
      </div>
      <div id="senha-alert" class="alert alert-danger" role="alert" style="display:none;">
        As senhas inseridas não são iguais.
      </div>

      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" required>
          <option value="#">Selecione</option>
          <option value="1">Ativo</option>
          <option value="0">Inativo</option>
        </select>
      </div>
      <br>
      <a class="btn btn-danger" href="../">Cancelar</a>
      <button name="new_user" type="submit" class="btn btn-primary">Salvar</button>

    </form>
  </div>



  <script>
    document.querySelector('form').addEventListener('submit', function(event) {
      var pass = document.getElementById('senha').value;
      var passRepeat = document.getElementById('repetir-senha').value;

      if (pass !== passRepeat) {
        event.preventDefault(); // Previne o envio do formulário
        document.getElementById('senha-alert').style.display = 'block'; // Mostra o alerta
      }
    });
  </script>

</body>

</html>