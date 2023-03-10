addEventListener('DOMContentLoaded', eventos);

const xhr = new XMLHttpRequest();
const xhrSesion = new XMLHttpRequest();

let tituloAnterior = document.title;
window.addEventListener("blur", cambiarTitulo);
window.addEventListener("focus", volverTitulo);

function eventos() {
    // REDIRECCIONES
    try {
        document.getElementById("nuevaIncidencia").addEventListener("click", irNuevaIncidencia);
    } catch (error) {
        console.log("Sin redirigir a Nueva Incidencia");
    }

    try {
        document.getElementById("educamadridIncidencias").addEventListener("click", irEducamadrid);
    } catch (error) {
        console.log("Sin redirigir a EducaMadrid");
    }

    try {
        document.getElementById("incidenciasActivas").addEventListener("click", irIncidenciasActivas);
    } catch (error) {
        console.log("Sin redirigir a Incidencias activas");
    }

    try {
        document.getElementById("historialIncidencias").addEventListener("click", irHistorial);
    } catch (error) {
        console.log("Sin redirigir a Historial");
    }

    try {
        document.getElementById("inicioRespLogo").addEventListener("click", irInicio);
    } catch (error) {
        console.log("Sin redirigir a Inicio modo responsive");
    }
    
    document.getElementById("inicioLogo").addEventListener("click", irInicio);
    document.getElementById("perfilDatos").addEventListener("click", irPerfil);

    // TIEMPO
    mostrarTiempo();

    // CERRAR SESIÓN
    document.getElementById("cerrarSesion").addEventListener("click", peticionCerrarSesion);
}

function cambiarTitulo(){
    tituloAnterior = document.title;
    document.title = "¡No te vayas! Podemos ayudarte 😀";
}

function volverTitulo() {
    document.title = tituloAnterior;
}

function irInicio() {
    window.location.href = "menu_inicio.php";
}

function irNuevaIncidencia() {
    window.location.href = "nueva_incidencia.php";
}

function irIncidenciasActivas() {
    window.location.href = "incidencias_activas.php";
}

function irHistorial() {
    window.location.href = "historial.php";
}

function irEducamadrid() {
    window.location.href = "https://aulavirtual33.educa.madrid.org/ies.piobaroja.madrid/";
}

function irPerfil(){
    window.location.href = "perfil.php";
}

function peticionCerrarSesion(){
    xhr.onreadystatechange = respuestaCerrarSesion;
    xhr.open("POST", "server/cerrar_sesion.php", true);
    xhr.send(null);
}

function respuestaCerrarSesion(){
    if(xhr.readyState == 4 && xhr.status == 200){
        console.log(xhr.responseText);
        let respuestaJson = JSON.parse(xhr.responseText);

        switch(respuestaJson[0].msg){
            case "bien":
                window.location.href = "index.php";
                break;
            case "mal":
                console.log("Error al cerrar sesión");
                break;
        }
    }
}

function mostrarTiempo(){
    const clave = "48d76f5f2a0303eae4f6f047b4a48281";
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=Madrid&units=metric&appid=${clave}`)
        .then(response => response.json())
        .then(json => {
            if(json.cod == '404'){
                document.getElementById("tiempoNum").textContent = `-`;
            }else{
                let iconoTiempoResultado;
                switch (json.weather[0].main) {
                    case 'Clear':
                        let hora = new Date().getHours();
                        if(hora>=20 && hora<=23 || hora>=0 && hora<=6){
                            iconoTiempoResultado = './svg/tiempo/luna.svg';
                        }else{
                            iconoTiempoResultado = './svg/tiempo/soleado.svg';
                        }
                    break;

                    case 'Rain':
                    iconoTiempoResultado = './svg/tiempo/lluvia.svg';
                    break;

                    case 'Snow':
                    iconoTiempoResultado = './svg/tiempo/nieve.svg';
                    break;

                    case 'Clouds':
                    iconoTiempoResultado = './svg/tiempo/nublado.svg';
                    break;

                    case 'Haze':
                    iconoTiempoResultado = './svg/tiempo/niebla.svg';
                    break;

                    default:
                        iconoTiempoResultado = './svg/tiempo/nublado.svg';
                }
                
                document.getElementById("iconoTiempo").setAttribute("src", iconoTiempoResultado);
                document.getElementById("tiempoNum").textContent = `${json.main.temp}º`;
            }
        });
}