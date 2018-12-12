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
   
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                     <div class="list-group ">
                      <a class="list-group-item" data-toggle="collapse" href="#collapseNav" 
                        aria-expanded="false" aria-controls="collapseNav">Аккаунт</a>
                      <?php
                        if($pageData['user']['type'])
                        echo
                        '<a class="list-group-item" href="" data-toggle="modal" 
                        data-target="#modalTable">Таблица пользователей</a>';
                      ?>
                      <a class="list-group-item" data-toggle="collapse" href="#collapseNav" 
                        aria-expanded="false" aria-controls="collapseNav">Менеджер товаров</a>
                      <a href="/addproduct" class="list-group-item">Добавить товар</a>
                      <a href="../" class="list-group-item">На главную</a>
                    </div> 
                </div>
                <div class="col-xl-9 col-xl-offset-2">
                    <div id="collapseNav" class="collapse show">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Пользователь</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <tbody>
                                          <tr>
                                            <td>id: </td>
                                            <td><?php echo $pageData['user']['id'];?></td>
                                          </tr>
                                          <tr>
                                            <td>Логин: </td>
                                            <td><?php echo $pageData['user']['login'];?></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail: </td>
                                            <td><?php echo $pageData['user']['email'];?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="collapseNav" class="collapse">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>Ваши товары</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row comtainer pt-3 justify-content-around">
                            <?php
                                for($i=0; $i<count($pageData['products']); $i++){
                                    echo
                                '<div class="col-xl-4 col-sm-12">
                                    <div class="card mb-4 text-center">
                                        <img src="'.$pageData['products'][$i]['picture'].'" class="card-img-top imgCategories">
                                        <div class="card-body">
                                            <h4 class="card-title">'.$pageData['products'][$i]['name'].'</h4>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <a href="account?type=correct&id='.$pageData['products'][$i]['id'].'"> <i class="fa fa-align-justify mr-3"></i></a>
                                                </div>
                                                <div class="col-xl-6">
                                                    <a href="account?type=delete&id='.$pageData['products'][$i]['id'].'"> <i class="fa fa-trash mr-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                }
                            ?>
                        </div>

                    </div>
            </div>
        </div>
        
   </div>
   <?php
    if($pageData['user']['type']){
        echo
    '<div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Таблица пользователей</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">login</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>';
        for($i=0; $i < count($pageData['usersTable']); $i++){
            echo
            '<tr>
            <th scope="row">'.$pageData['usersTable'][$i]['id'].'</th>
            <td>'.$pageData['usersTable'][$i]['login'].'</td>
            <td>'.$pageData['usersTable'][$i]['email'].'</td>
            <td>
                <form method="POST">
                    <button class="btn-primary" name="delId" type="submit" value="'.$pageData['usersTable'][$i]['id'].'"><i class="fa fa-trash"></i></button>
                </form>
            </td>
          </tr>';
        }
       echo '</tbody>
      </table>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-blue" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>';
    }
   ?>

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