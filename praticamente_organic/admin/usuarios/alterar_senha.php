<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

  $id = $_GET['id'];
}



if (
  isset($_POST['update_pass']) &&
  !empty($_POST['id_post']) &&
  !empty($_POST['pass']) &&
  !empty($_POST['pass_repeat']) &&
  ($_POST['pass'] == $_POST['pass_repeat'])
) {

  require_once('../../config/conexao.php');

  $id_post = $_POST['id_post'];

  $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $sql = "UPDATE usuarios SET senha_usu = '$hash' WHERE id_usu = $id_post";
  $exec = $conn->query($sql);

  header('location: ./index.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>PRATICAMENTE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    /* Custom styles */
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

      <input type="text" name="id_post" id="id_post" value="<?php echo $id ?>" hidden>

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

      <br>
      <a class="btn btn-danger" href="./">Cancelar</a>
      <button name="update_pass" type="submit" class="btn btn-primary">Salvar</button>

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