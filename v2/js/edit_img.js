let img = document.querySelector('#img_previw');
let img_or = null;
let rot = false;

$('#select').on('click',()=>{
    document.querySelector('#file_img').click();
});

$('#file_img').on('change',()=>{
    var file = document.querySelector('#file_img').files[0];
    if(file != null && file != ''){
        Swal.fire({
            icon:'success',
            title:'Imagem',
            text:'Estamos carregando a sua imagem, aguarde...',
            showConfirmButton:false,
            timer:5000
        });
        var load = new FileReader();
        load.readAsDataURL(file);
        load.onload = async (event) => {
            Jimp.read(event.target.result).then(async (i) => {
                var {width,height,data} = i['bitmap'];
                try {
                    if(i['bitmap']['exifBuffer'].length > 10000){
                        rot = true;
                        await i.rotate(270);
                    }
                    else{
                        rot = false;
                    }
                }
                catch (erro) {}   
                await i.resize(1000,1000);
                await i.quality(60)
                await i.getBase64(Jimp.AUTO,(err,src) => {
                    img.src = src;
                    img_or = src;
                });
            });
        };
    }
    else {
        img_or = null;
    }
});

$('#girar').on('click',() => {
    Swal.fire({
        icon:'success',
        title:'Imagem',
        text:'Estamos processando a edição da sua imagem...',
        showConfirmButton:false,
        timer:5000
    });
    Jimp.read(img_or).then((item) => {
        item.resize(1000,1000);
        if(rot == true){
            item.rotate(180);
        }
        else{
            item.rotate(90);
        }
        item.getBase64(Jimp.AUTO,(err,src) => {
            img_or = src;
        });
    });
    Jimp.read(img.src).then((item) => {
        item.resize(1000,1000);
        if(rot == true){
            item.rotate(180);
        }
        else{
            item.rotate(90);
        }
        item.getBase64(Jimp.AUTO,(err,src) => {
            img.src = src;
        });
    });
});

$.ajax({
    url:'./process/molduras.php',
    success:(data)=>{
        var conteudo = ''
        data.forEach((item)=>{
            conteudo = conteudo + `<img src='${item['dir']}' id='mold_img_${item['id']}'>`;
        });
        $('#molduras_viw').html(conteudo);
        data.forEach((item)=>{
            $(`#mold_img_${item['id']}`).on('click',() => {
                Swal.fire({
                    icon:'success',
                    title:'Imagem',
                    text:'Estamos processando a edição da sua imagem...',
                    showConfirmButton:false,
                    timer:5000
                });
                Jimp.read(document.querySelector(`#mold_img_${item['id']}`).src).then((im2) => {
                    Jimp.read(img_or).then((im1) => {
                        im2.resize(1000,1000);
                        im2.quality(60);
                        im1.blit(im2,0,0);
                        im1.quality(60);
                        if(rot == true){
                            im1.rotate(270);
                        }
                        im1.getBase64(Jimp.AUTO,(err,src) => {
                            img.src = src;
                        });
                    });
                });
            })
        });
    }
});

$('#salve').on('click',()=>{
    try{
        var f = new FormData();
        var byteCharacters = atob(img.src.replace('data:image/jpeg;base64,',''));
        var byteNumbers = new Array(byteCharacters.length);
        for (let i = 0; i < byteCharacters.length; i++) {
            byteNumbers[i] = byteCharacters.charCodeAt(i);
        }
        var byteArray = new Uint8Array(byteNumbers);
        f.append('img',new Blob([byteArray], {type:"image/jpg"}));
        $.ajax({
            url:'./process/add_img.php',
            type:'POST',
            processData:false,
            contentType:false,
            data:f,
            success:() => {
                Swal.fire({
                    icon:'success',
                    title:'Imagem',
                    text:'Sua imagem foi salva com sucesso e o download foi iniciado...',
                    showConfirmButton:false,
                    timer:5000 
                }).then(()=>{
                    location.href='/';
                });
            },
            error:(erro) => {
                Swal.fire({
                    icon:'error',
                    title:'!Ops...',
                    text:erro['statusText'],
                    showConfirmButton:false,
                    timer:5000 
                });
            }
        });
    }
    catch(erro){
        Swal.fire({
            icon:'error',
            title:'!Ops...',
            text:'Erro ao salvar a imagem! A um erro no encode da imagem que você selecionou',
            showConfirmButton:false,
            timer:5000 
        });
    }
})

setInterval(() => {
    var file = document.querySelector('#file_img').files[0];
    var edit = document.querySelector('#viw_edit');
    var moldura = document.querySelector('#viw_moldura');
    var save = document.querySelector('#salve_viw');
    var link = document.querySelector('#link_save');
    if(file != null && file != ''){
        edit.classList.remove('inv')
        edit.classList.add('article_img');
        moldura.classList.remove('inv')
        moldura.classList.add('main_article_img');
        save.classList.remove('inv')
        save.classList.add('article_content');
        link.download = 'img_edit.jpg';
        link.href = img.src;
    }
    else {
        edit.classList.add('inv')
        edit.classList.remove('article_img');
        moldura.classList.add('inv')
        moldura.classList.remove('main_article_img');
        save.classList.add('inv')
        save.classList.remove('article_content');
        link.download = null;
        link.href = null;
        img.src='';
    }
},1000);