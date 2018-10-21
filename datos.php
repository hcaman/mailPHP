<?php

    $dest = filter_input(INPUT_POST, 'destino');
    $asun = filter_input(INPUT_POST, 'asunto');
    $mens = filter_input(INPUT_POST, 'mensaje');

    if(mail($dest, $asun, $mens)){
        //si la funcion mail se ejecuto correctamente nos enviara a confirm.php
        require 'confirm.php'; 
    }
?>
