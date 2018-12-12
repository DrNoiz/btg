<?php
    if(isset($_POST)){
        echo $_POST['type']." ".$_POST['price']." ".$_POST['name'];
        echo "Получать рассылку?: ". ((isset($_POST['feedback'])) ? "да": "нет");
    }
?>