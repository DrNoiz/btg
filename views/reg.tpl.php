<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageData['title']?></title>
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
if(empty($pageData['registerMsg'])){
echo<<<RegForm
<form class="text-center p-5" method="POST">

    <p class="h4 mb-4">Регистрация</p>
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <input name="login" type="login" id="defaultRegisterFormLogin" class="form-control mb-4" placeholder="Логин">
            <input name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
            <input name="password" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password">
            <!-- Sign up button -->
            <button class="btn btn-blue my-4 btn-block" type="submit">Зарегистрироваться</button>
        </div>
    </div>
</form>
RegForm;
}else if($pageData['correctReg']){
    echo
    '<div class="text-center p-10">
        <p>'.$pageData['registerMsg'].'</p>
        <a href="../" class="btn btn-blue">На главную</a>
    </div>';}else{
        echo
        '<div class="text-center p-10">
            <p>'.$pageData['registerMsg'].'</p>
            <a href="" class="btn btn-blue">Ещё раз</a>
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
