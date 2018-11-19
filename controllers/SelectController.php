<?php
class SelectController extends Controller{
    private $pageTpl='/views/select.tpl.php';
    public function __construct(){
        $this->model = new SelectModel;
        $this->view = new View;
    }
    public function index(){

        $this->pageData['title']='Товары';
        $this->pageData['products']=array(
            'Bricks'=>array('1'=>'Кирпич','2'=>'Блоки','3'=>'Пилты перекрытия','4'=>'Декаративный камень'),
            'Tools'=>array('1'=>'Измерительные инструменты','2'=>'Молотки, топоры и гвоздолёры', '3'=>'Свёрла и зубила', 'Спецодежда'),
            'Isulation'=>array('1'=>'Пенопласт и пеноплекс','2'=>'Минеральная вата'),
            'Fittings'=>array('1'=>'Строительная арматура','2'=>'Композитная арматура'),
            'Mixtures'=>array('1'=>'Кладочная смесь','2'=>'Штукатурка','Шпаклёвка'),
            'Fastener'=>array('1'=>'Саморезы','Дюбеля','2'=>'Гвозди','Кронштейны')
        );
       if(!empty($_GET['type'])){
           if(!empty($_GET['select'])){
            $this->pageData['currentProd']=$this->model->selectProducts();
           }else{
            if($this->checkGet()){
                $this->pageData['currentProd']=$this->model->getProducts();
            }else{
                $this->pageData['selMsg']="Неверно указана категория";
            }
           }
       }
       if(!empty($_SESSION['user'])){
            $this->pageData['session']=true;
       }else{
            $this->pageData['session']=false;
       }
       $this->view->render($this->pageTpl, $this->pageData);
    }
    private function checkGet(){
        $flag=false;
        $type=$_GET['type'];
        if(!empty($this->pageData['products'][$type])){
            $flag=true;
        }
        return $flag;
    }
}
?>