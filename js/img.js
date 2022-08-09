var button_file = document.querySelector('#b_file');
var button_env = document.querySelector('#env_file');
var file = document.querySelector('#file');
var img = document.querySelector('#img_edit');
var img_or = null;

/*
Jimp.read(image).then((im) => {
    im.quality(60);
    im.getBase64(Jimp.AUTO,(err,src) => {
    img.src = src;
});
*/

button_file.addEventListener('click',() => {
    file.click();
});

window.addEventListener("DOMContentLoaded", () => {
    file.addEventListener("change",async () => {
        var aq = file.files.item(0);
        var read = new FileReader();
        read.readAsDataURL(aq);
        read.onload = (event) => {
            var image = event.target.result;
            img.src = image;
            img_or = img.src;
        }
    });
});

setInterval(() => {
    var arq = file.files.item(0);
    if(arq != "" && arq != " " && arq != null){
        button_file.style = "background:var(--cor_3);box-shadow:4px 4px 10px 2px var(--cor_3_sombra);border-style:none;";
    }
    else{
        button_file.style = "background:var(--cor_1);box-shadow:4px 4px 10px 2px var(--cor_1_sombra);border-style:none;";
        img_or = null;
        img.src= '';
    }
},500);