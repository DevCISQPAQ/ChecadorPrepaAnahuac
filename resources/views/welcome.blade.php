<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checador Prepa Anahuac QRO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('/img/AORANGE.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/AORANGE.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body style="font-family: 'Roboto', sans-serif; font-style: italic;" class="min-h-screen flex flex-col bg-gray-200">

    <header>
        <div class="banner">
            <img src="{{ asset('img/aorangew_1.png') }}" alt="Logo" class="h-auto w-15 p-1">
        </div>
    </header>

    <main class="flex-grow">
        <div class="pb-8">
            <div class="banner-time">
                <div id="datetime" class="text-date"></div>
                <div id="timeonly" class="text-time"></div>
            </div>
            <h1 class="titleHome">Registra tu asistencia</h1>
        </div>

        <section class="bg-gray-200">
            <div class="content-scanResult">
                <!-- Div lector QR -->
                <div class="content-QR">
                    <div id="reader" class="w-full h-auto"></div>
                    <p class="text-center text-xs font-bold text-[#E51817] 
                    bg-gray-100 rounded-b-md px-4 py-0.5 mt-0 ">
                        ESCANEA AQUÍ TU CÓDIGO QR
                    </p>
                </div>
                <!-- Div de resultado -->
                <div id="cont_result" class="content-Result">
                    <!-- Imagen del empleado -->
                    <div class="flex justify-center mb-2 h-auto">
                        <div class="h-auto w-35 2xl:w-45 2xl:h-auto overflow-hidden rounded-xl">
                            <img id="foto-empleado"
                                src="{{ asset('img/AORANGE.png') }}"
                                alt="Foto empleado"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>

                    <h2 class="text-result" id="nombre-empleado">
                    </h2>
                    <div id="result" class="mt-auto w-full rounded-xl">
                        <p class="text-center font-bold text-lg text-gray-700"> </p>
                    </div>
                </div>
            </div>

            <div class="pt-6 w-full flex justify-center">
                <div>
                    <h1 class="text-numEmpl">
                        Si no cuenta con código QR ingrese su numero de empleado
                    </h1>
                    <div class="flex gap-3 pt-4">
                        <input id="numEmpleadoInput" type="number" class="imput-numEmp" placeholder="Escribe tu numero de empleado" />
                        <button id="btnNumEmp" class="btn-numEmp" type="button">
                            Ingresar
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <h2 class=" text-gray-600/50 text-center pb-1 italic">&copy; {{ date('Y') }} Desarrollado e implementado por el Depto. de Tecnologías de la Información.</h2>
    </footer>
    <!-- Modal confirmación salida -->
    <div id="modalConfirmSalida" class="hidden fixed inset-0 justify-center items-center z-50 bg-black/50">
        <div class="bg-white p-6 rounded-lg max-w-md w-11/12 text-center shadow-lg">
            <p id="mensajeConfirmSalida" class="mb-6 text-lg font-semibold"></p>
            <button id="btnConfirmarSalida" class="px-6 py-2 bg-green-600 text-white rounded mr-4 hover:bg-green-700 transition">Sí</button>
            <button id="btnCancelarSalida" class="px-6 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">No</button>
        </div>
    </div>

    <!-- Loader Spinner -->
    <div id="loader" style="display: none; position: fixed; top: 50%; left: 50%;
transform: translate(-50%, -50%); z-index: 9999;">
        <div class="w-16 h-16 border-4 border-[#ff5900] border-dashed rounded-full animate-spin"></div>
    </div>

</body>

</html>