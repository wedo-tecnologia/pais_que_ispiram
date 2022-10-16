$.ajax({
    url:'./process/count_img.php',
    success:(data) => {
        $('#numb_img').html(`<h2>Imagens criadas na plataforma:<br><i class="fa-solid fa-star"></i>${data}<i class="fa-solid fa-star"></i></h2>`);
    }
});

$.ajax({
    url:'./process/img_edits.php',
    success:(data) => {
        var conteudo = '';
        data.forEach((item)=>{
            conteudo = conteudo + `<img src='${item['dir']}'>`;
        });
        $('#imgs').html(conteudo);
    }
});
