<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css/config.css'>
    <link rel='stylesheet' type='text/css' href='../includes/topo/topo.css'>
    <link rel='stylesheet' type='text/css' href='./css/login.css'>
    <link rel='icon' href="../img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        session_start();
        include('../connect/connect.php');
    ?>
    <div class='org_site'>
        <?php
            include('../includes/topo/topo.php');
            if(isset($_POST['email']) and isset($_POST['senha'])){
                $email = strip_tags($con -> real_escape_string($_POST['email']));
                $senha = md5(strip_tags($con -> real_escape_string($_POST['senha'])));
                $r = ($con -> query("select id,nome from users where email = '{$email}' and senha = '{$senha}'")) -> fetch_assoc();
                if($r != null){
                    if(count($r) == 2){
                        $nome = $r['nome'];
                        $_SESSION['acesso'] = "ok";
                        $_SESSION['nome'] = $nome;
                        $_SESSION['email'] = $email;
                        echo "<script>location.href = './adm.php'</script>";
                    }
                    else {
                        echo "<script>window.alert('Usuario não existe ou dados incorretos');</script>";
                        session_destroy();
                    }
                }
                else {
                    echo "<script>window.alert('Usuario não existe ou dados incorretos');</script>";
                    session_destroy();
                }
            }
            else if(isset($_POST['email']) or isset($_POST['senha'])){
                echo "<script>window.alert('Tentativa de burlar');</script>";
                session_destroy();
            }
        ?>
        <div class='titulo'>
            Login
        </div>
        <div class='login'>
            <form action='login.php' method='POST'>
                <div class='campo'>
                    <input type='email' name='email' placeholder='E-mail' required>
                </div>
                <div class='campo'>
                    <input type='password' name='senha' placeholder='Senha' required>
                </div>
                <div class='campo'>
                    <button type='submit'>Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>