<?php

class database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "abc"; // tên database
    protected $conn = null;

    function connection_database(): PDO {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw $e;
        }
        return $conn;
    }
}

?>
<?php
class Database {
    private $host = "localhost";
    private $db   = "your_db_name";
    private $user = "root";
    private $pass = "";
    private $charset = "utf8mb4";
    public $pdo;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->pdo = new PDO($dsn, $this->user, $this->pass, $opt);
    }
}