<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];

    require_once('../../config/conexao.php');

    $sql = "SELECT * FROM usuarios WHERE id_usu = '$id' ";
    $exec = $conn->query($sql);
    if ($exec->num_rows > 0) {
        while ($dados = $exec->fetch_object()) {
            $nome = $dados->nome_usu;
            $email = $dados->email_usu;
            $status = $dados->status_usu;


            $atv = "
        <option value='0'>Inativo</option>
        <option value='1'>Ativo</option>
    ";
            if ($status == 0) {
                $atv = "
            <option value='0' selected>Inativo</option>
            <option value='1'>Ativo</option>
        ";
            } elseif ($status == 1) {
                $atv = "
            <option value='1' selected>Ativo</option>
            <option value='0'>Inativo</option>
        ";
            }
        }
    }
}




if (
    isset($_POST['edit_usu']) &&
    !empty($_POST['nome']) &&
    !empty($_POST['email']) &&
    isset($_POST['status'])
) {

    require_once('../../config/conexao.php');

    $id_post = $_POST['id_user'];
    $nome_post = $_POST['nome'];
    $email_post = $_POST['email'];
    $status_post = $_POST['status'];

    $atv = "
        <option value='0'>Inativo</option>
        <option value='1'>Ativo</option>
    ";
    if ($status_post == 0) {
        $atv = "
            <option value='0' selected>Inativo</option>
            <option value='1'>Ativo</option>
        ";
    } elseif ($status_post == 1) {
        $atv = "
            <option value='1' selected>Ativo</option>
            <option value='0'>Inativo</option>
        ";
    }

    $sql = "UPDATE usuarios SET 
                    nome_usu = '$nome_post', 
                    email_usu = '$email_post', 
                    status_usu = '$status_post' 
                    WHERE id_usu = $id_post";


    $exec = $conn->query($sql);

    header('location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PRATICAMENTE</title>
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
            <input name="id_user" type="text" value="<?php echo $id ?>" hidden>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" value="<?php echo $nome ?>" name="nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?php echo $email ?>" name="email">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <?php echo $atv ?>
                </select>
            </div>
            <br>
            <a class="btn btn-danger" href="./index.php">Cancelar</a>
            <a class="btn btn-warning" href="./alterar_senha.php?id=<?php echo $_GET['id'] ?>">Alterar Senha</a>
            <button type="submit" class="btn btn-primary" name="edit_usu">Salvar</button>

        </form>
    </div>
</body>

</html>