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
    public function deleteProduct(){
        $flag=false;
        $userId=$_SESSION['userId'];
        $prodId=$_GET['id'];

        $sql="SELECT * FROM products WHERE id='$prodId'";
        $del="DELETE FROM products WHERE id='$prodId'";
        $req = $this->db->query($sql);
        $currentProd=$req->fetch_row();
        if($userId==$currentProd[1]){
            unlink(ROOT.$currentProd[7]);
            $this->db->query($del);
            $flag=true;
        }
        return $flag;
    }
    public function correctProduct(){
        $flag=false;
        $userId=$_SESSION['userId'];
        $prodId=$_GET['id'];

        $name=strip_tags($_POST['correct']['name']);
        $price=strip_tags($_POST['correct']['price']);
        $about=strip_tags($_POST['correct']['prodAbout']);

        $sql="SELECT * FROM products WHERE id='$prodId'";
        $correct="UPDATE products SET name='$name', price='$price', about='$about' WHERE id='$prodId'";
        $req = $this->db->query($sql);

        $currentProd=$req->fetch_row();
        if($userId==$currentProd[1]){
            $this->db->query($correct);
            $flag=true;
        }
        return $flag;
    }
} 
?>