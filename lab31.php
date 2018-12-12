
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container mt-5">
        <div class="row mt-10 justify-content-center">
            <a class="btn btn-primary" data-toggle="collapse" href="#task1" role="button" 
                aria-expanded="false" aria-controls="task1">Задание 1</a>
            <a class="btn btn-primary" data-toggle="collapse" href="#task2" role="button" 
                aria-expanded="false" aria-controls="task2">Задание 2</a>
            <a class="btn btn-primary" data-toggle="collapse" href="#task3" role="button" 
                aria-expanded="false" aria-controls="task3">Задание 3</a>
            <a class="btn btn-primary" data-toggle="collapse" href="#task4" role="button" 
                aria-expanded="false" aria-controls="task4">Задание 4</a>
        </div>
        <div class="row mt-10 collapse" id="task1">
            <div class="col-xl-6 border-right">
                <p class="h2">Выделение слов в тексте</p>
                <form class="mr-5" method="post" >
                    <input type="hidden" name="findWords" value="1">
                    <div class="d-flex justify-content-center">
                        <button class="  btn btn-primary btn-sm my-0 p-2 col-xl-2 " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="search" class="form-control p-2 col-xl-12" name="lineSearch" placeholder="Введите свой запрос">
                    </div>
                    <div class="border p-3 mt-5 col-xl-12">
                        <div class=" d-flex flex-row md-form flex-column">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="textareaPrefix" name="textSearch" class="form-control md-textarea" rows="3"></textarea>
                            <label for="textareaPrefix">Введите текст</label>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="col-xl-6  mt-2">
            <?php 
                if($_POST&&!empty($_POST['findWords'])){ 
                    include_once "php/main.php";
                    echo findWord();
                }
            ?>
            </div>
            <hr class="clearfix w-100 mb-3  pb-3"> 
        </div>
        <div class="row mt-10 collapse" id="task2">
            <div class="col-xl-6 border-right">
                <p class="h2">Выделение тегов в документе</p>
           
                <form class="mr-5" method="post" >
                    <input type="hidden" name="findTegs" value="1">
                    <div class="d-flex justify-content-center">
                        <button class="  btn btn-primary btn-sm my-0 p-2 col-xl-2 " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="search" class="form-control p-2 col-xl-12" name="tag" placeholder="Введите тег">
                    </div>
                    <div class="border p-3 mt-5 col-xl-12">
                        <div class=" d-flex flex-row md-form flex-column">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="textareaPrefix" name="textSearch" class="form-control md-textarea" rows="3"></textarea>
                            <label for="textareaPrefix">Вставьте html разметку</label>
                        </div>
                    </div> 
                </form>    
         </div>
            <div class="col-xl-6  mt-2">
            <?php 
                if($_POST&&!empty($_POST['findTegs'])){ 
                    include_once "php/main.php";
                    echo allocateTegs();
                }
            ?>

            </div>
            <hr class="clearfix w-100 mb-3  pb-3">
            

        </div>
        <div class="row mt-10 collapse" id="task3">
            <div class="col-xl-6 border-right">
                <p class="h2">Статистика</p>
           
                <form class="mr-5" method="post" >
                    <input type="hidden" name="statistics" value="1">
                    <div class="d-flex justify-content-center">
                        <button class="  btn btn-primary btn-sm my-0 p-2 col-xl-2 " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="border p-3 mt-5 col-xl-12">
                        <div class=" d-flex flex-row md-form flex-column">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="textareaPrefix" name="textSearch" class="form-control md-textarea" rows="3"></textarea>
                            <label for="textareaPrefix">Вставьте html разметку</label>
                        </div>
                    </div> 
                </form>
            
            </div>
            <div class="col-xl-6  mt-2">
            <?php 
                if($_POST&&!empty($_POST['statistics'])){ 
                    include_once "php/main.php";
                    $arr=statistics();
                    echo "<p class=\"mt-2 h4\">Количество слов = ".$arr['numWords']."</p>";
                    echo "<p class=\"mt-2 h4\">Количество изображений = ".$arr['tegImg']."</p>";
                    echo "<p class=\"mt-2 h4\">Количество ссылок = ".$arr['tegA']."</p>";
                    echo "<p class=\"mt-2 h4\">Количество таблиц = ".$arr['tegTable']."</p>";

                }
            ?>
            </div>
            <hr class="clearfix w-100 mb-3  pb-3">
            

        </div>
        <div class="row mt-10 collapse" id="task4">
            <div class="col-xl-6 border-right">
                <p class="h2">Сортировка</p>
           
                <form class="mr-5" method="post" >
                    <input type="hidden" name="sort" value="1">
                    <div class="d-flex justify-content-center">
                        <button class="  btn btn-primary btn-sm my-0 p-2 col-xl-2 " type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="border p-3 mt-5 col-xl-12">
                        <div class=" d-flex flex-row md-form flex-column">
                            <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" id="textareaPrefix" name="textSearch" class="form-control md-textarea" rows="3"></textarea>
                            <label for="textareaPrefix">Вставьте html разметку</label>
                        </div>
                    </div> 
                </form>
            
            </div>
            <div class="col-xl-6  mt-2">
            <?php 
                if($_POST&&!empty($_POST['sort'])){ 
                    include_once "php/main.php";
                    $arr=sortWords();
                   foreach ($arr as $key => $value) {
                    echo "<span class=\"badge red\">".$key."\t   -   \t".$value."</span><br>";
                }

                }
            ?>
            </div>
            <hr class="clearfix w-100 mb-3  pb-3">
            

        </div>
        
    </div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
