<?php
    session_start();
    if (!isset($_SESSION['email_usu'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PRATICAMENTE - Usuários</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../jquery.min.js"></script>
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
        .container {
            max-width: 90%;
        }
    </style>
</head>
<body>
    <div class="header"> <a id="nome_cabecalho" href="../index.php">PRATICAMENTE</a> </div>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-6">
                <h1>Usuários Cadastrados</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="./novo.php/" class="btn btn-success">+NOVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ativo</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('../../config/conexao.php');

                        $sql = "SELECT * FROM usuarios";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($linha = $result->fetch_assoc()) {
                                $id = $linha['id_usu'];
                                $nome = $linha['nome_usu'];
                                $email = $linha['email_usu'];
                                $ativoV = $linha['status_usu'];
                                if ($ativoV == 1) {
                                    $ativo = "Ativo";
                                } elseif ($ativoV == 0) {
                                    $ativo = "Inativo";
                                }
                        ?>
                                <tr>
                                    <td> <?php echo $id ?> </td>
                                    <td> <?php echo $nome ?> </td>
                                    <td> <?php echo $email ?> </td>
                                    <td> <?php echo $ativo ?> </td>
                                    <td>
                                        <a class="btn btn-primary" href="./editar.php?id=<?php echo $id ?>">Editar</a>
                                        <a class="btn btn-danger delete-btn" href="./excluir.php" data-toggle="modal" data-target="#confirmacaoModal" data-id="<?php echo $id ?>">Excluir</a>
                                        <a class="btn btn-warning" href="./alterar_senha.php?id=<?php echo $id ?>">Alterar Senha</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="5">Nenhum resultado encontrado...</td>
                            </tr>
                        <?php
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>        
        </div>
    </div>
    <div class="modal fade" id="confirmacaoModal" tabindex="-1" role="dialog" aria-labelledby="confirmacaoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmacaoModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir esse usuário? <br> <b>Essa ação é irreversível.</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="./excluir.php?id=<?php echo $id ?>">Excluir</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#confirmacaoModal').on('show.bs.modal', function(e) {
                var id = $(e.relatedTarget).data('id');
                $(this).find('.modal-footer a').attr('href', './excluir.php?id=' + id);
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>