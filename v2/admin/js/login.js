$('#login').on('submit',(e)=>{
    e.preventDefault();
    $.ajax({
        url:'/process/login.php',
        type:'POST',
        data:$('#login').serialize(),
        success:()=>{
            Swal.fire({
                icon:'success',
                title:'Login!',
                text:'Login bem sucedido!',
                showConfirmButton:false,
                timer:3000
            }).then(()=>{
                location.href='/admin/adm.php';
            });
        },
        error:(erro)=>{
            Swal.fire({
                icon:'error',
                title:'Ops...!',
                text:erro['statusText'],
            })
        }
    });
});