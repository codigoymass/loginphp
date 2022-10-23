document.getElementById('login-form').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let usuario = document.getElementById('txt_usuario').value;
    let password = document.getElementById('txt_password').value;

    let data = new FormData();
    data.append('usuario', usuario);
    data.append('password', password);

    fetch('login.php', {method: 'POST', body: data})
    .then(rspta => rspta.json())
    .then(data => {

        if(data.error) {
            swal.fire({
                icon: 'error',
                title: data.msg,
                confirmButtonText: 'Aceptar'
            });
        } else {
            location.reload();
        }

    });

});