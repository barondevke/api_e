 <?php
 class Db{
private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname = "users";

public function connect(){

  $this->conn = null;
  try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo "Connection error: " . $e->getMessage();
  }
  return $this->conn;
}



 }

?> 