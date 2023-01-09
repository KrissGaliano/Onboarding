<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Puestos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">

    <div class="card-header">
            <a href="<?php echo e(route('admin.puestos.create')); ?>">Crear Puesto</a>
    </div>


    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puesto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <?php echo e($puesto->id); ?>

                        </td>
                        <td>
                            <?php echo e($puesto->name); ?>

                        </td>

                        <td width="10px">
                            <a class="btn btn-info" href="<?php echo e(route('admin.puestos.edit',$puesto)); ?>">Editar</a>
                        </td>

                        <td width="10px">
                            <form action="<?php echo e(route('admin.puestos.destroy',$puesto)); ?>" method="POST">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="4">
                        No hay ningun  rol registrado
                    </td>
                </tr>

                <?php endif; ?>


            </tbody>

        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/admin/puestos/index.blade.php ENDPATH**/ ?>