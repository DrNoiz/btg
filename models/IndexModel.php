<?php 
class IndexModel extends Model{
  public function checkUser(){
    if(!empty($_POST['login'])){
    $login = $_POST['login'];
    $password = hash("sha256",$_POST['password']);
    
    $sql = "SELECT * FROM users WHERE login = $login AND  password = $password";
    
    $req = $this->db->query($sql);
    if(!empty($req)){
      $_SESSION['user'] =$login;
    } else{
      return false;
    }
    }else{
        echo "ERROR";
    }
  }
}
?>