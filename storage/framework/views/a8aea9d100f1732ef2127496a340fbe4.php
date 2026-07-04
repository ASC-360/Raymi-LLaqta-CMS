<header class="relative w-full h-[60vh] flex items-center justify-center">

    <!-- IMAGEN DE FONDO -->
    <img
        src="<?php echo e(asset('img/DSC_1739.JPG')); ?>"
        alt="Historia de los Chachapoyas"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- CAPA OSCURA -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- CONTENIDO CENTRADO -->
    <div class="relative text-center px-4">

        <!-- TITULO CON DEGRADADO -->
        <h1 class="text-4xl md:text-6xl font-bold bg-linear-to-r from-orange-400 via-amber-500 to-orange-600 text-transparent bg-clip-text">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                <?php echo e(auth()->user()->name); ?>, descubramos Raymi Llaqta
            <?php else: ?>
                Descubre Raymi Llaqta
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </h1>

        <!-- DESCRIPCIÓN -->
        <p class="mt-4 text-gray-200 italic text-lg max-w-xl mx-auto">
            Un viaje a través de la historia de los Chachapoyas en las alturas del norte del Perú.
        </p>

    </div>

</header><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/components/sections/home/header.blade.php ENDPATH**/ ?>