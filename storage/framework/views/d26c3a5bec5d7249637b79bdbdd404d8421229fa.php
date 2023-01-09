<div class="form-group">
    <?php echo Form::label('name','Nombre:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escriba su nombre']); ?>


    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback">
            <strong><?php echo e($message); ?></strong>
        </span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


</div>
<strong>
Permisos
</strong>

<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
<label >
    <?php echo Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']); ?>

    <?php echo e($permission->name); ?>

 </label>
</div>
 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/admin/roles/partials/form.blade.php ENDPATH**/ ?>