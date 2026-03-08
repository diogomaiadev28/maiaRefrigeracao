<?php

session_start();

$password = "#Microcamp2016";
$_SESSION['login'] = false;

if($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($_POST['password'] === $password) {
        $_SESSION['login'] = true;
        header("Location: ../Admin/admin.php");
        exit;
    } else {
        header("Location: password.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Digite a senha</title>
        <link rel="stylesheet" href="../templates/assets/css/password.css">
        <link rel="shortcut icon" href="../templates/assets/img/logo.ico" type="image/x-icon">
    </head>
    <body>
        <figure class="logo">
            <img src="../templates/assets/img/logo.png" alt="Maia Refrigeração logo featuring blue and red letters MR with a snowflake symbol and curved accent, company name in Portuguese below">
        </figure>
        <form method="POST">
            <h1>Painel de Administração</h1>
            <p class="label">Senha</p>
            <div class="password">
                <input type="password" name="password" id="password" placeholder="Digite sua senha" autocomplete="new-password">
                <span>👁</span>
            </div>
            <div class="submitField">
                <button type="submit">Entrar</button>
            </div>
        </form>
        <script src="../templates/assets/js/password.js"></script>
    </body>
</html>