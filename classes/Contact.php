<?php

error_reporting(E_ALL);
ini_set("display_errors", "On");
// Definujeme konštantu __ROOT__, ktorá obsahuje cestu k ROOT adresáru
define('__ROOT__', dirname(dirname(__FILE__)));
// Načítavame súbor s konfiguráciou databázy a súbor Database kde máme triedu ktorá vytvorí spojenie s databázou
require_once(__ROOT__.'/db/config.php');
require_once(__ROOT__.'/classes/Database.php');

// Importujeme triedu PDO pre prácu s databázou
use PDO;
use Database;
use Exception;





?>