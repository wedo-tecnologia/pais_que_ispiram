<?php
    include('../process/connect.php');
    session_start();
    if(isset($_SESSION['ID'])){
        $r = $con -> query("select id from users where id = {$_SESSION['ID']} limit 1")->fetch_row();
        if($r >= 1){
            echo "<script>location.href='/admin/adm.php'</script>";
        }
        else {
            session_destroy();
            echo "<script>location.href='/'</script>";
        }
    }
?>