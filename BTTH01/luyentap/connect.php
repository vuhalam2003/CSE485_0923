<?php
class DBconnection {
    private $host;
    private $dbname;
    private $pass;
    private $user;
    private $conn;

    public function __construct(){
        $this->host = DB_HOST;
        $this->dbname = DB_NAME;
        $this->pass = DB_PASS;
        $this->user = DB_USER;

        try {
            $this->conn = new PDO("mysql:host={$this->host}; dbname={$this->dbname}", "{$this->user}", "{$this->pass}");
        } catch  (PDOException $e) {
            $this->conn = null;
        }
        
    }
    public function getConn() {
        return $this->conn;
    }
} 