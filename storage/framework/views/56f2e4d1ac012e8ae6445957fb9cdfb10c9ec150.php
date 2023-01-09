<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Role</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="flex p-2 m2">
    <a href="<?php echo e(route('admin.roles.index')); ?>"
    class="px-4 py-2 bg-indigo-500 rounded-lg hover:bg-indigo-700" >Ver todos los roles</a>
</div>

<div class="card">
    <div class="card-body">
        <?php echo Form::model($role,['route' => ['admin.roles.update',$role],'method' => 'put']); ?>


        <?php echo $__env->make('admin.roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <?php $__errorArgs = ['permissions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <span class="text-danger">
             <strong><?php echo e($message); ?></strong>
         </span>
         <br>
     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

         <?php echo Form::submit('Editar Role', ['class' => 'btn btn-primary mt-2']); ?>


        <?php echo Form::close(); ?>

    </div>
</div>
s

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>