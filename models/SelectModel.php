<?php
class SelectModel extends Model{
    public function getProducts(){
        $type=$_GET['type'];
        $currentProd=array();
        $sql="SELECT * FROM products WHERE type='$type'";
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $buf=$req->fetch_row();
            $currentProd[$i]=array(
                'id'=>$buf[0],
                'name'=>$buf[2],
                'price'=>$buf[3],
                'about'=>$buf[6],
                'picture'=>$buf[7]
            );
        }
        return $currentProd;
    }

    public function selectProducts(){
        $type=$_GET['type'];
        $select=$_GET['select'];
        $currentProd=array();
        $sql="SELECT * FROM products WHERE type='$type' ORDER BY $select;";
        $req=$this->db->query($sql);
        for($i=0; $i<$req->num_rows; $i++){
            $buf=$req->fetch_row();
            $currentProd[$i]=array(
                'id'=>$buf[0],
                'name'=>$buf[2],
                'price'=>$buf[3],
                'about'=>$buf[6],
                'picture'=>$buf[7]
            );
        }
        return $currentProd;
    }
}
?>