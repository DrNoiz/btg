<?php
class ProductModel extends Model{
    public function getProductInf(){
        $prodId=$_GET['id'];

        $sql="SELECT * FROM products WHERE id = $prodId";
        $req=$this->db->query($sql);
        $product=$req->fetch_assoc();
        $prodType=$product['type'];

        $sql="SELECT type FROM products_type WHERE id_type =$prodType";
        $product['type']=$this->db->query($sql)->fetch_assoc()['type'];
        $userId=$product['user_id'];

        $sql="SELECT login, email FROM users WHERE id =$userId";
        $product['user']=$this->db->query($sql)->fetch_assoc();

        return  $product;
    }
}
?>