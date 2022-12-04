//Formulario de consulta

formularioBuscar.addEventListener('submit', (e)=>{
    
    e.preventDefault()

    const data = new FormData(formularioBuscar)

    fetch('../controller/buscarProcesos.php', {
        method: 'POST',
        body: data
    }) .then( res => res.json())
        .then( data => {
            if(data === 'error'){
                respuesta.innerHTML = `
                <div class="alerta alerta__error">
                    Ocurrio un error
                </div>
                `
            }else{
                tabla.innerHTML = `${data}`
            }
        } )
})

function editar(id){
    window.location.href = "../controller/buscarProceso.php?id="+id 
}