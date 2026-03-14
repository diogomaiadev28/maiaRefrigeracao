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

    public function removeServiceByCode($code) {
        try {
            $sql = 'DELETE FROM services WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':code', $code, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception('Não foi possível deletar serviço pelo código, erro correspondente: ' . $e);
        }
    }

    public function getAllCodes() {
        try {
            $sql = 'SELECT code FROM services';
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Não foi possível selecionar todos os códigos, erro correspondente: ' . $e);
        }
    }

    public function updateServiceByCode ($name, $description, $status, $code) {
        try {
            $sql = 'UPDATE services SET name = :name, description = :description, status = :status WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            $stmt->bindParam(':code', $code, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            throw new Exception('Não foi possível atualizar o serviço de código: ' . $code . ', pois ocorreu o erro correspondente: ' . $e);
        }
    }
    
    public function swapUp ($code) {
        try {
            $sql = 'SELECT created_at FROM services WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':code', $code, PDO::PARAM_STR);
            $stmt->execute();
            $created_at = $stmt->fetch(PDO::FETCH_COLUMN);
            
            $sql = 'SELECT code, created_at FROM services WHERE created_at < :created_at ORDER BY created_at DESC LIMIT 1';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->execute();
            $created_at2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $sql = 'UPDATE services SET created_at = :created_at2 WHERE created_at = :created_at';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at2', $created_at2[0]['created_at'], PDO::PARAM_STR);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->execute();
    
            $sql = 'UPDATE services SET created_at = :created_at WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->bindParam(':code', $created_at2[0]['code']);
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            throw new Exception('Não foi possível subir serviço de posição, erro correspondente: ' . $e);
        }
    }

    public function swapDown ($code) {
        try {
            $sql = 'SELECT created_at FROM services WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':code', $code, PDO::PARAM_STR);
            $stmt->execute();
            $created_at = $stmt->fetch(PDO::FETCH_COLUMN);
            
            $sql = 'SELECT code, created_at FROM services WHERE created_at > :created_at ORDER BY created_at ASC LIMIT 1';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->execute();
            $created_at2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $sql = 'UPDATE services SET created_at = :created_at2 WHERE created_at = :created_at';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at2', $created_at2[0]['created_at'], PDO::PARAM_STR);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->execute();
    
            $sql = 'UPDATE services SET created_at = :created_at WHERE code = :code';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
            $stmt->bindParam(':code', $created_at2[0]['code']);
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            throw new Exception('Não foi possível subir serviço de posição, erro correspondente: ' . $e);
        }
    }
}

?>