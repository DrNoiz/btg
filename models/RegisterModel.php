<?php 
class RegisterModel extends Model{
  public function registerNewUser($login, $email, $password){
   $dbPass=hash("sha256",$password);
   $sql="INSERT INTO users(login, email, password, id)
   VALUES('$login', '$email','$dbPass',NULL)";
   $this->db->query($sql);
  }
}
?>