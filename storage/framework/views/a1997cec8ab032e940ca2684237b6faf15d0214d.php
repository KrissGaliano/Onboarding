<?php foreach($attributes->onlyProps(['course']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['course']); ?>
<?php foreach (array_filter((['course']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<article class="overflow-hidden bg-white rounded shadow-lg">
    <img  class="object-cover w-full h-36" src="<?php echo e(Storage::url($course->image->url)); ?>" alt="">

    <div class="px-6 py-4">
        <h1 class="mb-2 text-xl leading-6 text-gray-700" ><?php echo e(Str::limit($course->title,40)); ?></h1>

        <div class="flex">


             <p class="ml-auto text-sm text-gray-500">
                <i class="fas fa-users"></i>
                (<?php echo e($course->students_count); ?>)
             </p>

        </div>

        <a  href=<?php echo e(route('courses.show',$course)); ?> class="block w-full px-4 py-2 mt-4 font-bold text-center text-white bg-orange-500 rounded hover:bg-orange-700">
            Más informacion
        </a>


    </div>




</article>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/components/course-card.blade.php ENDPATH**/ ?>