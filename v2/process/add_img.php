<?php
    include('./connect.php');
    if(isset($_FILES['img'])){
        $file = $_FILES['img'];
        $tp = explode('.',$file['name']);
        $nome_file = uniqid();
        $dir = "uploads/{$nome_file}.jpg";
        $con -> query("insert into img(dir,criado) values('{$dir}',now());");
        move_uploaded_file($file['tmp_name'],"../".$dir);
    }
    else {
        die(header('HTTP/1.0 404 Erro form'));
    }
?>