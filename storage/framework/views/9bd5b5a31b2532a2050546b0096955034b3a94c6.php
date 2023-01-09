<div>
     <?php $__env->slot('course', null, []); ?> 
        <?php echo e($course->slug); ?>

     <?php $__env->endSlot(); ?>

    <h1 class="text-2xl font-bold">Lecciones del curso</h1>

    <hr class="mt-2 mb-6">


    <?php $__currentLoopData = $course->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-6 card">
            <div class="card-body bg-bray-100">
                <?php if($section->id == $item->id): ?>

                    <form wire:submit.prevent="update">
                        <input wire:model="section.name" class="w-full form-input" placeholder="Ingrese el nombre de la sección">

                        <?php $__errorArgs = ['section.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-xs text-red-500"><?php echo e($message); ?></span>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </form>

                <?php else: ?>

                <header class="flex items-center justify-between">


                    <h1 class="cursos-pointer"><strong>Seccion:</strong><?php echo e($item->name); ?></h1>
                    <div>
                        <i class="text-blue-500 cursor-pointer fas fa-edit" wire:clikc="edit(<?php echo e($item); ?>)"></i>
                        <i class="text-red-500 cursor-pointer fas fa-eraser" wire:click="destroy(<?php echo e($item); ?>)"></i>
                    </div>



                </header>

                <div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('instructor.courses-lesson',['section'=> $item])->html();
} elseif ($_instance->childHasBeenRendered($item->id)) {
    $componentId = $_instance->getRenderedChildComponentId($item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($item->id);
} else {
    $response = \Livewire\Livewire::mount('instructor.courses-lesson',['section'=> $item]);
    $html = $response->html();
    $_instance->logRenderedChild($item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>

                <?php endif; ?>

            </div>
        </article>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true"  class="flex items-center cursor-pointer">
            <i class="mr-2 text-2xl text-red-500 far fa-plus-square"></i>
            Agregar nueva sección
        </a>

        <article class="card"x-show="open">
            <div class="bg-gray-100 card-body">
                <h1 class="mb-4 text-xl font-blod">Agreagr nueva Seccion</h1>
            <div class="mb-4">
                <input wire:model="name" class="w-full form-input" placeholder="Escriba el nombre de la seccion">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-xs text-red-500"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>
            <div class="flex justify-end">
                <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                <button class="ml-2 btn btn-primary" wire:click="store">Agregar</button>
            </div>

            </div>

        </article>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/instructor/courses-curriculum.blade.php ENDPATH**/ ?>