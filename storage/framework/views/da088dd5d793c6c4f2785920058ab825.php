<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginal65f93f307e332f376a24f1d2b73561d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65f93f307e332f376a24f1d2b73561d5 = $attributes; } ?>
<?php $component = App\View\Components\Sections\Home\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.home.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sections\Home\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65f93f307e332f376a24f1d2b73561d5)): ?>
<?php $attributes = $__attributesOriginal65f93f307e332f376a24f1d2b73561d5; ?>
<?php unset($__attributesOriginal65f93f307e332f376a24f1d2b73561d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65f93f307e332f376a24f1d2b73561d5)): ?>
<?php $component = $__componentOriginal65f93f307e332f376a24f1d2b73561d5; ?>
<?php unset($__componentOriginal65f93f307e332f376a24f1d2b73561d5); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf84613ff68c0232827783ce004e18779 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf84613ff68c0232827783ce004e18779 = $attributes; } ?>
<?php $component = App\View\Components\Sections\Home\History::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.home.history'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sections\Home\History::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf84613ff68c0232827783ce004e18779)): ?>
<?php $attributes = $__attributesOriginalf84613ff68c0232827783ce004e18779; ?>
<?php unset($__attributesOriginalf84613ff68c0232827783ce004e18779); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf84613ff68c0232827783ce004e18779)): ?>
<?php $component = $__componentOriginalf84613ff68c0232827783ce004e18779; ?>
<?php unset($__componentOriginalf84613ff68c0232827783ce004e18779); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal3217913caadf1804c2f6b42283ae062a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3217913caadf1804c2f6b42283ae062a = $attributes; } ?>
<?php $component = App\View\Components\Sections\Home\Location::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.home.location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sections\Home\Location::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3217913caadf1804c2f6b42283ae062a)): ?>
<?php $attributes = $__attributesOriginal3217913caadf1804c2f6b42283ae062a; ?>
<?php unset($__attributesOriginal3217913caadf1804c2f6b42283ae062a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3217913caadf1804c2f6b42283ae062a)): ?>
<?php $component = $__componentOriginal3217913caadf1804c2f6b42283ae062a; ?>
<?php unset($__componentOriginal3217913caadf1804c2f6b42283ae062a); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/sections/home.blade.php ENDPATH**/ ?>