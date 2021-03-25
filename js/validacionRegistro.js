var formulario = document.getElementById('contacto');

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    var datos = new FormData(formulario);
    fetch('Funciones/registrarUsuario.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data =>{
            console.log(data); 
            if(data == 'exito'){
                window.alert("El usuario se creo correctamente");
            }else if(data == 'errorCorre'){
                window.alert("Los correos no coinciden");
            }else if(data == 'errorPass'){
                window.alert("Las contraseñas no coinciden");
            }
        })
})