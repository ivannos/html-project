<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/Database.php');

class Users extends Database {
    private $role;
    protected $connection;

    public function __construct() {
        $this->role = "user";
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function register($login, $email, $password) {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "SELECT * FROM login WHERE (login = ? OR mail = ?) LIMIT 1;";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->execute();
            $existingUser = $statement->fetch();
            if ($existingUser) {
                throw new Exception("Požívateľ už existuje.");
            }
            $sql = "INSERT INTO login (login, mail, password, role) VALUES (?, ?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $hashedPassword);
            $statement->bindParam(4, $this->role);
            $statement->execute();
            $this->login($login, $password);
        } catch (Exception $e) {
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
        } finally {
            $this->connection = null;
        }
    }

    public function login($login, $password) {
        try {
            // Kontrola existencie používateľa
            $sql = "SELECT * FROM login WHERE login = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->execute();
            $user = $statement->fetch();
            if (!$user) {
                throw new Exception("Požívateľ s daným menom neexistuje.");
            }
    
            // Overenie hesla
            $storedPassword = $user['password'];
            if (!password_verify($password, $storedPassword)) {
                throw new Exception("Nesprávne heslo.");
            }
    
            // Spustenie session a uloženie informácií o používateľovi
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];
            header('Location: ./Thank You.php');
        } catch (Exception $e) {
            echo "Chyba pri prihlasovaní: " . $e->getMessage();
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ../Main.php');
        exit();
    }

    public function isAdmin() {
        session_start();
        if (isset($_SESSION['role']) && isset($_SESSION['user_id'])) {
            if ($_SESSION['role'] == 'admin') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}

?>