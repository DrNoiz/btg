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

  public function searchProduct(){
    $name=$_POST['name'];

    $sql ="SELECT * FROM products WHERE name LIKE '%$name%'";

    $req = $this->db->query($sql);

    $products=array();
        for($i=0; $i<$req->num_rows; $i++){
            $buf=$req->fetch_row();
            $products[$i]=array(
                'id'=>$buf[0],
                'name'=>$buf[2],
                'price'=>$buf[3],
                'picture'=>$buf[7]
            );
        }
    return $products;
  }

}
?>