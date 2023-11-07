<?php
require_once '../config/conexao.php';
require_once 'classes/Login.php';

$usuario = new Login($conn);

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    if ($usuario->autenticarUsuario($email, $senha)) {
        header('Location: index.php');
        exit();
    } else {
        $erro = "Credenciais inválidas.";
    }
}

$usuario->encerrarSessao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <h1>Login</h1>
            <div class="form-group">                
                <input type="email" id="email" name="email" required placeholder="e-mail" >
            </div>
            <div class="form-group">               
                <input type="password" id="password" name="password" required placeholder="senha" >
            </div>
            <div class="error-message" id="error-message"><?php echo isset($erro) ? $erro : ""; ?></div> 
            <button type="submit">Enter</button>
        </form>
    </div>
</body>
</html>
