<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class ContactModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllContacts() {
        $query = "SELECT * FROM crud_table";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // You can add more methods here such as addContact, deleteContact, etc.
}
?>
