
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
        <?php require_once VIEW_PATH."header.tpl.php" ?>
        <main class="pt-5 mx-lg-5">
            <div class="container-fluid mt-5">
                <div class="row justify-content-around">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
                                <button class="btn btn-blue">Перейти</button>
                            </div>
                            <div class="text-center card-footer">
                                <p>Кря-кря</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card mb-4">
                            <img src="img/btgDuck.jpg" class="card-img-top imgCategories">
                            <div class="card-body">
                                <h4 class="card-title">Категоря N</h4>
                                <p class="card-text">Какой-то текст</p>
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
    
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form class="border border-light p-5" method="post">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Вход</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input name="login" type="text" id="defaultForm-text" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-text">Логин</label>
                        </div>
                        <div class="md-form mb-4">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input name="password" type="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Пароль</label>
                        </div>
        
                    </div>
                    <p class="text-center">Не зарегистрированны?
                        <a href="/register">Регистрация</a>
                    </p>
                    <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
                    </div>
                  </form>
                </div>
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
