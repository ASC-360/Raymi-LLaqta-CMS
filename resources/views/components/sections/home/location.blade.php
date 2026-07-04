<section id="location-section" class="section">

    <h3 class="text-4xl font-medium text-center mb-2">
        Ubicación y Cómo Llegar
    </h3>


    <div class="location-grid dark:bg-gray-800 grid grid-cols-1 md:grid-cols-2 gap-4 p-4 rounded-md bg-white shadow-md">


        <div class="location-info">

            <h4>
                ¿Cómo llegar al Raymillacta?
            </h4>


            <p>
                El sitio arqueológico de Raymillacta se encuentra en la provincia de Chachapoyas,
                región Amazonas del norte del Perú.
            </p>


            <div class="location-details">

                <div class="location-item">
                    <i class="fas fa-plane"></i>

                    <div>
                        <strong>En avión:</strong>
                        Vuelo hasta Jaén y traslado terrestre hacia Chachapoyas.
                    </div>
                </div>


                <div class="location-item">
                    <i class="fas fa-bus"></i>

                    <div>
                        <strong>En bus:</strong>
                        Transporte desde Lima, Trujillo o Chiclayo.
                    </div>
                </div>


                <div class="location-item">
                    <i class="fas fa-car"></i>

                    <div>
                        <strong>Desde Chachapoyas:</strong>
                        Traslado hacia Raymillacta mediante transporte local.
                    </div>
                </div>


            </div>


        </div>



        {{-- MAPA --}}
        <div class="map-container">

            <iframe id="map" loading="lazy" allowfullscreen>
            </iframe>

        </div>


    </div>


</section>


<script>

    document.addEventListener("DOMContentLoaded", () => {


        const latitude = -6.23169;
        const longitude = -77.86903;


        const zoom = 14;


        const map = document.getElementById("map");


        map.src = `
            https://www.google.com/maps?q=${latitude},${longitude}&z=${zoom}&output=embed
        `;


    });

</script>