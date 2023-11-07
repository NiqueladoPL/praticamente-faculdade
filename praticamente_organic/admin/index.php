<?php
   session_start();  
   if (!isset($_SESSION['email_usu'])) {
       header('Location: login.php');
       exit();
   }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Praticamente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body{
            background-color: lightgray;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="header">
        <h3>PAINEL DE CONTROLE</h3>
    </div>
    <div style="margin-top: 10em;" class="container-sm">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="../img/logos/produtos_logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Gerenciamento dos Produtos.</p>
                        <a href="./produtos/" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../img/logos/categorias_logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Gerenciamento de Categorias</p>
                        <a href="./categorias/" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../img/logos/usuario_logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Usuários</h5>
                        <p class="card-text">Gerenciamento de Usuários.</p>
                        <a href="./usuarios/" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>