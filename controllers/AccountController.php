<?php 
class AccountController extends Controller{
    public function __construct(){
      $this->model = new AccountModel();
      $this->view = new View();
    }

    public function index(){
        $this->pageTpl='/views/account.tpl.php';
        $this->pageData['title']="Ваш аккаунт";
        if(empty($_SESSION['user'])) {
        $this->pageData['accMsg']="Вы не вошли на сайте";
        }else{
            if(!empty($_POST['correct'])){
                if($this->model->correctProduct()){
                    $this->pageData['corrMsg']='Вы успешно изменили товар';
                }
            }
        $this->pageData['user']=$this->model->getUser();
        if($this->pageData['user']['type']){
            $this->pageData['usersTable']=$this->model->getTable();
            if(!empty($_POST['delId'])){
                $this->deluser();
                unset($_POST['delId']);
            }
        }
        $this->pageData['products']=$this->model->getProducts();
        if(!empty($_GET)){
            if($_GET['type']=='correct'){
                $this->pageTpl='/views/correct.tpl.php';
            }else if($_GET['type']=='delete'){
                $this->delete();
            }
        }
    }
        $this->view->render($this->pageTpl,$this->pageData);
    }
    public function delete(){
        if($this->model->deleteProduct()){
            header("Location: /account");  
        }
    }
    public function deluser(){
        $this->model->delUser();
        header("Location: /account"); 
    }
}
?>