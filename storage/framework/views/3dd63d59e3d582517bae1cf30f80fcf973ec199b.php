<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.css')); ?>">

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <!-- Styles -->
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body class="font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('l24E1FT')) {
    $componentId = $_instance->getRenderedChildComponentId('l24E1FT');
    $componentTag = $_instance->getRenderedChildComponentTagName('l24E1FT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l24E1FT');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('l24E1FT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


            <!-- Page Content -->
            <div class="container grid grid-cols-5 py-8 gap-6 ">
                <aside>
                    <h1 class="mb-2">Edicion del curso</h1>
                    <ul class="mb-4 text-sm text-gray-600 mb-8">
                        <li class="mb-4 leading-7 mb-1 border-l-4  <?php if(Request::url() == route('instructor.courses.edit',$course)):  ?> border-indigo-400 <?php else: ?> border-transparent <?php endif; ?> pl-2 ">
                            <a href="<?php echo e(route('instructor.courses.edit',$course)); ?>" >Informacion del curso</a>
                        </li>
                        <li class="mb-4 leading-7 mb-1 border-l-4 <?php if(Request::url() == route('instructor.courses.curriculum',$course)):  ?> border-indigo-400 <?php else: ?> border-transparent <?php endif; ?> pl-2">
                            <a href="<?php echo e(route('instructor.courses.curriculum',$course)); ?>">Lecciones del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4  <?php if(Request::url() == route('instructor.courses.goals',$course)):  ?> border-indigo-400 <?php else: ?> border-transparent <?php endif; ?> pl-2">
                            <a href="<?php echo e(route('instructor.courses.goals',$course)); ?>">Metas del curso</a>
                        </li>
                    </ul>

                    <?php switch($course->status):
                        case (1): ?>
                            <form action="<?php echo e(route('instructor.courses.status',$course)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit">Solicitar Revision</button>
                            </form>
                            
                            <?php break; ?>
                        <?php case (2): ?>
                            <div class="card text-gray-500">
                                <div class="card-body">
                                    Este curso se encuentra en revisión
                                </div>
                            </div>
                            <?php break; ?>

                        <?php case (3): ?>
                        <div class="card text-gray-500">
                                <div class="card-body">
                                    Este curso se encuentra publicado
                                </div>
                            </div>
                            <?php break; ?>

                        <?php default: ?>
                    
                    <?php endswitch; ?>
                

                </aside>

                <main class="col-span-4 card">
                    <div class="text-gray-600 card-body ">
                     <?php echo e($slot); ?>

                    </div>
                </main>

            </div>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>


        <?php if(isset($js)): ?>
        <?php echo e($js); ?>


        <?php endif; ?>


    </body>
</html>
<?php /**PATH C:\xampp\Trend\platform\resources\views/layouts/instructor.blade.php ENDPATH**/ ?>