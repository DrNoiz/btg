<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
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
    <main class="pt-5 mx-lg-5">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <div class="list-group sidebar-nav">
                    <a class="list-group-item">Аккаунт</a>
                    <a class="list-group-item">Менеджер товаров</a>
                    <a href="/addproduct" class="list-group-item">Добавить товар</a>
                    <a href="../" class="list-group-item">На главную</a>
                    </div> 
                </div>
                    <div id="page-content-wrapper">
                        <div class="container-fluid">
                            <a href="" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                        </div>
                    </div>
    </main>
 

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
<!--for($i=0; $i<count($pageData['products']); $i++){
    echo
'<div class="col-xl-4 col-sm-12">
    <div class="card mb-4 text-center">
        <img src="'.$pageData['products'][$i]['picture'].'" class="card-img-top imgCategories">
        <div class="card-body">
            <h4 class="card-title">'.$pageData['products'][$i]['name'].'</h4>
            <div class="row">
                <div class="col-xl-6">
                    <a href=""> <i class="fa fa-align-justify mr-3"></i></a>
                </div>
                <div class="col-xl-6">
                    <a href=""> <i class="fa fa-trash mr-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>';
}
?>