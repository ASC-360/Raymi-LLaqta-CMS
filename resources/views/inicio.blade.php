<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido | Raymi LLacta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-r from-black via-black to-orange-800 m-4">
    <h1
        class="bg-gradient-to-r from-orange-500 to-yellow-400 text-center text-5xl mt-10 mb-5 font-medium text-transparent bg-clip-text">
        Raymi LLaqta</h1>
    <div class="flex gap-2 justify-center">
        <a href="{{ route('login.view') }}"
            class="border-2 border-white rounded-[10px] text-white font-medium px-2 py-1 cursor-pointer transition-all duration-150 hover:bg-white hover:text-black items-center flex gap-2"><span
                class="material-symbols-outlined">
                login
            </span>Iniciar
            sesion</a>
        <a href="{{ route('register.view') }}"
            class="border-2 border-white rounded-[10px] text-white font-medium px-2 py-1 cursor-pointer transition-all duration-150 hover:bg-white hover:text-black flex gap-2 items-center"><span
                class="material-symbols-outlined">
                account_circle
            </span>Registrarme</a>
    </div>

    <h1 class="text-white text-3xl text-center my-5 font-medium">Secciones de nuestra web</h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

        <div class="card">
            <div
                class="flex gap-2 items-center font-medium text-2xl bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                <span class="material-symbols-outlined">
                    menu_book
                </span>
                <h1>
                    Historia de Chachapoyas</h1>
            </div>
            <p>Chachapoyas es una ciudad ubicada en la región Amazonas de Perú, y su nombre proviene de la civilización
                Chachapoya, conocida como los "Guerreros de las Nubes". Esta cultura preincaica habitó las zonas
                montañosas y bosques nubosos de la región, desarrollando técnicas arquitectónicas avanzadas.
                Entre sus legados más representativos destaca la fortaleza de Kuélap, un impresionante complejo
                amurallado que alberga construcciones circulares con decoraciones simbólicas. Además, los Chachapoyas
                dejaron numerosos sarcófagos, como los de Karajía, que reflejan sus creencias funerarias y espirituales.
                A pesar de su resistencia, fueron conquistados por los incas en el siglo XV y luego por los españoles en
                el siglo XVI. Sin embargo, su historia y cultura siguen presentes en las tradiciones locales, las
                festividades y los hallazgos arqueológicos.</p>
        </div>

        <div class="card">
            <div
                class="flex gap-2 items-center font-medium text-2xl bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                <span class="material-symbols-outlined">
                    imagesmode
                </span>
                <h1>
                    Galeria de fotos</h1>
            </div>
            <p>La festividad de Raymi Llaqta es una de las celebraciones más representativas de Chachapoyas, un evento
                lleno de color, música y tradición que refleja la identidad cultural de la región.
                En nuestra galería de imágenes, podrás admirar los momentos más emblemáticos de esta festividad, desde
                los desfiles con trajes típicos hasta las vibrantes danzas tradicionales que evocan el pasado ancestral
                de los Chachapoyas.
                También encontrarás fotografías de las calles decoradas, los rituales en honor a los ancestros y la
                alegría de la comunidad participando en las distintas actividades del festival. Cada imagen es un
                testimonio del esfuerzo por preservar la historia y las costumbres de la región.</p>
        </div>

        <div class="card">
            <div
                class="flex gap-2 items-center font-medium text-2xl bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                <span class="material-symbols-outlined">
                    location_on
                </span>
                <h1>
                    Ubicacion</h1>
            </div>
            <p>Chachapoyas se encuentra en la sierra norte de Perú, en el departamento de Amazonas, un destino turístico
                rodeado de montañas, valles y bosques nubosos.
                Para llegar, los visitantes pueden tomar vuelos desde Lima hasta Jaén y luego viajar por carretera en un
                recorrido de aproximadamente cuatro horas. También existen rutas terrestres desde Tarapoto y Chiclayo,
                permitiendo opciones accesibles para viajeros desde distintos puntos del país.
                Su ubicación estratégica hace de Chachapoyas el punto ideal para explorar sitios arqueológicos como
                Kuélap, los mausoleos de Revash y las tumbas de Karajía, además de maravillas naturales como la catarata
                de Gocta, una de las más altas del mundo.</p>
        </div>

        <div class="card">
            <div
                class="flex gap-2 items-center font-medium text-2xl bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                <span class="material-symbols-outlined">
                    3p
                </span>
                <h1>
                    Testimonios</h1>
            </div>
            <p>Aquí, se recopilan relatos de viajeros que han quedado maravillados con la historia, la cultura y la
                naturaleza que caracterizan esta región. Desde quienes han visitado la imponente fortaleza de Kuélap y
                han quedado impresionados por su arquitectura, hasta aquellos que han recorrido los senderos que llevan
                a la catarata de Gocta, experimentando la majestuosidad de su entorno. También se incluyen opiniones
                sobre la festividad de Raymi Llacta, resaltando la emoción y el orgullo con el que los habitantes
                celebran su herencia ancestral, a través de danzas, desfiles y expresiones culturales.</p>
        </div>

    </div>
</body>

</html>
