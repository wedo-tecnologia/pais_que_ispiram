<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/icon.png">
    <link rel="stylesheet" type="text/css" href="./css/config.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Professor FACIT, a nossa inspiração - Faculdade FACIT</title>
</head>
<body>
    <div class="main_header">
        <header class="main_header_content">
            <div class="logo">
                <img src="images/logo.png" alt="Faculdade FACIT" title="Faculdade FACIT">
            </div>
            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house"></i>Início</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-bookmark"></i>Termos de uso</a></li>
                </ul>
            </nav>

            <nav class="main_header_content_menu_mobile">
                <ul>
                    <li><span class="main_header_content_menu_mobile_obj fa-solid fa-bars icon-notext"></span>
                        <ul class="main_header_content_menu_mobile_sub ds_none">
                            <li><a href="#"><i class="fa-solid fa-house"></i>Início</a></li>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-bookmark"></i>Termos de uso</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <main class="main_body">
        <div class="main_body_content">
            <header class="main_header_title">
                <h1>Participe conosco da nossa campanha em homenagem aos professores pelo seu dia!</h1>
            </header>
            <section class="main_section">
                <article class="main_article_header">
                    <div class="article_img">
                        <img src="images/1665837314.png" alt="Professor FACIT, a nossa inspiração" title="Professor FACIT, a nossa inspiração">
                    </div>
                    <div class="article_content">
                        <header>
                            <h1>Vamos demonstrar o quanto cada professor é especial.</h1>
                        </header>
                        <p class="main_text">Como? Enviando uma foto e em seguida, escolhendo a moldura que deseja. Depois, é só compartilhar nas redes sociais. Afinal, os professores são a nossa inspiração.</p>
                        <div class="main_button">
                            <p><a class="button" href="./edit_img.php"><i class="fa-solid fa-image"></i>Clique aqui e crie a sua homenagem</a></p>
                        </div>
                    </div>
                </article>
                <article class="main_article_img">
                    <header id='numb_img'></header>
                    <div class="main_article_content_img" id='imgs'></div>
                </article>
            </section>
        </div>
    </main>
    <footer class="main_footer">
        <div class="main_footer_content">
            <header>
                <div class="logo_footer">
                    <a href="/"><img src="images/logo2.png" alt="Faculdade FACIT" title="Faculdade FACIT"></a>
                </div>
            </header>
        </div>
        <div class="footer_copy">
            <p>© 2022, Faculdade Facit todos os direitos reservados | <a href="https://faculdadefacit.edu.br/politica-de-privacidade/">Políticas de Privacidade</a> | Desenvolvido com ❤ por <a href="https://wedodialogo.com.br/">WeDo Dialogo</a></p>
        </div>
    </footer>
    <?php
        include('./includes/scripts.php');
    ?>
    <script src='./js/index.js'></script>
</body>
</html>