<?php
    if($_GET['color']=== 'verde') {
        echo $_GET['name'].' eres beticos.';
    } elseif ($_GET['color']=== 'rojo') {
         echo $_GET['name'].' eres sevillista.';
    } else {
        echo $_GET['name'].' eres nazareno';
    }
?>