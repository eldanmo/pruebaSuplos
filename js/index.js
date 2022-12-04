let tamanoPantalla = window.innerWidth
const formulario = document.getElementById('formulario')
const busqueda = document.getElementById('busqueda')
const respuesta = document.getElementById('respuesta')
const fieldset = document.getElementsByTagName('fieldset')
const openModal = document.getElementById('openModal')
const modal = document.getElementById('modal')
const closeModal = document.getElementById('close')
const cerrarModal = document.getElementById('cerrar')

siguiente = ()=>{
    const objeto = document.getElementById('objeto').value
    const descripcionAlcance = document.getElementById('descripcionAlcance').value
    const moneda = document.getElementById('moneda').value
    const presupuesto = document.getElementById('presupuesto').value
    const actividad = document.getElementById('actividad').value

    if(objeto === '' || descripcionAlcance === '' || moneda === '' || presupuesto === '' || actividad === ''){
        respuesta.innerHTML = `
                <div class="alerta alerta__error">
                    Todos los campos son obligatorios
                </div>
                `
        setTimeout(() => {
            respuesta.innerHTML = ''
        }, 3000)
        return
    }

    if(tamanoPantalla <= 767) {
    fieldset[0].style.display = "none"
    fieldset[1].style.display = "block"
    }else{
        fieldset[0].style.display = "none"
        fieldset[1].style.display = "grid"
    }
}
previo = ()=>{
    if(tamanoPantalla <= 767) {
    fieldset[0].style.display = "block"
    fieldset[1].style.display = "none"
    }else{
        fieldset[0].style.display = "grid"
        fieldset[1].style.display = "none"
    }
}

formulario.addEventListener('submit', (e)=>{
    
    e.preventDefault()

    const fechaInicio = document.getElementById('fechaInicio').value
    const horaInicio = document.getElementById('horaInicio').value
    const fechaCierre = document.getElementById('fechaCierre').value
    const horaCierre = document.getElementById('horaCierre').value

    if( fechaInicio === ''
        || horaInicio === ''
        || fechaCierre === ''
        || horaCierre === '' ){
        respuesta1.innerHTML = `
                <div class="alerta alerta__error">
                    Todos los campos son obligatorios
                </div>
                `
        setTimeout(() => {
            respuesta1.innerHTML = ''
        }, 3000)
        return
    } 

    const datas = new FormData(formulario)

    fetch('../controller/insertarProceso.php', {
        method: 'POST',
        body: datas
    }) .then( res => res.json())
        .then( data => {
            if(data === 'error'){
                respuesta1.innerHTML = `
                <div class="alerta alerta__error">
                    Ocurrio un error
                </div>
                `
            }else{
                respuesta1.innerHTML = `
                <div class="alerta alerta__success">
                    Proceso / Evento creado correctamente
                </div>
                `
                document.getElementById('formulario').reset()
                setTimeout(() => {
                    respuesta1.innerHTML = ''
                    previo()
                }, 3000)
            }
        } )
})

openModal.onclick = () => {
    modal.style.visibility = 'visible'
}

closeModal.onclick = () => {
    modal.style.visibility = 'hidden'
}
cerrarModal.onclick = () => {
    modal.style.visibility = 'hidden'
}

/*modal.onclick = () => {
    modal.style.visibility = 'hidden'
}*/

busqueda.addEventListener('submit', (e)=>{

    e.preventDefault()

    const descripcionActividad = document.getElementById('descripcionActividad').value

    if(descripcionActividad === '' || descripcionActividad.length <3){
        respuesta2.innerHTML = `
                <div class="alerta alerta__error">
                    Debes ingresar un criterio de busqueda mayor o igual a 3 digitos
                </div>
                `
        setTimeout(() => {
            respuesta2.innerHTML = ''
        }, 3000)
        return
    }

    const datos = new FormData(busqueda)

    fetch('../controller/consultarActividad.php', {
        method: 'POST',
        body: datos
    }) .then( res => res.json())
        .then( data => {
            if(data === 'error'){
                respuesta2.innerHTML = `
                <div class="alerta alerta__error">
                    Ocurrio un error
                </div>
                `
                setTimeout(() => {
                    respuesta2.innerHTML = ''
                }, 3000)
            }else{
                tabla.innerHTML = `${data}`
            }
        } )
    
})

seleccionarActividad = (idActividad)=>{
    actividad.value = idActividad
    modal.style.visibility = 'hidden'
}