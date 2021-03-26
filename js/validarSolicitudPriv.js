var formulario = document.getElementById('formularioa');

formulario.addEventListener('submit',function(e){
    e.preventDefault();
    var datos = new FormData(formulario);
    fetch('Funciones/registrarsolPriv.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data =>{
            console.log(data); 

        })
})