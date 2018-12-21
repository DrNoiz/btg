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
            <div class="wrapper">
                <div class="container-fluid mt-4">
                    <div class="row">
                    <?php
                        for($i=0; $i<count($pageData['currentProd']); $i++){
                            echo
                            '<div class="col-xl-4 col-sm-12">
                            <div class="card mb-4 text-center">
                                <img src="'.$pageData['currentProd'][$i]['picture'].'" class="card-img-top imgCategories">
                                <div class="card-body">
                                    <h4 class="card-title">'.$pageData['currentProd'][$i]['name'].'</h4>
                                    <a href="/product?id='.$pageData['currentProd'][$i]['id'].'" class="btn btn-blue text-center">Узнать больше</a>
                                    <h6 class="text-right">'.$pageData['currentProd'][$i]['price'].' BYN</h6>
                                </div>
                            </div>
                            </div>';}
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="menu-wrap">
		<div class="menu-sidebar nav">
			<ul class="menu">
            <?php
                echo '<li><a href="?type='.$_GET['type'].'">Все товары в категории</a></li>';
                for($i=0; $i<count($pageData['subtype']); $i++){
                    echo '<li><a href="?type='.$_GET['type'].'&subtype='.$pageData['subtype'][$i]['id_type'].'">'.$pageData['subtype'][$i]['type'].'</a></li>';
                }
                echo
                '<hr class="white">
                <li><a href="?type='.$_GET['type'];if(!empty($_GET['subtype']))echo'&subtype='.$_GET['subtype'];echo'&select=price">Отсортировать по цене</a></li>
                <li><a href="?type='.$_GET['type'];if(!empty($_GET['subtype']))echo'&subtype='.$_GET['subtype'];echo'&select=name">Отсортировать по названию</a></li>';
            ?>
			</ul>			
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
    <!-- Menu Toggle Script -->
    <script>
        $(document).ready(function() {
        
        var $toggleButton = $('.toggle-button'),
            $menuWrap = $('.menu-wrap');
        $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $menuWrap.toggleClass('menu-show');
        });
        });
    </script>
</body>
</html>