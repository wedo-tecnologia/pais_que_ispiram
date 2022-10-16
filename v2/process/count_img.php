<?php
    include('./connect.php');
    $r = $con -> query('select id from img;');
    if($r == null){
        echo 0;
    }
    else {
       $count = 0;
       while($data = mysqli_fetch_assoc($r)){
        $count = $count + 1;
       }
       echo $count;
    }
?>