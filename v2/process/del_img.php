<?php
    include('./connect.php');
    if(isset($_POST['id'])){
        $id = $con -> real_escape_string(strip_tags($_POST['id']));
        $r = $con -> query("select dir from img where id = {$id}") -> fetch_assoc();
        unlink('../'.$r['dir']);
        $con -> query("delete from img where id = {$id}");
    }
?>