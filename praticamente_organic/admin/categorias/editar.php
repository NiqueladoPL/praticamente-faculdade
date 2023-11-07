<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];

    require_once('../../config/conexao.php');

    $sql = "SELECT * FROM categorias WHERE id_cat = '$id'";

    $exec = $conn->query($sql);
    
    if ($exec->num_rows > 0) {
        while ($dados = $exec->fetch_object()) {
            $nome = $dados->nome_cat;
            $descricao = $dados->descricao_cat;
        }
    }
}

if (
    isset($_POST['edit_cat']) &&
    !empty($_POST['nome']) &&
    isset($_POST['descricao']) 
){

    require_once('../../config/conexao.php');

    $id_cat = $_POST['id_cat'];
    $nome_cat = $_POST['nome'];
    $descricao_cat = $_POST['descricao'];

    $sql = "UPDATE categorias SET                     
                    nome_cat = '$nome_cat',             
                    descricao_cat = '$descricao_cat'                   
                    WHERE id_cat = '$id_cat'";

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
    <div class="header"> <a id="nome_cabecalho" href="../../index.php">PRATICAMENTE</a></div>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
        <input name="id_cat" type="text" value="<?php echo $id ?>" hidden>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input value="<?php echo $nome ?>" type="text" class="form-control" id="nome" name="nome" value="">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input value="<?php echo $descricao ?>" type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <a class="btn btn-danger" href="./index.php">Cancelar</a>
            <button type="submit" class="btn btn-primary" name="edit_cat">Salvar</button>
        </form>
    </div>
</body>
</html>