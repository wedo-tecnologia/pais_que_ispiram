$.ajax({
    url:'../process/molduras.php',
    success:(data) => {
        var conteudo = '';
        data.forEach((item)=>{
            conteudo = conteudo + `<div class='moldura'><div class='img_moldura'><img src='../${item['dir']}'></div><div class='button_moldura'><button id='mold_${item['id']}'>Deletar</button></div></div>`;
        });
        $('#molduras').html(conteudo);
        data.forEach((item)=>{
            $(`#mold_${item['id']}`).on('click',()=>{
                var f = new FormData();
                f.append('id',item['id'])
                $.ajax({
                    url:'../process/del_moldura.php',
                    type:'POST',
                    processData:false,
                    contentType:false,
                    data:f,
                    success:()=>{
                        Swal.fire({
                            icon:'success',
                            title:'Moldura',
                            text:'Moldura removida com sucesso!',
                            showConfirmButton:false,
                            timer:3000
                        }).then(()=>{
                            location.reload();
                        });
                    }
                });
            });
        });
    }
});

$.ajax({
    url:'../process/img_edits.php',
    success:(data) => {
        var conteudo = '';
        data.forEach((item)=>{
            conteudo = conteudo + `<div class='img_edit_all'><div class='img_edit'><img src='../${item['dir']}'></div><div class='button_moldura'><button id='img_edit_${item['id']}'>Deletar</button></div></div>`;
        });
        $('#edits').html(conteudo);
        data.forEach((item)=>{
            $(`#img_edit_${item['id']}`).on('click',()=>{
                var f = new FormData();
                f.append('id',item['id'])
                $.ajax({
                    url:'../process/del_img.php',
                    type:'POST',
                    processData:false,
                    contentType:false,
                    data:f,
                    success:()=>{
                        Swal.fire({
                            icon:'success',
                            title:'Imagem',
                            text:'Imagem removida com sucesso!',
                            showConfirmButton:false,
                            timer:3000
                        }).then(()=>{
                            location.reload();
                        });
                    }
                });
            });
        });
    }
});

$('#b_add_mod').on('click',()=>{
    document.querySelector('#file_moldura').click();
});

$('#file_moldura').on('change',()=>{
    var file = document.querySelector('#file_moldura').files[0];
    if(file != null || file != ''){
        var f = new FormData();
        f.append('moldura',file);
        $.ajax({
            url:'../process/add_moldura.php',
            type:'POST',
            processData:false,
            contentType:false,
            data:f,
            success:() => {
                Swal.fire({
                    icon:'success',
                    title:'Moldura',
                    text:'A moldura foi adicionada com sucesso!',
                    showConfirmButton:false,
                    timer:3000
                }).then(()=>{
                    location.reload();
                });
            },
            error:(erro) => {
                console.log(erro);
            }
        });
    }
});

$('#sair').on('click',()=>{
    $.ajax({
        url:'../process/sair.php',
        success:()=>{
            location.reload();
        }
    });
})