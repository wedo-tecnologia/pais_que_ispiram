<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./css/config.css'>
    <link rel='stylesheet' type='text/css' href='./includes/topo/topo.css'>
    <link rel='stylesheet' type='text/css' href='css/fontawesome/css/all.css'>
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
            include('./includes/topo/topo.php');
        ?>
        <div class='intro'>
            <div class='im_intro'>
                <img src='./img/tocantins melhor Filtro Dra ÂngelaTransp.png'>
            </div>
            <div class='texto_into'>
                <div class='titulo'>
                    Pais que inspiram
                </div>
                <div class='texto'>
                    O olhar que fala<br>
                    As ações que modelam<br>
                    As atitudes que transformam<br>
                    O jeito de ser e faz que inspira<br>
                    Pai, é quem faz do cuidado a sua vida…<br>
                    Da sua vida uma inspiração<br>
                    Da sua presença,<br>
                    A construção…<br>
                    O ser, que edifica…<br>
                    Eternizar momentos e reconhecer a importância de um pai é o que desejamos.<br>
                    Aqui, criamos um espaço para você homenagear seu pai.<br>
                    Carregue sua foto na moldura escolhida, salve e compartilhe em suas redes sociais.<br>
                    E se quiser, imprima e presenteie.<br>
                    Afinal, país que inspiram, aqui tem!<br>
                </div>
                <div class='n_img'>
                    <?php
                        $r = $con -> query('select * from img_edit');
                        $num = 0;
                        while($data = mysqli_fetch_assoc($r)){
                            $num = $num + 1;
                        }
                        echo "<div class='n_img_t'>{$num} Fotos</div>";
                    ?>
                </div>
                <div class='b_c_img'>
                    <a href='./edit_img.php'><button class='button_intro'>Criar imagem</button></a>
                </div>
            </div>
        </div>
        <div class='titulo'>
            Imagens criadas na plataforma
        </div>
        <div class='image_edits'>
            <?php
                $r = $con -> query('select * from img_edit');
                while($data = mysqli_fetch_assoc($r)){
                    echo "
                    <div class='img_edit'>
                        <img src='./{$data['dir']}'>
                    </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>