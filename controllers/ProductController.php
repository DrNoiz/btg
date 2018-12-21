<?php 
class ProductController extends Controller{
    public function __construct(){
      $this->model = new ProductModel();
      $this->view = new View();
    }

    public function index(){
        $this->pageTpl='/views/product.tpl.php';
        $this->pageData['product']=$this->model->getProductInf();
        $this->pageData['title']=$this->pageData['product']['name'];
        $this->view->render($this->pageTpl,$this->pageData);
    }
}
?>