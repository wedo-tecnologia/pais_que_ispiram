<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./css/config.css'>
    <link rel='stylesheet' type='text/css' href='./includes/topo/topo.css'>
    <link rel='stylesheet' type='text/css' href='./css/edit_img.css'>
    <link rel='icon' href="./img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        include('./connect/connect.php');
    ?>
    <div class='org_site'>
        <?php
            include('./includes/topo/topo3.php');
        ?>
        <div class='titulo'>
            Edição
        </div>
        <div class='select_file'>
            <button id='b_file'>Selecionar arquivo</button>
            <input type='file' name='f_img' class='inv' id='file' accept='image/*' max-size='10' required>
        </div>
        <div class='im'>
            <img src id='img_edit'>
        </div>
        <div class='molduras'>
            <?php
                $r = $con -> query('select * from molduras');
                while($data = mysqli_fetch_assoc($r)){
                    echo "
                    <div class='moldura inv'>
                        <img src='{$data['dir']}' class='m_img'>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
    <div class='inv' id='b_save'>
        <a id='link_save'><button id='save'>Save</button></a>
    </div>
    <div class='inv' id='load'>
        Loading...
        <img src='./img/load.gif'>
    </div>
    <script type='module' src='./js/node_modules/jimp/browser/lib/jimp.js'></script>
    <script type='module' src='./js/img.js'></script>
</body>
</html>