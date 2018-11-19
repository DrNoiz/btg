<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageData['title'];?></title>
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
   <div class="row justify-content-center">
       <div class="col-xl-10">
        <?php
        if(empty($pageData['addMsg'])){
            echo '<form class="p-5" method="POST" enctype="multipart/form-data">';
            if(empty($_POST)){
            echo<<<FormContent
    <p class="h4 mb-4 text-center">Добавление товара</p>

    <label for="select">Выбирете категорию</label>
    <select name="type" class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">Ваша категория</option>
        <option value="Bricks">Кирпич и блоки</option>
        <option value="Tools">Инструменты</option>
        <option value="Isulation">Утепление и изоляция</option>
        <option value="Fittings">Арматура</option>
        <option value="Mixtures">Строительные смеси</option>
        <option value="Fastener">Крепёжные материалы</option>
    </select>

    <button class="btn btn-blue btn-block my-4" type="submit">Далее</button>
FormContent;
            }else{
                echo<<<FormContent
                <p class="h4 mb-4 text-center">Добавление товара</p>

                <label for="nameInput">Название</label>
                <input name="name" type="text" id="nameInput" class="form-control mb-4" placeholder="Название вашего товара">
            
                <label for="priceInput">Цена</label>
                <input name="price" type="text" id="priceInput" class="form-control mb-4" placeholder="цена вашего товара">
            
                <label for="select">Выбирете категорию</label>
                <select name="subtype" class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Ваша категория</option>
FormContent;
                for($i=1; $i<count($pageData['products'][$_POST['type']])+1; $i++){
                    echo '<option value="'.$i.'">'.$pageData['products'][$_POST['type']][$i].'</option>';
                }
                echo
                '
                </select>
                <input type="hidden" name="type" value="'.$_POST['type'].'">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Файл</span>
                    </div>
                    <div class="custom-file">
                        <input name="picture" accept="image/*" type="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
                        <label class="custom-file-label" for="fileInput">Имя файла</label>
                    </div>
                </div>
            
                <label for="textarea">Описание товара</label>
                <textarea name="prodAbout" id="textarea" class="form-control mb-4" placeholder="Описание вашего товара"></textarea>
            
                <button class="btn btn-blue btn-block my-4" type="submit">Добавить</button>';
            }
        echo '</form>';
        }else{
            echo '<div class="text-center">'.$pageData['addMsg'].'
            <a href="/account" class="btn btn-blue text-center">На главную</a>
            </div>';
        }
    ?>
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