<?php
class VisitantesController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addVisitor($nombre, $email) {
        $stmt = $this->db->prepare("INSERT INTO visitantes (nombre, email) VALUES (?, ?)");
        return $stmt->execute([$nombre, $email]);
    }

    public function getVisitors() {
        $stmt = $this->db->query("SELECT * FROM visitantes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVisitorById($id) {
        $stmt = $this->db->prepare("SELECT * FROM visitantes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}