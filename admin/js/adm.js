var b_select = document.querySelector('#b_mod');
var b_env = document.querySelector('#b_add_mod');
var f_moldura = document.querySelector('#moldura');
var env = document.querySelector('#b_env');

b_select.addEventListener('click',()=>{
    f_moldura.click();
});

b_env.addEventListener('click',()=>{
    if(f_moldura.files.item(0) == null || f_moldura.files.item(0) == '' || f_moldura.files.item(0) == ' ') {
        window.alert('Selecione um arquivo');
    }
    env.click();
});