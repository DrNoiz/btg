<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
        <div class="container-fluid col-xl-10 col-lg-12">
            <div class="row">
                <div class="col-xl-6 col-lg-12 text-center"><?php echo'<img src="'.$pageData['product']['picture'].'" width=400 class="img-thumbnail"/>'?></div>
                <div class="col-xl-6 col-lg-12">
                    <h4><?php echo $pageData['product']['name']?></h4>
                    <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>Категория</td>
                                <td><?php echo $pageData['product']['type']?></td>
                              </tr>
                              <tr>
                                <td>Цена</td>
                                <td><?php echo $pageData['product']['price'].' BYN'?></td>
                              </tr>
                              <tr>
                                <td>Продавец</td>
                                <td><?php echo $pageData['product']['user']['login']?></td>
                              </tr>
                              <tr>
                                <td>Контакты продавца</td>
                                <td><?php echo $pageData['product']['user']['email']?></td>
                              </tr>
                              <tr>
                                <td>О товаре</td>
                                <td><?php echo $pageData['product']['about']?></td>
                              </tr>
                        </tbody>
                    </table>
                    <?php
                        echo '<a href="'.$_SERVER['HTTP_REFERER'].'" class="btn btn-blue text-center">Назад</a>';  
                    ?> 
                </div>
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