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
        <?php require_once VIEW_PATH."header.tpl.php";?>
        <main class="pt-5 mx-lg-5">
            <div class="container-fluid mt-5">
                <div class="row justify-content-around">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgBrick1.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Кирпич и блоки</h4>
                                <p class="card-text">(Мало- и крупногабаритные)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgTools.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Инструменты</h4>
                                <p class="card-text">(Электро- и ручные)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgIsulation.png" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Утепление и изоляция</h4>
                                <p class="card-text">(Шумоизоляционные и пенопластовые)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgFittings.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Арматура</h4>
                                <p class="card-text">(разнообразные изделия из металла)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgMixtures.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Строительные смеси</h4>
                                <p class="card-text">(Готовые и сухие)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4 text-center">
                            <img src="img/btgFastener.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Крепёжные материалы</h4>
                                <p class="card-text">(Оцинкованные и неоцинкованные)</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </main>

        <?php echo $modalContent;?>

    
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
