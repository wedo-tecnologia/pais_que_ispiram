var load = document.querySelector("#load");
var button_file = document.querySelector('#b_file');
var button_save = document.querySelector('#b_save');
var save = document.querySelector('#save');
var link_save = document.querySelector('#link_save');
var file = document.querySelector('#file');
var m_molduras = document.querySelectorAll('.moldura');
var molduras = document.querySelectorAll('.m_img');
var img = document.querySelector('#img_edit');
var img_or = null;

/*
Jimp.read(image).then((im) => {
    im.quality(60);
    im.getBase64(Jimp.AUTO,(err,src) => {
    img.src = src;
});
*/

function Load() {
    load.classList.remove('inv');
    load.classList.add('load')
}

function noLoad() {
    load.classList.add('inv');
    load.classList.remove('load')
}

molduras.forEach((item) => {
    item.addEventListener('click',() => {
        Load();
        molduras.forEach((i) => {
            if(i.classList.contains('s_img')){
                i.classList.remove('s_img');    
            }
        });
        item.classList.add('s_img');
        Jimp.read(item.src).then((im2) => {
            Jimp.read(img_or).then((im1) => {
                var {width,height} = im1['bitmap'];
                console.log(width,height);
                im2.resize(width,height);
                im2.quality(60);
                im1.blit(im2,0,0);
                if(height > width){
                    if(height >= 3000 && height < 6000){
                        im1.rotate(-90);
                    }
                    else if(height >= 5000){
                        im1.rotate(-270);
                    }
                }
                im1.quality(60);
                im1.getBase64(Jimp.AUTO,(err,src) => {
                    img.src = src;
                });
            });
        });
        setTimeout(()=>{noLoad();},2000);
    });
});

button_file.addEventListener('click',() => {
    file.click();
});

window.addEventListener("DOMContentLoaded", () => {
    file.addEventListener("change",async () => {
        Load();
        molduras.forEach((i) => {
            if(i.classList.contains('s_img')){
                i.classList.remove('s_img');    
            }
        });
        var aq = file.files.item(0);
        var read = new FileReader();
        read.readAsDataURL(aq);
        read.onload = (event) => {
            var image = event.target.result;
            img.src = image;
            img_or = img.src;
        }
        button_save.classList.remove('inv')
        button_save.classList.add('b_save')
        setTimeout(()=>{noLoad();},2000);
    });
});

setInterval(() => {
    var arq = file.files.item(0);
    if(arq != "" && arq != " " && arq != null){
        button_file.style = "background:var(--cor_3);box-shadow:4px 4px 10px 2px var(--cor_3_sombra);border-style:none;";
        m_molduras.forEach((item) => {
            item.classList.remove('inv');
        });
        button_save.classList.remove('inv');
        button_save.classList.add('b_save');
        link_save.download = "img_edit.jpg";
        link_save.href = img.src;
    }
    else{
        button_file.style = "background:var(--cor_1);box-shadow:4px 4px 10px 2px var(--cor_1_sombra);border-style:none;";
        img_or = null;
        img.src= '';
        molduras.forEach((i) => {
            if(i.classList.contains('s_img')){
                i.classList.remove('s_img');    
            }
        });
        m_molduras.forEach((item) => {
            item.classList.add('inv');
        });
        button_save.classList.add('inv');
        button_save.classList.remove('b_save');
        link_save.download = null;
        link_save.href = null;
    }
},500);