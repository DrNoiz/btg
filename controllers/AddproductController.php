<?php
class AddproductController extends Controller
{
    private $pageTpl='/views/addprod.tpl.php';
    public function __construct()
    {
        $this->model=new AddproductModel();
        $this->view=new View();
    }
    public function index(){
        $this->pageData['title']='Добавление товара';
        $this->pageData['subtypes']=$this->model->getSubTypes();
        if(!empty($_SESSION['user'])){
            $correctAdd=!empty($_POST['name'])
            ||!empty($_POST['price'])||!empty($_POST['subtype'])
            ||!empty($_POST['prodAbout']);
            if($correctAdd&&!empty($_POST['type'])){
                if($this->addProduct()){

                }else{
                    $this->pageData['addMsg']="Вы заполнили не все поля";
                }
            }
        
        }else{
            $this->pageData['addMsg']="Вы не авторизировались на сайте!";
        }
        $this->view->render($this->pageTpl,$this->pageData);
    }
    public function addProduct(){
        $correctAdd=!empty($_POST['name'])
        &&!empty($_POST['price'])&&!empty($_POST['type'])
        &&!empty($_POST['prodAbout'])&&!empty($_FILES['picture']);
        if($correctAdd){
            $this->model->addProduct();
            $this->pageData['addMsg']="Вы успешно добавили товар";
        }
        return $correctAdd;
    }
}
?>
