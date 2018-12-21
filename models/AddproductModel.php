<?php
class AddproductModel extends Model{
    public function addProduct(){
        $newFileName='\\/img\\/products\\/'.uniqid($_POST['type'].'_').".jpg";
        $newFile=$_FILES['picture'];
        move_uploaded_file($newFile['tmp_name'], ROOT.$newFileName);

        $id=$_SESSION['userId'];
        $name=strip_tags($_POST['name']);
        $price=strip_tags($_POST['price']);
        $type=$_POST['type'];
        $about=strip_tags($_POST['prodAbout']);

        $sql="INSERT INTO products(id, user_id, name, price, type, about, picture)
        VALUES(NULL, '$id','$name','$price','$type', '$about','$newFileName')";
        $this->db->query($sql);
    }

    public function getSubTypes(){
        $type=array();
        $sql="SELECT * from products_type WHERE pretype IS NOT NULL";
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $type[$i]=$req->fetch_assoc();
        }
        return $type;
    }
}
?>