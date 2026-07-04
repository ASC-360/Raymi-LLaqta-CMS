<input
    type="<?php echo e($type); ?>"
    name="<?php echo e($name); ?>"
    placeholder="<?php echo e($placeholder); ?>"
    value="<?php echo e(old($name, $value)); ?>"
    <?php echo e($attributes->merge([
        'class' => 'bg-gray-100 rounded-md placeholder:text-gray-500 p-2! outline-none border-2 border-gray-100 focus:border-amber-900 hover:border-amber-950 transition duration-400'
    ])); ?>

><?php /**PATH C:\Users\frank\Raymi-LLaqta-CMS\resources\views/components/ui/input.blade.php ENDPATH**/ ?>