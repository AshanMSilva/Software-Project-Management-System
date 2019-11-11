<?php 
// Singleton to connect db.
class ConnectDb {
  // Hold the class instance.
  private static $instance = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $name = 'mybase';
   
  // The db connection is established in the private constructor.
  private function __construct()
  {
    $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->name);
    if(mysqli_connect_errno()){
      die("Connection Unsuccessful"." ".mysqli_connect_error());
      
    }
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new ConnectDb();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->conn;
  }
  public function closeConnecton()
  {
    mysql_close($conn);
  }
}
?>