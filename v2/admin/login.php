<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css/config.css'>
    <link rel='stylesheet' type='text/css' href='./css/login.css'>
    <link rel='icon' href="../img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        include('../process/check.php');
    ?>
    <div class='org_site'>
        <div class='titulo'>
            Login
        </div>
        <div class='login'>
            <form id='login'>
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
    <?php
        include('../includes/scripts2.php');
    ?>
    <script src='./js/login.js'></script>
</body>
</html>