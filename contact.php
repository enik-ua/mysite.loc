<?php

$size = ini_get('post_max_size');

    $rest = substr($size, -1);
    
    //echo $rest;
   
    switch ($rest) {
        case "M": 
            $size = $size * 1048576; break;
        case "K":
            $size = $size * 1024; break;
        case "G":
            $size = $size * 1073741824; break;
        default:
            $size = $size * 1;
    }
echo "<p>Максимальный размер отправляемых данных {$size} байт. </p>";