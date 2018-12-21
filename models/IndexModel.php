<?php 
class IndexModel extends Model{
  public function checkUser(){
      $flag=true;
      $login = $_POST['login'];
      $password = hash("sha256",$_POST['password']);
    
      $sql = "SELECT * FROM users WHERE login = '$login' AND  password = '$password'";
    
      $req = $this->db->query($sql);
      if($req->num_rows){
        $user=$req->fetch_assoc();
        $_SESSION['user'] = $user['login'];
        $_SESSION['userId']=$user['id'];
        $_SESSION['userType']=$user['type'];
      } else{
        $flag=false;
      }
      return $flag;
  }

  public function searchProduct(){
    $name=$_POST['name'];
    $sql ="SELECT * FROM products WHERE name LIKE '%$name%'";

    $req = $this->db->query($sql);

    $products=array();
    for($i=0; $i<$req->num_rows; $i++){
      $products[$i]=$req->fetch_assoc();
    }
    return $products;
  }

}
?>