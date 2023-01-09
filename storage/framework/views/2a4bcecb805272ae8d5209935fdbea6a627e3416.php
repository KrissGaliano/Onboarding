<?php $__env->startSection('title', 'World Vision'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Cursos pendientes de aprobación</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('info')): ?>

        <div class="alert alert-success">
            <?php echo e((session('info'))); ?>


        </div>

    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Categoría</th>
                        <th>Instructor</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($course->id); ?></td>
                        <td><?php echo e($course->title); ?></td>
                        <td><?php echo e($course->category->name); ?></td>
                        <td><?php echo e($course->teacher->name); ?></td>

                        <td>
                            <a class="btn btn-primary" href="<?php echo e(route('admin.courses.show',$course)); ?>">Revisar</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <?php echo e($courses->links('vendor.pagination.bootstrap-4')); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Trend\platform\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>