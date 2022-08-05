<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./css/config.css'>
    <link rel='stylesheet' type='text/css' href='./css/index.css'>
    <link rel='icon' href="./img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        include('./connect/connect.php');
    ?>
        <div class='org_site'>
            <?php
                include('./includes/topo/topo2.php');
            ?>
        <div class='titulo'>
            Imagens criadas na plataforma
        </div>
    </div>
    <script type='module' src='./js/node_modules/jimp/browser/lib/jimp.js'></script>
    <script type='module' src='./js/img.js'></script>
</body>
</html>