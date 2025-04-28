<textarea name="{{ $name }}" id="{{ $id }}" class="p-2 placeholder-gray-300 text-black bg-white border-2 border-black rounded-2xl w-full dark:bg-gray-600 dark:border-white dark:text-white dark:hover:bg-white dark:hover:text-black outline-none h-32">
    {{ old($name, $value)}}
</textarea>
