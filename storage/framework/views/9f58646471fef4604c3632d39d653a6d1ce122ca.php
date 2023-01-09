<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">CREAR NUEVO CURSO</h1>


                <hr class="mt-2 mb-6">
                <?php echo Form::open(['route' => 'instructor.courses.store', 'files' => true, 'autocomplete' => 'off' ]); ?>


                <?php echo Form::hidden('user_id', auth()->user()->id); ?>


                <?php echo $__env->make('instructor.courses.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="flex justify-end">
                    <?php echo Form::submit('Crear nuevo curso', ['class' => 'btn btn-primary']); ?>

                </div>


                <?php echo Form::close(); ?>


            </div>
        </div>

    </div>
     <?php $__env->slot('js', null, []); ?> 
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script src="<?php echo e(asset('js/instructor/courses/form.js')); ?>"></script>            
        <script>
                

      </script>
                
      <?php $__env->endSlot(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\Trend\platform\resources\views/instructor/courses/create.blade.php ENDPATH**/ ?>