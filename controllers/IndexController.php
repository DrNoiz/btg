<?php

class IndexController extends Controller{
  private $pageTpl = '/views/main.tpl.php';
  public function __construct(){
    
    $this->model = new IndexModel();
    $this->view = new View();
  }
  public function index(){
    $this->pageData['title'] = "Главная";
    if(!empty($_POST['name'])){
      if(!$this->search()){
        $this->pageData['error']="По Вашему запросу ничего не найдено";
      }
    }
    if(!empty($_POST['login'])){
        if($this->login()){
          $this->pageData['loginfo']="Вы успешно вошли.";
        }else{
          $this->pageData['loginfo']="Неверный логин или пароль.";
        }
    }
    if(!empty($_SESSION['user'])){
      $this->pageData['session']=true;
    }else{
      $this->pageData['session']=false;
    }
    $this->view->render($this->pageTpl,$this->pageData);
    unset($_POST['name']);
  }
  
  public function login(){
    return $this->model->checkUser();
  }

  public function search(){
    $products=$this->model->searchProduct();
    $flag=true;
    if(!empty($products)){
      $this->pageData['products']=$products;
    }else{
      $flag=false;
    }
    return $flag;
  }
  
   public function logout(){
    session_destroy();
    header("Location: /");
  }
}
?>