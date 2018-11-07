<?php

class IndexController extends Controller{
  private $pageTpl = '/views/main.tpl.php';
  public function __construct(){
    
    $this->model = new IndexModel();
    $this->view = new View();
  }
  public function index(){
    $this->pageData['title'] = "Главная";
    if(!empty($_POST)){
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
  }
  
  public function login(){
    return $this->model->checkUser();
  }
  
   public function logout(){
    session_destroy();
    header("Location: /");
  }
}
?>