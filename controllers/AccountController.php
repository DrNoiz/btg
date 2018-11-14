<?php 
class AccountController extends Controller{
    private $pageTplUser = '/views/account.tpl.php';
    private $pageTplProducts = '/views/products.tpl.php';
    public function __construct(){
      $this->model = new AccountModel();
      $this->view = new View();
    }

    public function index(){
        $this->pageData['title']="Ваш аккаунт";
        if(empty($_SESSION['user'])) $this->pageData['accMsg']="Вы не вошли на сайте";
        $this->pageData['user']=$this->model->getUser();
        $this->view->render($this->pageTplUser,$this->pageData);
    }
    public function products(){
       $this->pageData['products']=$this->model->getProducts();
       $this->view->render($this->pageTplProducts,$this->pageData);
    }
}
?>