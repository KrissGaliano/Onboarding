<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Área</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="card-header">
            <a href="<?php echo e(route('admin.areas.index')); ?>">Ver todos las áreas</a>
    </div>
<div class="p-2 m-2 rounded bg-slate-100">
    <div class="w-1/2 mt-10 space-y-8 divide-y divide-gray-200">
              <form method="POST" action="<?php echo e(route('admin.areas.update',$area->id)); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="sm:col-span-6">
                      <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                      <div class="mt-1">
                          <input type="text" id="name" name="name" value="<?php echo e($area->name); ?>"
                              class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                      </div>

                  </div>


                  <div class="p-4 mt-6">

                  <button type="submit" class="px-4 py-2 text-red">Actualizar</button>
                  </div>

              </form>
          </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/admin/areas/edit.blade.php ENDPATH**/ ?>