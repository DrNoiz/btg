<?php   
    $newFileName='E:\Xampp\htdocs\img\products\\'.uniqid($_POST['type'].'_').".jpg";
    $newFile=$_FILES['picture'];
    move_uploaded_file($newFile['tmp_name'], $newFileName);
?>
