function ValidarEstudiantes() {
    let identificacion  = document.getElementById('identificacion').value
    let nombres         = document.getElementById('nombres').value
    let apellidos       = document.getElementById('apellidos').value
    let email           = document.getElementById('email').value
    let telefono        = document.getElementById('telefono').value
    let direccion        = document.getElementById('direccion').value
    let genero        = document.getElementById('genero').value

    let mensajes=''
    
    if(telefono=='')    mensajes +='<li>Debes agregar un numero de telefono</li>'
    if(email=='')       mensajes +='<li>Debes agregar un correo electronico</li>'
    if(nombres=='')     mensajes +='<li>Debes agregar tus nombres</li>'
    if(apellidos=='')   mensajes +='<li>Debes agregar tus apellidos</li>'
    if(identificacion=='')      mensajes +='<li>Debes agregar una identificacion</li>'
    if(direccion=='')      mensajes +='<li>Debes agregar una direccion de residencia</li>'
    if(genero=='')      mensajes +='<li>Debes agregar un genero</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.forestudiantes.submit()
    }
    
}

function ValidarMaterias() {
    let nombre    = document.getElementById('nombre').value
    let jornada    = document.getElementById('jornada').value
    let profesor    = document.getElementById('nombre').value
    let creditos    = document.getElementById('creditos').value
    let mensajes=''
    
    if(nombre=='')   mensajes +='<li>Debes ingresar nombre de la materia</li>'
        if(jornada=='')   mensajes +='<li>Debes ingresar una jornada</li>'
            if(profesor=='')   mensajes +='<li>Debes ingresar nombre del profesor</li>'
                if(creditos=='')   mensajes +='<li>Debes ingresar la cantidad de creditos</li>'

    if(mensajes!=''){
        document.getElementById('mensaje').innerHTML = `<div class='alert alert-danger' role='alert'> ${mensajes} </div>`
    }else{
        document.formateria.submit()
    }
    
}