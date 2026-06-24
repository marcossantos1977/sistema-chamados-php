<?php

$titulo = "Login";

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      if ($email === '') {
        $mensagem = 'Preencha o e-mail';
    }
    
}
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

    <p><?php echo $mensagem; ?></p>

    <form method="post">

        <p>
            <label>E-mail</label><br>
            <input type="email" name="email">
        </p>

        <p>
            <label>Senha</label><br>
            <input type="password" name="senha">    
        </p>

        <button type="submit">
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