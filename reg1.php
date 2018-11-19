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
<?php
echo '<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
    <div class="container-fluid">
         <!-- Brand -->
            <a class="navbar-brand waves-effect waves-light">
                <strong class="white-text">BtG</strong>
            </a>
            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                 aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="">Главная</a>
                     </li>
                    <li class="nav-item">
                         <a class="nav-link waves-effect waves-light">О нас</a>
                        </li>
                    </ul>

                <!-- Right -->
                <form class="form-inline" method="POST">
                     <div class="md-form my-0">
                         <input name="name" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>';
                if($pageData['session'])
                    echo '<div class="dropdown text-center text-white ml-4">
                    <a class="fa fa-user waves-effect waves-light"  id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"></a>
                    <!--Menu-->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <h6 class="dropdown-header">'.$_SESSION['user'].'</h6>
                        <a class="dropdown-item" href="/account">Аккаунт</a>
                        <a class="dropdown-item" href="/logout">Выйти</a>
                    </div>
                </div>';
                else 
                echo 
                '<div class="text-center text-white ml-4">
                    <a class="fa fa-user waves-effect waves-light" data-toggle="modal" data-target="#modalLoginForm"></a>
                </div>
                ';
                echo '</div>
                </nav>
               </header>';


$modalContent=
'<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <button class="btn btn-blue btn-block my-4" type="submit">Войти</button>
        </div>
      </form>
    </div>
</div>
</div>';    
?>
    <main class="pt-5 mx-lg-5">
        <div class="mt-sm-3 mt-2">
            <div id="wrapper">
                    <!-- Sidebar -->
                    <div id="sidebar-wrapper" class="grey lighten-3">
                        <div class="list-group sidebar-nav">
                            <a class="list-group-item">Аккаунт</a>
                            <a class="list-group-item">Менеджер товаров</a>
                            <a href="/addproduct" class="list-group-item">Добавить товар</a>
                            <a href="../" class="list-group-item">На главную</a>
                        </div> 
                    </div>
                    <!-- /#sidebar-wrapper -->
            
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="container-fluid">
                            
                            <a href="" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                        </div>
                    </div>
</div>
    </main>
    <!-- /#wrapper -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>