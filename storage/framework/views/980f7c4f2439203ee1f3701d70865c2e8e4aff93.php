

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Asignar un Rol</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="h5">Nombre</h1>
            <p class="form-control"><?php echo e($user->name); ?></p>
            <h1 class="h5">Lista de Roles</h1>

            <?php echo Form::model($user,['route' => ['admin.users.update',$user], 'method' => 'put']); ?>

            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div>
                <label >
                    <?php echo Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']); ?>

                    <?php echo e($role->name); ?>

                </label>

               </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


               <?php echo Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']); ?>


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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Trend\platform\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>