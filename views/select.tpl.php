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
        <div class="mt-sm-3 mt-2">
            <div id="wrapper">
                    <!-- Sidebar -->
                    <div id="sidebar-wrapper" class="grey lighten-3">
                        <div class="list-group sidebar-nav">
                            <?php 
                            for($i=1; $i<count($pageData['products'][$_GET['type']])+1; $i++){
                                echo '<a href="?subtype=" class="list-group-item">'.$pageData['products'][$_GET['type']][$i].'</a>';
                            }
                            echo
                            '<hr>
                             <div class="list-group">
                                <a href="?type='.$_GET['type'].'&select=price" class="list-group-item">Отсортировать по цене</a>
                                <a href="?type='.$_GET['type'].'&select=name" class="list-group-item">Отсортировать по названию</a>
                             </div>
                            '
                            ?>
                        </div> 
                        
                    </div>
                    <!-- /#sidebar-wrapper -->
            
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <a class="wrappmenu" id="menu-toggle">
                            <i class="fa fa-list"></i></a>
                        <div class="container-fluid mt-4">
                            <div class="row ml-2">
                        <?php
                                for($i=0; $i<count($pageData['currentProd']); $i++){
                                    echo
                                '<div class="col-xl-4 col-sm-12">
                                <div class="card mb-4 text-center">
                                    <img src="'.$pageData['currentProd'][$i]['picture'].'" class="card-img-top imgCategories">
                                    <div class="card-body">
                                        <h4 class="card-title">'.$pageData['currentProd'][$i]['name'].'</h4>
                                        <h6 class="text-right">'.$pageData['currentProd'][$i]['price'].' BYN'.'</h6>
                                    </div>
                                </div>
                            </div>';
                                }
                            ?>
                            </div>
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