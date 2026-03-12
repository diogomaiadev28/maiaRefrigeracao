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
    if(isset($_POST['create'])){
        if(empty($_POST['name']) or empty($_POST['description'])) {
            echo '<script>alert("Preencha todos os campos!")</script>';
        } else {
            $name = $_POST['name'];
            $status = $_POST['status'];
            $description = $_POST['description'];
            $serviceController->createService($name, $description, $status);
            header('Location: admin.php');
            exit;
        }
    }
    if(isset($_POST['edit'])){
        if(empty($_POST['editName']) or empty($_POST['editDescription'])) {
            echo '<script>alert("Preencha todos os campos!")</script>';
        } else {
            $name = $_POST['editName'];
            $description = $_POST['editDescription'];
            $status = $_POST['editStatus'];
            $code = $_POST['editingCode'];
            $serviceController->updateServiceByCode($name, $description, $status, $code);
            header('Location: admin.php');
            exit;
        }
    }
    if(isset($_POST['remove'])){
        $code = $_POST['removingCode'];
        $serviceController->removeServiceByCode($code);
        header('Location: admin.php');
        exit;
    }
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
        <div class="formContainer2 hidden">
            <form class="eraseForm" method="POST">
                <h3>Confirme exclusão</h3>
                <div class="btns">
                    <button class="confirm" name="remove">Excluir</button>
                    <button class="cancel">Cancelar</button>
                </div>
                <input type="hidden" id="removingCode" name="removingCode">
            </form>
        </div>
        <div class="formContainer hidden">
            <form class="hiddenForm" method="POST">
                <h2>Editar</h1>
                <div class="editName">
                    <label for="editName">Nome</label>
                    <input type="text" name="editName" id="editName" placeholder="Digite o nome">
                </div>
                <div class="editDescription">
                    <label for="editDescription">Descrição</label>
                    <textarea name="editDescription" id="editDescription" placeholder="Digite a descrição"></textarea>
                </div>
                <div class="editStatus">
                    <label for="editStatus">Status</label>
                    <select name="editStatus" id="editStatus">
                        <option value="waiting-confirm">Aguardando confirmação</option>
                        <option value="on-queue">Na fila</option>
                        <option value="in-progress">Em andamento</option>
                        <option value="done">Finalizado</option>
                    </select>                    
                </div>
                <input type="hidden" id="editingCode" name="editingCode">
                <button type="submit" name="edit">Editar</button>
            </form>
        </div>
        <div class="container">
            <form class="showingForm" method="POST">
                <h1>Painel de Serviços</h1>
                <div class="mainInfo">
                    <div class="name">
                        <label for="name">Nome do Cliente</label>
                        <input type="text" name="name" id="name" placeholder="Ex: João Silva">
                    </div>
                    <div class="status">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="waiting-confirm">Aguardando confirmação</option>
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
                <button type="submit" name="create">Criar Serviço</button>
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
                    <div class="phone">
                    <p class="status2 ' . $service['status'] . '">'; if ($service['status'] == 'waiting-confirm') {
                        echo 'Aguardando Confirmação';
                    } else if($service['status'] == 'on-queue') {
                        echo 'Na Fila';
                    } else if ($service['status'] == 'in-progress') {
                        echo 'Em Andamento';
                    } else if ($service['status'] == 'done') {
                        echo 'Finalizado';
                    } echo '</p>
                    <p class="code">' . $service['code'] . '</p>
                    </div>
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
    <script src="../templates/assets/js/admin.js"></script>
</html>