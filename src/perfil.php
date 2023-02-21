<!doctype html>
<html>
<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }else if($_SESSION['id'] == 1){
        header("Location: adm_menu_inicio.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="/dist/output.css" rel="stylesheet">-->
    <link rel="stylesheet" href="styles/general.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <aside class="shadow-md fixed top-0 bottom-0 lg:left-0 pl-5 overflow-y-auto bg-white flex flex-col justify-between">
        <div>
            <div class="flex justify-center pt-3 pb-16 pr-5 pt-6">
                <img src="svg/logo_baroja.svg" alt="IES PÍO BAROJA">
            </div>
            <p>MENÚ</p>
            <div class="mt-5">
                <a href="menu_inicio.html" class="duration-300 flex items-center font-bold text-sm rounded-l-lg transition ease-in border-4 border-gray-200 border-r-teal-800 bg-gray-200 hover:bg-gray-200 hover:bg-teal-800 hover:border-teal-800 hover:text-white px-4 py-2 flex mb-2">
                    <img src="svg/iconos/inicio_icon_sm.svg" alt="Icono de inicio" class="pr-3"> Inicio</a>
                <a href="" class="duration-300 flex items-center text-sm rounded-l-lg transition ease-in hover:bg-teal-800 hover:text-white px-5 py-3 flex mb-2">
                    <img src="svg/iconos/nueva_incidencia_icon_sm.svg" alt="Icono de nueva incidencia" class="pr-3"> Nueva incidencia</a>
                <a href="#" class="duration-300 flex items-center text-sm rounded-l-lg transition ease-in hover:bg-orange-900 hover:text-white px-5 py-3 flex mb-2">
                    <img src="svg/iconos/incidencias_activas_icon_sm.svg" alt="Icono de incidencias activas" class="pr-3"> Incidencias activas</a>
                <a href="#" class="duration-300 flex items-center text-sm rounded-l-lg transition ease-in hover:bg-pink-900 hover:text-white px-5 py-3 flex mb-2">
                    <img src="svg/iconos/historial_icon_sm.svg" alt="Icono de historial" class="pr-3"> Historial</a>
                <a href="#" class="duration-300 flex items-center text-sm rounded-l-lg transition ease-in hover:bg-blue-900 hover:text-white px-5 py-3 flex mb-2">
                    <img src="svg/iconos/educamadrid_icon_sm.png" alt="Icono de educamadrid" class="pr-3"> Educamadrid</a>
            </div>
        </div>
        <div class="pb-8 pr-8">
            <div class="flex flex-col pl-5">
                <a href="perfil.html" class="flex mb-3 text-sm hover:ml-3 hover:font-semibold duration-300">
                    <img src="svg/iconos/perfil_icon.svg" alt="Icono de usuario" class="mr-2"> Mi perfil</a>
                <a href="index.html" class="flex mb-3 text-sm text-red-500 hover:ml-3 hover:font-semibold duration-300">
                    <img src="svg/iconos/cerrar_sesion_icon.svg" alt="Icono de cerrar sesión" class="mr-2"> Cerrar sesión</a>
            </div>
            <hr class="border mt-4">
            <p class="text-xs mt-4 text-center text-gray-600">DAW &copy;2023</p>
        </div>
    </aside>
    <nav class="bg-white p-5">
        <div class="container mx-auto flex justify-between items-center">
            <h4 class="text-xl font-semibold">Bienvenid@ Raúl</h4>
            <div>
                <div>
                    <img src="" alt="">
                    <div>
                        <p class="text-sm">Raúl Blázquez</p>
                        <p class="text-xs text-gray-600">Profesor</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section id="main-content" class="p-8">
        <div class="container mx-auto">
            <div class="bg-white rounded p-8">
                <div class="flex justify-between items-center flex-wrap">
                    <div>
                        <img src="" alt="">
                        <div>
                        <h2 class="text-xl font-semibold">Raúl Blázquez</>
                        <p class="text-sm text-gray-600">Profesor</p>
                        </div>
                    </div>
                </div>
                <hr class="border my-5">
                <p class="font-semibold mb-1">Nombre: <span class="font-normal">Raúl</span></p>
                <p class="font-semibold mb-1">Apellidos: <span class="font-normal">Blázquez</span></p>
                <p class="font-semibold mb-1">Correo electrónico: <span class="font-normal">raul@educa.madrid.org</span></p>
                <p class="font-semibold mb-1">Contraseña: <span class="font-normal">********</span></p>
                
                <form class="border p-5 mt-16">
                    a
                </form>
            </div>
        </div>
    </section>
    <script src="js/main.js"></script>
</body>

</html>