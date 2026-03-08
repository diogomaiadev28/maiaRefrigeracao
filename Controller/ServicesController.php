<?php

namespace Controller;

require_once __DIR__ . '/../Model/Services.php';

use Model\Services;
use PDOException;
use Exception;

class ServicesController {
    private $servicesModel;

    public function __construct() {
        $this->servicesModel = new Services();
    }

    public function createService ($name, $description, $status) {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';
        for ($i = 0; $i < 5; $i++) {
            $code .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $this->servicesModel->createService($name, $description, $status, $code);
    }

    public function getAllServices () {
        return $this->servicesModel->getAllServices();
    }

    public function getServiceByCode ($code) {
        return $this->servicesModel->getServiceByCode($code);
    }
}

?>