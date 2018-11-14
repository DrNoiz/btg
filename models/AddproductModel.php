<?php
class AddproductModel extends Model{
    public function addProduct(){
        $newFileName='\\/img\\/products\\/'.uniqid($_POST['type'].'_').".jpg";
        $newFile=$_FILES['picture'];
        move_uploaded_file($newFile['tmp_name'], ROOT.$newFileName);

        echo mb_internal_encoding();
        $id=$_SESSION['userId'];
        $name=strip_tags($_POST['name']);
        $price=strip_tags($_POST['price']);
        $type=$_POST['type'];
        $subtype=$_POST['subtype'];
        $about=strip_tags($_POST['prodAbout']);

        $sql="INSERT INTO products(id, user_id, name, price, type, subtype, about, picture)
        VALUES(NULL, '$id','$name','$price','$type','$subtype','$about','$newFileName')";
        echo $sql;
        $this->db->query($sql);
    }
}
?>