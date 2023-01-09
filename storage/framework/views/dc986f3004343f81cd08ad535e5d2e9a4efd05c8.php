

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Categoria</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('info')): ?>
        <div class="alert alert-succes">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::model($category,['route' => ['admin.categories.update', $category], 'method' => 'put']); ?>

                <div class="form-group">
                    <?php echo Form::label('name','Nombre'); ?>

                    <?php echo Form::text('name',null,['class' =>'form-control','placeholder' => 'Ingrese el nombre de la categoria']); ?>


                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <?php echo Form::submit('Actualizar categoría',['class' => 'btn btn-primary']); ?>


            <?php echo Form::close(); ?>

            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Trend\platform\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>