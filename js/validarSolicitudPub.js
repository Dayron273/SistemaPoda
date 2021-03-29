var formulario = document.getElementById('formularioa');

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    var datos = new FormData(formulario);
    fetch('Funciones/registrarSolPub.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data =>{
            console.log(data); 
            if(data == 'Exceso'){
                window.alert("Uno de los archivos tiene un peso mayor al permitido");
            }else if(data == 'Error'){
                window.alert("Se produjo un error al realizar tu solicitud");
            }else if(data == 'Correcto'){
                window.alert("Se ha enviado la solicitud con éxito");
                location.reload();
            }
        })
})