<?php
require_once('../../config/conexao.php');

$id = null;
$codigo = "";
$nome = "";
$imagem = "";
$valor = "";
$descricao = "";
$status = "";
$categoria = "";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id_prod = '$id'";
    $exec = $conn->query($sql);

    if ($exec->num_rows > 0) {
        $dados = $exec->fetch_object();

        $codigo = $dados->codigo_prod;
        $nome = $dados->nome_prod;
        $imagem = $dados->imagem_prod;
        $valor = $dados->valor_prod;
        $descricao = $dados->descricao_prod;
        $status = $dados->status_prod;
        $categoria = $dados->idCategoria_prod;

        $atv = "
            <option value='0'>Inativo</option>
            <option value='1'>Ativo</option>
        ";
        if ($status == 1) {
            $atv = "
                <option value='0' selected>Inativo</option>
                <option value='1'>Ativo</option>
            ";
        } elseif ($status == 0) {
            $atv = "
                <option value='1' selected>Ativo</option>
                <option value='0'>Inativo</option>
            ";
        }
    }
}

if (
    isset($_POST['edit_prod']) &&
    !empty($_POST['codigo']) &&
    !empty($_POST['nome']) &&
    !empty($_POST['valor']) &&
    !empty($_POST['descricao']) &&
    !empty($_POST['categoria']) &&
    isset($_POST['status']) 
) {
    $imagem_atual = $imagem;

    if (!empty($_FILES['imagem']['tmp_name'])) {
        $ext = strtolower(substr($_FILES['imagem']['name'], -4)); 
        $new_name = date("Y.m.d-H.i.s") . $ext; 
        $dir = '../../img/img_banco/'; 
        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name);
        $imagem_atual = $new_name;
    } 

    $id_prod = $_POST['id_prod'];
    $codigo_prod = $_POST['codigo'];
    $imagem_prod = empty($_FILES['imagem']['tmp_name']) ? $imagem : $imagem_atual;
    $nome_prod = $_POST['nome'];
    $valor_prod = $_POST['valor'];
    $descricao_prod = $_POST['descricao'];
    $status_prod = $_POST['status'];
    $categoria_prod = $_POST['categoria'];

    $sql = "UPDATE produtos SET 
                codigo_prod = '$codigo_prod', 
                nome_prod = '$nome_prod', 
                imagem_prod = '$imagem_prod',
                valor_prod = '$valor_prod',
                descricao_prod = '$descricao_prod',
                status_prod = '$status_prod',
                idCategoria_prod = '$categoria_prod'
            WHERE id_prod = '$id_prod'";

    $exec = $conn->query($sql);

    header('location: index.php');
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
        <input name="id_prod" type="text" value="<?php echo $id ?>" hidden>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input value="<?php echo $codigo ?>" type="text" class="form-control" id="codigo" name="codigo">
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
            <input value="<?php echo $nome ?>" type="text" class="form-control" id="nome" name="nome" value="">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input value="<?php echo $valor ?>" type="number" step="0.01" class="form-control" id="valor" name="valor">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input value="<?php echo $descricao ?>" type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control" name="categoria" id="categoria" required>
            <option value="#">Selecione</option>
            <?php
    
            $query = "SELECT id_cat, nome_cat FROM categorias";
            $result = $conn->query($query);
      
            if ($result->num_rows > 0) {              
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
                    <?php echo $atv ?>
                </select>
            </div>              
        <a class="btn btn-danger" href="./index.php">Cancelar</a>
            <button type="submit" class="btn btn-primary" name="edit_prod">Salvar</button>
        </form>
    </div>
</body>
</html>