<?php

namespace Model;

require_once __DIR__ . '/../Model/Connection.php';

use PDO;
use PDOException;
use Model\Connection;
use Exception;

class Services {
    private $db;

    public function __construct() {
        $this->db = Connection::getInstance();
    }

    public function createService($name, $description, $status, $code) {
        try {
            $sql = 'INSERT INTO services (name, description, status, code, created_at) VALUES (:name, :description, :status, :code, NOW())';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            $stmt->bindParam(':code', $code, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception('Não foi possível criar o serviço, erro correspondente: ' . $e);
        }
    }

    public function getAllServices() {
        try {
            $sql = 'SELECT name, description, status, code FROM services ORDER BY created_at ASC';
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Não foi possível consultar serviços, erro correspondente: ' . $e);
        }
    }

    public function getServiceByCode($code) {
        try {
            $sql = 'SELECT name, description, status, code FROM services WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':code', $code, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_COLUMN);
        } catch (PDOException $e) {
            throw new Exception ('Não foi possível consultar serviço pelo código, erro correspondente: ' . $e);
        }
    }
}

?>