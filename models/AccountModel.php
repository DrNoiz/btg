<?php
class AccountModel extends Model{
    public function getUser(){
        $userId=$_SESSION['userId'];
        $sql = "SELECT * FROM users WHERE id='$userId'";
        $req = $this->db->query($sql);
        $buf=$req->fetch_row();
        $user=array(
            'id'=>$buf[0],
            'login'=>$buf[1],
            'email'=>$buf[2]
        );
        return $user;
    }
    public function getProducts(){
        $userId=$_SESSION['userId'];
        $sql="SELECT * FROM products WHERE user_id='$userId'";
        $req = $this->db->query($sql);
        $products=array();
        for($i=0; $i<$req->num_rows; $i++){
            $buf=$req->fetch_row();
            $products[$i]=array(
                'id'=>$buf[0],
                'name'=>$buf[2],
                'picture'=>$buf[7]
            );
        }
        return $products;
    }
} 
?>