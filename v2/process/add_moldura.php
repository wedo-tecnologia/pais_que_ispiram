<?php
    include('./connect.php');
    if(isset($_FILES['moldura'])){
        $file = $_FILES['moldura'];
        $tp = explode('.',$file['name']);
        $tipo_file = $tp[sizeof($tp)-1];
        $nome_file = uniqid();
        $dir = "uploads/{$nome_file}.{$tipo_file}";
        $con -> query("insert into moldura(dir,criado) values('{$dir}',now());");
        move_uploaded_file($file['tmp_name'],"../".$dir);
    }
    else {
        die(header('HTTP/1.0 404 Erro form'));
    }
?>