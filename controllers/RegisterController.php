<?php
    class RegisterController extends Controller{
        private $pageTpl='/views/reg.tpl.php';
        public function __construct()
        {
            $this->model=new RegisterModel();
            $this->view=new View();
        }

        public function index(){
            $this->pageData['title'] = "Регистрация";
            if(!empty($_POST)){
              if($this->register()){
                $this->pageData['registerMsg'] = "Вы успешно зарегистрированы!";
                $this->pageData['correctReg']=true;
              }else $this->pageData['correctReg']=false;
            }
            $this->view->render($this->pageTpl,$this->pageData);
          }

        public function register(){
            $correctReg=!empty($_POST)&&!empty($_POST['login'])
            &&!empty($_POST['email'])
            &&!empty($_POST['password']);
            if($correctReg){
                $this->model->registerNewUser($_POST['login'], $_POST['email'], $_POST['password']);
                return true;
              }
              else{
                $this->pageData['registerMsg'] = "Вы заполнили не все поля";
                return false;
              }
          }

    }
?>