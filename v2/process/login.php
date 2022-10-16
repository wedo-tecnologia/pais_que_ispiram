<?php
    include('./connect.php');
    if(isset($_POST['email']) and isset($_POST['senha'])){
        $email = $con -> real_escape_string(strip_tags($_POST['email']));
        $senha = md5($con -> real_escape_string(strip_tags($_POST['senha'])));
        $r = $con -> query("select id from users where email = '{$email}' and senha = '{$senha}' limit 1") -> fetch_assoc();
        if(isset($r['id'])){
            session_start();
            $con -> query("update users set online = now() where id = {$r['id']}");
            $_SESSION['ID'] = $r['id'];
        }
        else {
            die(header('HTTP/1.0 404 E-mail ou senha incorreta!'));
        }
    }
    else {
        die(header('HTTP/1.0 404 Erro form'));
    }
?>