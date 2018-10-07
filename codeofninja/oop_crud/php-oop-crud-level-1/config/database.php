<?php
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db = "php_oop_crud_level_1";
    private $port = 8889;
    private $username = "root";
    private $password = "root";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;

        $dsn = "mysql:host={$this->host};dbname={$this->db};port={$this->port}";
  
        try{
            $this->conn = new PDO($dsn, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>