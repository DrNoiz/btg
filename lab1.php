<?php
    if(isset($_POST)){
        echo $_POST['type']." ".$_POST['price']." ".$_POST['name'];
        echo "Связаться с вами?: ".isset($_POST['feedBack'])?"да":"нет";
        echo $_POST['feedBack'];
    }
?>