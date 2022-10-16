<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./css/adm.css'>
    <link rel='icon' href="../img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        include('../process/very.php');
    ?>
    <div class='org_site'>
        <div class='titulo'>
            Gestão do site<button id='sair'>Sair</button>
        </div>
        <div class='add_moldura'>
            <div class='campo'>
                <button id='b_add_mod'>Adicionar</button>
            </div>
        </div>
            <input type='file' id='file_moldura' accept='image/*' max-size='10' required hidden>
        <div class='titulo'>
            Lista de molduras
        </div>
        <div class='molduras' id='molduras'></div>
        <div class='titulo'>
            Lista de imagens
        </div>
        <div class='image_edits' id='edits'>
        </div>
    </div>
    <?php
        include('../includes/scripts2.php');
    ?>
    <script src='./js/adm.js'></script>
</body>
</html>