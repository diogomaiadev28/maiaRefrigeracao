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
        $codes = $this->servicesModel->getAllCodes();
        $exist = false;
        foreach ($codes as $code2) {
            if(in_array($code, $code2)) {
                $exist = true;
            }
        }
        if ($exist === false) {
            return $this->servicesModel->createService($name, $description, $status, $code);
        } else {
            $this->createService($name, $description, $status);
        }
    }

    public function getAllServices () {
        return $this->servicesModel->getAllServices();
    }

    public function getServiceByCode ($code) {
        return $this->servicesModel->getServiceByCode($code);
    }

    public function removeServiceByCode ($code) {
        return $this->servicesModel->removeServiceByCode($code);
    }

    public function updateServiceByCode ($name, $description, $status, $code) {
        return $this->servicesModel->updateServiceByCode($name, $description, $status, $code);
    }
}

?>