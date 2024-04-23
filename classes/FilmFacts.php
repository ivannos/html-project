<?php
namespace filmfacts;

error_reporting(E_ALL);
ini_set("display_errors", "On");
// Definujeme konštantu __ROOT__, ktorá obsahuje cestu k nadradenému adresáru
define('__ROOT__', dirname(dirname(__FILE__)));
// Načítavame súbor s konfiguráciou databázy
require_once(__ROOT__.'/db/config.php');
require_once(__ROOT__.'/classes/Database.php');
// Importujeme triedu PDO pre prácu s databázou

use PDO;
use Database;
use Exception;

// Definujeme triedu QnA v rámci namespace otazkyodpovede
class FilmFacts extends Database {
    // Privátna premenná pre uchovávanie spojenia s databázou
    protected $conn;

    // Konštruktor triedy, ktorý automaticky volá metódu connect() pri vytvorení objektu
    public function __construct() {
        $this->connect();

        $this->conn = $this->getConnection();
    }

    public function insertFilmFacts(){
        try {
            // Načítanie json súboru
            $data = json_decode(file_get_contents(__ROOT__.'/data/datas.json'), true);
            $link = $data["link"];
            $name = $data["name"];
            $release_year = $data["release_year"];
            $director = $data["director"];
            $genre = $data["genre"];
            $interesting_fact = $data["interesting_fact"];
    
            // beginTransaction, na vlkadanie do db
            $this->conn->beginTransaction();
            
            // Pripraví príkaz na pracovanie s databázou
            $sql = "INSERT INTO film_facts (link, name, release_year, director, genre, interesting_fact) VALUES (:link, :name, :release_year, :director, :genre, :interesting_fact)";
            $statement = $this->conn->prepare($sql);
    
            // Prechádzanie cez db (kontroluje rovnaké riadky)
            for ($i = 0; $i < count($link); $i++) {
                // Okontroluje či je otázka jedinečná
                $existingStmt = $this->conn->prepare(
                    "SELECT COUNT(*) FROM film_facts 
                    WHERE link = :link 
                    AND name = :name 
                    AND release_year = :release_year 
                    AND director = :director 
                    AND genre = :genre 
                    AND interesting_fact = :interesting_fact"
                    );
                $existingStmt->bindParam(":link", $link[$i]);
                $existingStmt->bindParam(":name", $name[$i]);
                $existingStmt->bindParam(":release_year", $release_year[$i]);
                $existingStmt->bindParam(":director", $director[$i]);
                $existingStmt->bindParam(":genre", $genre[$i]);
                $existingStmt->bindParam(":interesting_fact", $interesting_fact[$i]);
                $existingStmt->execute();
                $count = $existingStmt->fetchColumn(); // vráti hodnotu vykonaného dotazu
    
                if ($count == 0) {
                    // Samotné vkladanie
                    $statement->bindParam(":link", $link[$i]);
                    $statement->bindParam(":name", $name[$i]);
                    $statement->bindParam(":release_year", $release_year[$i]);
                    $statement->bindParam(":director", $director[$i]);
                    $statement->bindParam(":genre", $genre[$i]);
                    $statement->bindParam(":interesting_fact", $interesting_fact[$i]);
                    $statement->execute();
                }
            }
    
            // Zápis zmien do db
            $this->conn->commit();
        } catch (Exception $e) {
            // Error message + rollback
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
            $this->conn->rollback();
        } finally {
            // Uzatvorenie spojenia
            $this->conn = null;
        }
    }

    public function updateFilmFacts($id, $link, $name, $release_year, $director, $genre, $interesting_fact) {
        // Check if ID is numeric
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
    
        // Prepare the SQL statement
        $sql = "UPDATE film_facts SET
                link = :link,
                name = :name,
                release_year = :release_year,
                director = :director,
                genre = :genre,
                interesting_fact = :interesting_fact
                WHERE id = :id";
        $statement = $this->conn->prepare($sql);
    
        // Bind parameters to the statement
        $statement->bindParam(':id', $id);
        $statement->bindParam(':link', $link);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':release_year', $release_year);
        $statement->bindParam(':director', $director);
        $statement->bindParam(':genre', $genre);
        $statement->bindParam(':interesting_fact', $interesting_fact);
    
        // Execute the statement
        $statement->execute();
    }

    public function getFilmFactsById($id) {
        // Check if ID is numeric
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
    
        // Prepare the SQL statement
        $sql = "SELECT * FROM film_facts WHERE id = :id";
        $statement = $this->conn->prepare($sql);
    
        // Bind the parameter to the statement
        $statement->bindParam(':id', $id);
    
        // Execute the statement
        $statement->execute();
    
        // Fetch the data as an associative array
        $row = $statement->fetch(PDO::FETCH_ASSOC);
    
        // Return the data
        return $row;
    }

    public function showFilmFacts() {
        $sql = "SELECT * FROM film_facts";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    
        // Fetch all data as an associative array
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        // Create a new Users object and check if the user is an admin
            // Loop through the data and display each question with edit and delete buttons
        foreach ($data as $row) {
            echo '<tr>';
                echo '<td> <a class = "text-primary" href="'.$row["link"].'" target="_blank">'.$row["name"].'</a></td>';
                echo '<td>'.$row["release_year"].'</td>';
                echo '<td>'.$row["director"].'</td>';
                echo '<td>'.$row["genre"].'</td>';
                echo '<td>'.$row["interesting_fact"].'</td>';
                echo '<td><a href="edit_filmfacts.php?id=' . $row["id"].'">Editovat</a></td>';
                echo '<td><a href="delete_filmfacts.php?id=' . $row["id"].'">Vymazať</a></td>';
            echo '</tr>';
        }
    }
    public function deleteFilmFacts ($id) {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
        
        $sql = "DELETE FROM film_facts WHERE id = :id"; 
        $statement = $this->conn->prepare($sql);
        
        $statement->bindParam('id', $id); 
        $statement->execute();
        }
}
?>