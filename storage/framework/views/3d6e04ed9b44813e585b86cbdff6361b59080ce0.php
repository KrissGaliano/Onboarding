<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de usuarios</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users-index')->html();
} elseif ($_instance->childHasBeenRendered('cg6Wnfb')) {
    $componentId = $_instance->getRenderedChildComponentId('cg6Wnfb');
    $componentTag = $_instance->getRenderedChildComponentTagName('cg6Wnfb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cg6Wnfb');
} else {
    $response = \Livewire\Livewire::mount('admin.users-index');
    $html = $response->html();
    $_instance->logRenderedChild('cg6Wnfb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Trend\platform\resources\views/admin/users/index.blade.php ENDPATH**/ ?>