<button type="<?php echo e($type ?? 'button'); ?>" <?php echo e($attributes->merge([
    'class' => 'bg-amber-900 text-white font-medium p-2 rounded-md cursor-pointer flex gap-2 items-center justify-center hover:bg-amber-950 transition duration-400'
])); ?>>

    <?php echo e($slot); ?>


</button><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/components/ui/button.blade.php ENDPATH**/ ?>