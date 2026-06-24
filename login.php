<?php

$titulo = "Login";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>

    <h1><?php echo $titulo; ?></h1>

    <form method="post">

        <p>
            <label>E-mail</label><br>
            <input type="email" name="email">
        </p>

        <p>
            <label>Senha</label><br>
            <input type="password" name="senha">    
        </p>

        <button type="subimit">
            Entrar
        </button>

    </form>

    <hr>

    <p>E-mail digitado: <?php echo $email; ?></p>
    <p>Senha digitada: <?php echo $senha; ?></p>

    <br>
    <a href="index.php">Voltar para Home</a>

</body>
</html>