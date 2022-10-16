<?php
    $con = mysqli_connect('127.0.0.1','root','','edit_img');
    $con -> query('set @@time_zone="-3:00";');
    date_default_timezone_set('America/Sao_Paulo');
?>