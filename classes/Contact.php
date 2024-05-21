<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");
// Definujeme konštantu __ROOT__, ktorá obsahuje cestu k ROOT adresáru
define('__ROOT__', dirname(dirname(__FILE__)));
// Načítavame súbor s konfiguráciou databázy a súbor Database kde máme triedu ktorá vytvorí spojenie s databázou
require_once(__ROOT__.'/db/config.php');
require_once(__ROOT__.'/classes/Database.php');

// Importujeme triedu PDO pre prácu s databázou

class Contact extends Database {
    // Privátna premenná pre uchovávanie spojenia s databázou
    protected $conn;

    // Konštruktor triedy, ktorý automaticky volá metódu connect() pri vytvorení objektu
    public function __construct() {
        $this->connect();

        $this->conn = $this->getConnection();
    }

    public function sendMess($first, $last, $mail, $text) {

        try {
            $sql = "INSERT INTO contact (first, last, mail, text) VALUES (?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            
            $statement->bindParam(1, $first);
            $statement->bindParam(2, $last);
            $statement->bindParam(3, $mail);
            $statement->bindParam(4, $text);
            $statement->execute();

        } catch (Exception $e) {
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
        } finally {
            $this->conn = null;
        }
        

    }

}

?>