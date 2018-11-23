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
        $this->pageData['products']=array(
            'Bricks'=>array('1'=>'Кирпич','2'=>'Блоки','3'=>'Плиты перекрытия','4'=>'Декоративный камень'),
            'Tools'=>array('1'=>'Измерительные инструменты','2'=>'Молотки, топоры и гвоздодёры', '3'=>'Свёрла и зубила', '4'=>'Спецодежда'),
            'Isulation'=>array('1'=>'Пенопласт и пеноплекс','2'=>'Минеральная вата'),
            'Fittings'=>array('1'=>'Строительная арматура','2'=>'Композитная арматура'),
            'Mixtures'=>array('1'=>'Кладочная смесь','2'=>'Штукатурка','3'=>'Шпатлёвка'),
            'Fastener'=>array('1'=>'Саморезы','2'=>'Дюбеля','3'=>'Гвозди','4'=>'Кронштейны')
        );
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
