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
    <title>Ela Dra. Ângela 4410</title>
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
            Edição
        </div>
        <div class='select_file'>
            <button id='b_file'>Selecionar arquivo</button>
            <input type='file' class='inv' id='file' accept='image/*' required>
        </div>
        <div class='im'>
            <img src id='img_edit'>
        </div>
        <div class="btn_icone_girar_foto">
            <img src="img/girar-foto.svg">
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
        <div class='inv' id='b_save'>
            <a id='link_save'><button id='save'>Save</button></a>
        </div>
        <div>
            <?php
                if(isset($_FILES['f_img'])){
                    $file = $_FILES['f_img'];
                    $nome_file = uniqid();
                    $dir = "uploads/{$nome_file}.jpg";
                    $con -> query("insert into img_edit(dir) values('{$dir}')");
                    move_uploaded_file($file['tmp_name'],'./'.$dir);
                }
            ?>
        </div>
    </div>
    <div class='inv' id='load'>
        Loading...
        <img src='./img/load.gif'>
    </div>
    <script type='module' src='./js/node_modules/jimp/browser/lib/jimp.js'></script>
    <script type='module' src='./js/img.js'></script>
</body>
</html>