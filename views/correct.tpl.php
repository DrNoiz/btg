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
                if(empty($pageData['corrMsg'])){
                    echo<<<FormText
        <form class="p-5" method="POST" enctype="multipart/form-data">
            <p class="h4 mb-4 text-center">Изменение товара</p>
                <label for="nameInput">Название</label>
                <input name="correct[name]" type="text" id="nameInput" class="form-control mb-4" placeholder="Название вашего товара">
                <label for="priceInput">Цена</label>
                <input name="correct[price]" type="text" id="priceInput" class="form-control mb-4" placeholder="цена вашего товара">
            
                <label for="textarea">Описание товара</label>
                <textarea name="correct[prodAbout]" id="textarea" class="form-control mb-4" placeholder="Описание вашего товара"></textarea>
            
                <button class="btn btn-blue btn-block my-4" type="submit">Изменить</button>
        </form>
FormText;
            }else{
                echo '<div class="text-center">';
                echo $pageData['corrMsg'];
                echo ' <a href="/account" class="btn btn-blue">В аккаунт</a>';
                echo '</div>';
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
