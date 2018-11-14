<?php 
class IndexModel extends Model{
  public function checkUser(){
      $login = $_POST['login'];
      $password = hash("sha256",$_POST['password']);
    
      $sql = "SELECT * FROM users WHERE login = '$login' AND  password = '$password'";
    
      $req = $this->db->query($sql);
      if($req->num_rows){
        $_SESSION['user'] = $login;
        $_SESSION['userId']=$req->fetch_row()[0];
        return true;
      } else{
        return false;
      }
  }
}
?>