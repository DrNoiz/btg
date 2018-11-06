<?php
class DB{
  const USER  = "root";
  const PASS  = "";
  const HOST  = "localhost";
  const DB    = "btg";    
 
  public static function connToDB(){
    $username = self::USER;
    $password = self::PASS;
    $host = self::HOST;
    $db   = self::DB;
    try{
    $conn= new mysqli($host,$username,$password,$db);
    }catch(mysqli_sql_exception $e){
      die("Ошибка при подключении к БД: $e");
    }
    return $conn;
  }
}
?>