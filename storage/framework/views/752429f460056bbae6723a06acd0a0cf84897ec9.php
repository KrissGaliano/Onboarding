<?php if (isset($component)) { $__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InstructorLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('instructor-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\InstructorLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('course', null, []); ?> 
            <?php echo e($course->slug); ?>

         <?php $__env->endSlot(); ?>



    <h1 class="text-2xl font-bold">Informacion del curso</h1>
    <hr class="mt-2 nb-6">
    <?php echo Form::model($course, ['route' => ['instructor.courses.update',$course], 'method' => 'put','files' => true]); ?>

    <?php echo $__env->make('instructor.courses.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    <div class="flex justify-end">
        <?php echo Form::submit('Actualizar informacion', ['class' => 'btn btn-primary']); ?>

    </div>


    <?php echo Form::close(); ?>


         <?php $__env->slot('js', null, []); ?> 
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
            <script src="<?php echo e(asset('js/instructor/courses/form.js')); ?>"></script>            
            <script>
                    

          </script>
                    
          <?php $__env->endSlot(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5)): ?>
<?php $component = $__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5; ?>
<?php unset($__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/instructor/courses/edit.blade.php ENDPATH**/ ?>