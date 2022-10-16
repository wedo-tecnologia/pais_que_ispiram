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
               <a href="/"><img src="images/logo.png" alt="Faculdade FACIT" title="Faculdade FACIT"></a>
            </div>
            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="/"><i class="fa-solid fa-house"></i>Início</a></li>
                    <li><a href="https://faculdadefacit.edu.br/politica-de-privacidade/"><i class="fa-sharp fa-solid fa-bookmark"></i>Termos de uso</a></li>
                </ul>
            </nav>
            <nav class="main_header_content_menu_mobile">
                <ul>
                    <li><span class="main_header_content_menu_mobile_obj fa-solid fa-bars icon-notext"></span>
                        <ul class="main_header_content_menu_mobile_sub ds_none">
                            <li><a href="/"><i class="fa-solid fa-house"></i>Início</a></li>
                            <li><a href="https://faculdadefacit.edu.br/politica-de-privacidade/"><i class="fa-sharp fa-solid fa-bookmark"></i>Termos de uso</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </div>
    <input type='file' accept='image/*' id='file_img' hidden>
    <main class="main_body">
        <div class="main_body_content">
            <section class="main_section">
                <article class="main_article_header">
                    <div class="inv" id='viw_edit'>
                        <img src="" alt="Professor FACIT, a nossa inspiração" title="Professor FACIT, a nossa inspiração" id='img_previw'>
                        <p>Aqui você pode visualizar o frase escolhida e ajustar a posição da sua foto.</p>
                        <div class="main_button_rotate">
                            <p class="button ct_1" id='girar'><i class="fa-solid fa-arrows-rotate"></i>Girar foto</p>
                        </div>
                    </div>
                    <div class="article_content">
                        <div class="article_content_text">
                            <p class="main_text">Escolha a moldura, selecione sua melhor foto e demonstre seu respeito pelos professores.<br><br>
                                <b>Ah, e o melhor, você pode fazer quantas vezes quiser.</b>
                            </p>
                            <div class="main_button">
                                <div class="main_button_edit" id='select'>
                                    <p class="button ct_1"><i class="fa-solid fa-image"></i>Clique e selecine<br> a sua melhor foto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="inv" id='viw_moldura'>
                    <div class="main_article_content_img" id='molduras_viw'></div>
                </article>
                <article class='inv' id='salve_viw'>
                    <div class="main_button">
                        <a id='link_save'><div class="main_button_edit" id='salve'>
                            <p class="button ct_1"><i class="fa-solid fa-image"></i>Salvar imagem</p>
                        </div></a>
                    </div>
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
    <script type='module' src='./js/node_modules/jimp/browser/lib/jimp.js'></script>
    <script type='module' src='./js/edit_img.js'></script>
</body>
</html>