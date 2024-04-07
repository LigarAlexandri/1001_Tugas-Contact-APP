<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../MVC/ContactModel.php';

class ContactController {
    private $model;

    public function __construct() {
        // Create an instance of the model
        $this->model = new ContactModel($this->getDb());
    }

    // Get a PDO instance for database connection
    private function getDb() {
        $host = 'localhost';
        $dbname = 'contact_app';
        $username = 'root';
        $password = '';

        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

    // Action to show all contacts
    public function showContacts() {
        $contacts = $this->model->getAllContacts();
        include __DIR__ . '/../MVC/ContactView.php'; // Using absolute path
    }

    // You can add more actions here such as addContact, deleteContact, etc.
}

// Usage
$controller = new ContactController();
$controller->showContacts();
?>
