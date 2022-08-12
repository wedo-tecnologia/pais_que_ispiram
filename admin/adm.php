<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css/config.css'>
    <link rel='stylesheet' type='text/css' href='../includes/topo/topo.css'>
    <link rel='stylesheet' type='text/css' href='./css/adm.css'>
    <link rel='icon' href="../img/icon.png">
    <title>Pais que ispiram</title>
</head>
<body>
    <?php
        include('../connect/connect.php');
    ?>
    <div class='org_site'>
        <?php
            include('../includes/topo/topo.php');
            if(isset($_FILES['moldura'])){
                $file = $_FILES['moldura'];
                $tp = explode('.',$file['name']);
                $tipo_file = $tp[sizeof($tp)-1];
                $nome_file = uniqid();
                $dir = "uploads/{$nome_file}.{$tipo_file}";
                $con -> query("insert into molduras(dir) values('{$dir}')");
                move_uploaded_file($file['tmp_name'],"../".$dir);
            }
            else if(isset($_POST['del_moldura'])){
                $id = strip_tags($con -> real_escape_string($_POST['del_moldura']));
                $dir = (($con -> query("select dir from molduras where id = {$id}")) -> fetch_assoc())['dir'];
                unlink('../'.$dir);
                $con -> query("delete from molduras where id = {$id}");
            }
            else if(isset($_POST['del_image'])){
                $id = strip_tags($con -> real_escape_string($_POST['del_image']));
                $dir = (($con -> query("select dir from img_edit where id = {$id}")) -> fetch_assoc())['dir'];
                unlink('../'.$dir);
                $con -> query("delete from img_edit where id = {$id}");
            }
        ?>
        <div class='titulo'>
            Gestão do site
        </div>
        <div class='add_moldura'>
            <div class='campo'>
                <button id='b_mod'>Selecione a moldura</button>
            </div>
            <div class='campo'>
                <button id='b_add_mod'>Adicionar</button>
            </div>
        </div>
        <form action='adm.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='moldura' class='inv' id='moldura' accept='image/*' max-size='10' required>
            <button class='inv' id='b_env' type='submit'></button>
        </form>
        <div class='titulo'>
            Lista de molduras
        </div>
        <div class='molduras'>
            <?php
                $r = $con -> query("select * from molduras");
                while($data = ($r -> fetch_assoc())){
                    echo "
                    <div class='moldura'>
                        <div class='img_moldura'>
                            <img src='../{$data['dir']}'>
                        </div>
                        <div class='button_moldura'>
                            <form action='adm.php' method='POST'>
                                <button type='submit' name='del_moldura' value='{$data['id']}'>Deletar</button>
                            </form>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
        <div class='titulo'>
            Lista de imagens
        </div>
        <div class='image_edits'>
            <?php
                $r = $con -> query("select * from img_edit");
                while($data = ($r -> fetch_assoc())){
                    echo "
                    <div class='img_edit_all'>
                        <div class='img_edit'>
                            <img src='../{$data['dir']}'>
                        </div>
                        <div class='button_moldura'>
                            <form action='adm.php' method='POST'>
                                <button type='submit' name='del_image' value='{$data['id']}'>Deletar</button>
                            </form>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
    <script type='module' src='./js/adm.js'></script>
</body>
</html>