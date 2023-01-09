<div>
    <div class="py-4 mb-16 bg-gray-200">
        <div class="flex px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <button class="h-12 px-4 mr-4 text-gray-700 bg-white rounded-lg shadow" wire:click="resetFilters">
                <i class="mr-2 text-xs fa fa-archway"></i>
                Todos los cursos</button>

            <!-- Dropdown -->
            <div class="relative mr-4" x-data="{open:false}">
                <button class="block h-12 px-6 overflow-hidden text-gray-700 bg-white rounded-lg shadow focus:outline-none" x-on:click="open = !open">
                    <i class="mr-2 text-sm fas fa-tags"></i>
                    Category
                    <i class="ml-2 text-sm fas fa-angle-down"></i>
                </button>

               <div class="absolute right-0 w-40 py-2 mt-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a  class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded cursor-pointer text-normal hover:bg-blue-500" wire:click="$set('category_id',<?php echo e($category->id); ?>)" x-on:click="open  = false" ><?php echo e($category->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                 </div> 

            </div>


            <!-- Dropdown -->
            <!--<div class="relative" x-data="{open:false}">
                <button class="block h-12 px-6 overflow-hidden text-gray-700 bg-white rounded-lg shadow focus:outline-none" x-on:click="open = !open">
                    <i class="mr-2 text-sm fas fa-tags"></i>
                    Niveles
                    <i class="ml-2 text-sm fas fa-angle-down"></i>
                </button>

                <div class="absolute right-0 w-40 py-2 mt-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a  class="block px-4 py-2 text-gray-900 transition-colors duration-200 rounded cursor-pointer text-normal" wire:click="$set('level_id',<?php echo e($level->id); ?>)" x-on:click="open  = false"  ><?php echo e($level->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 </div>

            </div>
        -->

        </div>
    </div>




    <div class="grid px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-12 gap-y-16">
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.course-card','data' => ['course' => $course]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('course-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['course' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($course)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <div class="px-4 mx-auto mt-4 mb-8 max-w-7xl sm:px-6 lg:px-8">
        <?php echo e($courses->links()); ?>

    </div>
</div>
<?php /**PATH C:\xampp\Trend\platform\resources\views/livewire/courses-index.blade.php ENDPATH**/ ?>