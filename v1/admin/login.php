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
        include('../connect/connect.php');
    ?>
    <div class='org_site'>
        <?php
            include('../includes/topo/topo2.php');
            echo "<script>localStorage.clear();</script>";
            if(isset($_POST['email']) and isset($_POST['senha'])){
                $email = strip_tags($con -> real_escape_string($_POST['email']));
                $senha = md5(strip_tags($con -> real_escape_string($_POST['senha'])));
                $r = ($con -> query("select id,nome from users where email = '{$email}' and senha = '{$senha}'")) -> fetch_assoc();
                if($r != null){
                    if(count($r) == 2){
                        echo "<script>localStorage.setItem('login','ok');location.href = './adm.php'</script>";
                    }
                    else {
                        echo "<script>localStorage.clear();window.alert('Usuario não existe ou dados incorretos');</script>";
                    }
                }
                else {
                    echo "<script>localStorage.clear();window.alert('Usuario não existe ou dados incorretos');</script>";
                }
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