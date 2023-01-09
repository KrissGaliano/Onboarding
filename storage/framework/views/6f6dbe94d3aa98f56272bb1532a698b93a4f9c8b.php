<section>
    <h1 class="text-2xl font-bold">Metas del curso</h1>
    <hr class="mt-2 mb-6">

    <?php $__currentLoopData = $course->goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="card">
            <div class="card-body gray-100"> 
                <?php if($goal->id == $item->id): ?>
                    <form wire:submit.prevent="update">
                        <input wire:model="goal.name" class=" form-input w-full">
                        <?php $__errorArgs = ['goal.name'];
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
                <?php endif; ?>

                <header class="flex justify-between">
                    <h1><?php echo e($item->name); ?></h1>
                    <div>
                        
                    <i wire:click="edit(<?php echo e($item); ?>)" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                    <i wire:click="destroy(<?php echo e($item); ?>)" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>

                    </div>


                </header>

            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <article class="card">
        <div class="card-body bg-gray-100">
            <form wire:submit.prevent="store" >
                <input wire:model="name" class="form-input w-full" placeholder="Agregar el nombre de la Meta">

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

                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">Agregar meta</button>
                </div>
                
            </form>
        </div>
    </article>



</section><?php /**PATH C:\xampp\Trend\platform\resources\views/livewire/instructor/courses-goals.blade.php ENDPATH**/ ?>