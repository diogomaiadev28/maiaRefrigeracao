<?php

require_once __DIR__ . '/../Controller/ServicesController.php';

use Controller\ServicesController;

$serviceController = new ServicesController();

$services = $serviceController->getAllServices();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fila de Serviços</title>
        <link rel="stylesheet" href="../templates/assets/css/servicesQueue.css">
        <link rel="shortcut icon" href="../templates/assets/img/logo.ico" type="image/x-icon">
    </head>
    <body>
        <a class="backA" href="../index.html"><button class="back">Voltar</button></a>
        <figure class="logo">
            <img src="../templates/assets/img/logo.png" alt="Maia Refrigeração logo featuring blue and red letters MR with a snowflake symbol and curved accent, company name in Portuguese below">
        </figure>
        <div class="container">
            <h1>Fila de Serviços</h1>
            <p>Todos os serviços em andamento, na ordem em que foram recebidos</p>
            <div class="services">
                <div class="search-box">
                    <form>
                        <input type="text" placeholder="Digite seu código (ex: ARX7K92Q)">
                        <button type="submit">procurar</button>
                    </form>
                </div>
                <?php
                if (empty($services)) {
                    echo '<h2 class="no_service">Não há serviços</h2>';
                } else {
                    foreach ($services as $position => $service) {
                        $realPosition = $position + 1;
                        echo '
                <div class="card" id="'. $service['code'] .'">
                    <div class="status ' . $service['status'] . '">Status: '; if($service['status'] == 'on-queue') {
                        echo 'Na Fila';
                    } else if ($service['status'] == 'in-progress') {
                        echo 'Em Andamento';
                    } else if ($service['status'] == 'done') {
                        echo 'Finalizado';
                    } echo '</div>
                    <div class="info"><strong>Cliente: </strong>' . $service['name'] . '</div>
                    <div class="info"><strong>Descrição: </strong>' . $service['description'] . '</div>
                    <div class="queue">
                        <span><strong>Posição na fila: </strong>' . $realPosition . '</span>
                    </div>
                </div>
                        ';
                    }
                }
                ?>
            </div>
        </div>
        <script src="../templates/assets/js/servicesQueue.js"></script>
    </body>
</html>