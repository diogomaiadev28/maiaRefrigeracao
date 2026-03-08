<?php

require_once __DIR__ . '/../Controller/ServicesController.php';

use Controller\ServicesController;

session_start();

if ($_SESSION['login'] === false or empty($_SESSION['login'])) {
    header('Location: ../View/password.php');
}

$serviceController = new ServicesController();

$services = $serviceController->getAllServices();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['name']) and isset($_POST['status']) and isset($_POST['description'])){
        $name = $_POST['name'];
        $status = $_POST['status'];
        $description = $_POST['description'];
        $serviceController->createService($name, $description, $status);
        header('Location: admin.php');
        exit;
    }
    // + ISSETs
}

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMINISTRAÇÃO</title>
        <link rel="stylesheet" href="../templates/assets/css/admin.css">
        <link rel="shortcut icon" href="../templates/assets/img/logo.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <form method="POST">
                <h1>Painel de Serviços</h1>
                <div class="mainInfo">
                    <div class="name">
                        <label for="name">Nome do Cliente</label>
                        <input type="text" name="name" id="name" placeholder="Ex: João Silva">
                    </div>
                    <div class="status">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="on-queue">Na fila</option>
                            <option value="in-progress">Em andamento</option>
                            <option value="done">Finalizado</option>
                        </select>
                    </div>
                </div>
                <div class="description">
                    <label for="description">Descrição</label>
                    <textarea name="description" id="description" placeholder="Descreva o serviço"></textarea>
                </div>
                <button type="submit">Criar Serviço</button>
            </form>
            <div class="queue">
                <h2>Fila de Serviços</h2>
                <?php 
                if(empty($services)) {
                    echo '<h2 class="no_service">Não há serviços</h2>';
                } else {
                    foreach ($services as $service) {
                        echo '<div class="service">
                    <div class="info">
                        <h3 class="name2">' . $service['name'] . '</h3>
                        <p class="description2">' . $service['description'] . '</p>
                    </div>
                    <p class="status2 ' . $service['status'] . '">'; if($service['status'] == 'on-queue') {
                        echo 'Na Fila';
                    } else if ($service['status'] == 'in-progress') {
                        echo 'Em Andamento';
                    } else if ($service['status'] == 'done') {
                        echo 'Finalizado';
                    } echo '</p>
                    <p class="code">' . $service['code'] . '</p>
                    <div class="actions">
                        <button class="edit">Editar</button>
                        <button class="remove">Remover</button>
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>