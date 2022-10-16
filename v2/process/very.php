<?php
    include('../process/connect.php');
    session_start();
    if(isset($_SESSION['ID'])){
        $r = $con -> query("select id from users where id = {$_SESSION['ID']} limit 1")->fetch_assoc();
        if($r > 1){}
        else {
            echo "<script>location.href='/'</script>";
        }
    }
    else {
        echo "<script>location.href='/'</script>";
    }
?>