<?php
class SelectController extends Controller{
    private $pageTpl='/views/select.tpl.php';
    public function __construct(){
        $this->model = new SelectModel;
        $this->view = new View;
    }
    public function index(){
       $this->pageData['title']='Товары';
       if(!empty($_GET['type'])){
           $this->pageData['subtype']=$this->model->getSubtype();
           if(!empty($_GET['select'])){
            $this->pageData['currentProd']=$this->model->selectProducts();
           }else{
            $this->pageData['currentProd']=$this->model->getProducts();
           }
       }
       if(!empty($_SESSION['user'])){
            $this->pageData['session']=true;
       }else{
            $this->pageData['session']=false;
       }
       $this->view->render($this->pageTpl, $this->pageData);
    }
}
?>