

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <a class="btn btn-secondary btn-sm float-right" href="<?php echo e(route('admin.categories.create')); ?>">Crear Categoria</a>
    <h1>Lista de Categorias</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('info')): ?>
        <div class="alert alert-info">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($category->id); ?>

                            </td>
                        
                            <td>
                                <?php echo e($category->name); ?>

                            </td>
                        
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.categories.edit',$category)); ?>">Editar</a>
                            </td>
                        
                            <td width="10px">
                                <form action="<?php echo e(route('admin.categories.destroy', $category)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Trend\platform\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>