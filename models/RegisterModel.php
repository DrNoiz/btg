<?php 
class RegisterModel extends Model{
  public function registerNewUser($login, $email, $password){
    $dbPass=hash("sha256",$password);
    $sql="INSERT INTO users(id, login, email, password)
    VALUES(NULL,'$login', '$email','$dbPass')";
    $this->db->query($sql);
  }
}
?>