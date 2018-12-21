<?php
class SelectModel extends Model{
    public function getProducts(){
        if(!empty($_GET['subtype'])){
            $type=$_GET['subtype'];
            $sql="SELECT* FROM products WHERE type = $type";
        }else{
            $type=$_GET['type'];
            $sql="SELECT* FROM products WHERE type IN (SELECT id_type from products_type WHERE pretype=$type)";
        }
        $currentProd=array();
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $currentProd[$i]=$req->fetch_assoc();
        }
        return $currentProd;
    }

    public function selectProducts(){
        $select=$_GET['select'];
        if(!empty($_GET['subtype'])){
            $type=$_GET['subtype'];
            $sql="SELECT * FROM products WHERE type = $type ORDER BY $select";
        }else{
            $type=$_GET['type'];
            $sql="SELECT* FROM products WHERE type IN (SELECT id_type from products_type WHERE pretype=$type) ORDER BY $select";
        }
        $currentProd=array();
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $currentProd[$i]=$req->fetch_assoc();
        }
        return $currentProd;
    }

    public function getSubtype(){
        $type=$_GET['type'];
        $subtype=array();
        $sql="SELECT * from products_type WHERE pretype=$type";
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $subtype[$i]=$req->fetch_assoc();
        }
        return $subtype;
    }
}
?>