<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesion | Raymi Llaqta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>

    <div class="p-2 flex items-center justify-center h-screen bg-cover bg-center">

        <form action="<?php echo e(route('login')); ?>" method="POST" id="loginForm">

            <?php if (isset($component)) { $__componentOriginal0457a77ecc037d88fede3f91b8035f35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0457a77ecc037d88fede3f91b8035f35 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col gap-2 w-110! shadow-amber-900/50 shadow-2xl']); ?>

                <?php echo csrf_field(); ?>

                
                <a href="<?php echo e(route('home.view')); ?>" class="flex justify-center">
                    <img src="<?php echo e(asset('img/raymi-llaqta-logo.png')); ?>" class="h-10 md:h-12 object-contain"
                        alt="Raymi Llaqta">
                </a>

                
                <h1 class="font-mobno text-2xl text-center text-black">
                    Iniciar sesión
                </h1>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-red-500 text-center">
                        <?php echo e($message); ?>

                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <label for="email">
                    Ingrese su correo:
                </label>

                <?php if (isset($component)) { $__componentOriginal380f71552d26da11981188819389cf5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal380f71552d26da11981188819389cf5c = $attributes; } ?>
<?php $component = App\View\Components\Ui\Input::resolve(['type' => 'email','placeholder' => 'ejemplo@gmail.com','name' => 'email'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal380f71552d26da11981188819389cf5c)): ?>
<?php $attributes = $__attributesOriginal380f71552d26da11981188819389cf5c; ?>
<?php unset($__attributesOriginal380f71552d26da11981188819389cf5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal380f71552d26da11981188819389cf5c)): ?>
<?php $component = $__componentOriginal380f71552d26da11981188819389cf5c; ?>
<?php unset($__componentOriginal380f71552d26da11981188819389cf5c); ?>
<?php endif; ?>


                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-red-500 text-center">
                        <?php echo e($message); ?>

                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                <label for="password">
                    Ingrese su contraseña:
                </label>

                <?php if (isset($component)) { $__componentOriginal380f71552d26da11981188819389cf5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal380f71552d26da11981188819389cf5c = $attributes; } ?>
<?php $component = App\View\Components\Ui\Input::resolve(['type' => 'password','placeholder' => '************','name' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal380f71552d26da11981188819389cf5c)): ?>
<?php $attributes = $__attributesOriginal380f71552d26da11981188819389cf5c; ?>
<?php unset($__attributesOriginal380f71552d26da11981188819389cf5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal380f71552d26da11981188819389cf5c)): ?>
<?php $component = $__componentOriginal380f71552d26da11981188819389cf5c; ?>
<?php unset($__componentOriginal380f71552d26da11981188819389cf5c); ?>
<?php endif; ?>


                <div class="flex gap-2 justify-center">

                    <p>
                        No tienes una cuenta?
                    </p>

                    <?php if (isset($component)) { $__componentOriginale64a4f60c58d3bbd0b560902a943dab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale64a4f60c58d3bbd0b560902a943dab1 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Link::resolve(['href' => ''.e(route('register.view')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-medium cursor-pointer hover:text-amber-700 hover:underline']); ?>
                        Crear cuenta
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

                </div>


                <?php if (isset($component)) { $__componentOriginal238d5211cc9d80261ec96f21f6b79bb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal238d5211cc9d80261ec96f21f6b79bb3 = $attributes; } ?>
<?php $component = App\View\Components\Ui\Button::resolve(['type' => 'submit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'loginButton']); ?>
                    <span class="material-symbols-outlined">
                        login
                    </span>

                    Iniciar sesión
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


             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0457a77ecc037d88fede3f91b8035f35)): ?>
<?php $attributes = $__attributesOriginal0457a77ecc037d88fede3f91b8035f35; ?>
<?php unset($__attributesOriginal0457a77ecc037d88fede3f91b8035f35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0457a77ecc037d88fede3f91b8035f35)): ?>
<?php $component = $__componentOriginal0457a77ecc037d88fede3f91b8035f35; ?>
<?php unset($__componentOriginal0457a77ecc037d88fede3f91b8035f35); ?>
<?php endif; ?>

        </form>

    </div>


    <script>
        const form = document.getElementById('loginForm');
        const button = document.getElementById('loginButton');

        form.addEventListener('submit', () => {

            button.disabled = true;

            button.innerHTML = `
            <span class="material-symbols-outlined animate-spin">
                progress_activity
            </span>
            Ingresando...
        `;

        });
    </script>
</body>

</html><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/auth/login.blade.php ENDPATH**/ ?>