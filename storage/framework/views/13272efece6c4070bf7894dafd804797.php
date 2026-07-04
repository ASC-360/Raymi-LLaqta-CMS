<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raymi Llaqta de Chachapoyas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">

    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/css/app.css',
        'resources/js/app.js',
    ]); ?>
</head>

<body class="w-full">

    <!-- HEADER -->
    <header class="bg-white shadow-md">
        <nav class="flex items-center justify-between px-4 py-3">

            <!-- LOGO -->
            <a href="<?php echo e(route('home.view')); ?>">
                <img src="<?php echo e(asset('img/raymi-llaqta-logo.png')); ?>" class="h-10 md:h-12" alt="Raymi Llaqta">
            </a>

            <!-- DESKTOP NAV -->
            <ul class="hidden md:flex items-center gap-6 text-gray-700 font-medium">

                <li>
                    <?php if (isset($component)) { $__componentOriginale64a4f60c58d3bbd0b560902a943dab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Link::resolve(['href' => ''.e(route('home.view')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hover:text-amber-900']); ?>
                        Inicio
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $attributes = $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $component = $__componentOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
                </li>

                <li>
                    <?php if (isset($component)) { $__componentOriginale64a4f60c58d3bbd0b560902a943dab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Link::resolve(['href' => ''.e(route('publications.view')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hover:text-amber-900']); ?>
                        Posts
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $attributes = $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $component = $__componentOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
                </li>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->role === 'admin'): ?>
                        <li>
                            <?php if (isset($component)) { $__componentOriginale64a4f60c58d3bbd0b560902a943dab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Link::resolve(['href' => ''.e(route('dashboard.admin.view')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hover:text-amber-900']); ?>
                                Dashboard
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $attributes = $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $component = $__componentOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
                        </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                    <div class="flex gap-2">
                        <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <a href="<?php echo e(route('login.view')); ?>">
                                Iniciar sesión
                            </a>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white text-amber-900! border border-amber-900 hover:bg-amber-100!']); ?>
                            <a href="<?php echo e(route('register.view')); ?>">
                                Registrarse
                            </a>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                    <li>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve(['type' => 'submit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-red-600 hover:text-red-800']); ?>
                                Cerrar sesión
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
                        </form>
                    </li>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>

            <!-- MOBILE BUTTON -->
            <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mobile-menu-btn md:hidden text-2xl text-amber-900']); ?>
                <i class="fas fa-bars"></i>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
        </nav>
    </header>

    <!-- MOBILE MENU -->
    <div class="mobile-menu fixed inset-0 bg-white z-50 hidden flex-col">

        <!-- CLOSE -->
        <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'close-menu absolute top-4 right-4 text-3xl text-amber-900']); ?>
            <i class="fas fa-times"></i>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>

            <!-- NAV -->
            <nav class="flex flex-col gap-5 mt-16 px-6 text-lg">

                <?php if (isset($component)) { $__componentOriginale64a4f60c58d3bbd0b560902a943dab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Link::resolve(['href' => ''.e(route('home.view')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center gap-3']); ?>
                    <i class="fas fa-home text-amber-900"></i> Inicio
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $attributes = $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__attributesOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1)): ?>
<?php $component = $__componentOriginale64a4f60c58d3bbd0b560902a943dab1; ?>
<?php unset($__componentOriginale64a4f60c58d3bbd0b560902a943dab1); ?>
<?php endif; ?>

                <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center gap-3 text-red-600']); ?>
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $attributes = $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3)): ?>
<?php $component = $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3; ?>
<?php unset($__componentOriginal238d5211cc9d80261ec96f21f6b79bb3); ?>
<?php endif; ?>
                </form>

            </nav>


    </div>

    <!-- CONTENT -->
    <main class="w-full px-2">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white p-6 mt-10 text-center">
        © 2025 Raymi Llaqta de Chachapoyas
    </footer>

</body>

</html><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/layouts/app.blade.php ENDPATH**/ ?>