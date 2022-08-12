var b_select = document.querySelector('#b_mod');
var b_env = document.querySelector('#b_add_mod');
var f_moldura = document.querySelector('#moldura');
var env = document.querySelector('#b_env');

if(localStorage.getItem('login') == 'ok'){
    window.alert('Seja bem vindo');
}
else {
    location.href='/';
}

b_select.addEventListener('click',()=>{
    f_moldura.click();
});

b_env.addEventListener('click',()=>{
    if(f_moldura.files.item(0) == null || f_moldura.files.item(0) == '' || f_moldura.files.item(0) == ' ') {
        window.alert('Selecione um arquivo');
    }
    env.click();
});

setInterval(()=>{
    if(f_moldura.files.item(0) == null || f_moldura.files.item(0) == '' || f_moldura.files.item(0) == ' '){
        b_select.style = "background:var(--cor_1);box-shadow:0 0 10px 2px var(--cor_1_sombra);";
    }
    else {
        b_select.style = "background:var(--cor_3);box-shadow:0 0 10px 2px var(--cor_3_sombra);";
    }
},500);