<?php 

// Establishing a database connection
class Database {
    private $pdo; // database connectie
    protected $stmt; // dit is het huidige statement

    public function __construct($db, $host = "localhost:3307", $user = "root", $pass = "")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected to $db succesfully";
            session_start();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function run($sql, $args = NULL)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}

$db = new Database("bp24");

?>