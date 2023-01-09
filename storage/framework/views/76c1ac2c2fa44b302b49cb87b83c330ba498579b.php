<div>
    
    <?php $__currentLoopData = $section->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <article class="card mt-4">
            <div class="card-body">
                <?php if($lesson->id  == $item->id): ?>
                   <form wire:submit.prevent="update">
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input class="form-input w-full" wire:model="lesson.name">
                        </div>

                        <?php $__errorArgs = ['lesson.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-xs text-red-500"><?php echo e($message); ?></span>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="flex items-center mt-4">
                            <label for="" class="w-32">Plataforma</label>
                            <select wire:model="lesson.platform_id" name="" id="">
                                <?php $__currentLoopData = $platforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($platform->id); ?>"><?php echo e($platform->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="flex items-center mt-4  ">
                            <label class="w-32">URl:</label>
                            <input wire:model="lesson.url" class="form-input w-full">
                        </div>

                        <?php $__errorArgs = ['lesson.url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-xs text-red-500"><?php echo e($message); ?></span>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="btn btn-danger" wire:click="cancel   ">Cancelar</button>
                            <button type="submit" class="btn btn-primary ml-2" >Actualizar</button>
                        </div>
                   </form>
                <?php else: ?>
                <header>
                    <h1><i class="far fa-play-circle text-blue-500 mr-1"></i>Lección:<?php echo e($item->name); ?></h1>
                </header>
                <div>
                    <hr class="my-2">
                    <p class="text-sm">Plataforma:<?php echo e($item->platform->name); ?></p>
                    <p class="text-sm"><a class="text-blue-600" href="<?php echo e($item->url); ?>" target="_blank"><?php echo e($item->url); ?></a></p>
                
                    <div class="my-2">
                        <button class="btn btn-primary text-sm" wire:click="edit(<?php echo e($item); ?>)">Editar</button>
                        <button class="btn btn-danger text-sm" wire:click="destroy(<?php echo e($item); ?>)">Elminar</button>
                    </div>

                    <div>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('instructor.lesson-description',['lesson' => $item])->html();
} elseif ($_instance->childHasBeenRendered('lesson-description-' .$item->id)) {
    $componentId = $_instance->getRenderedChildComponentId('lesson-description-' .$item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('lesson-description-' .$item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lesson-description-' .$item->id);
} else {
    $response = \Livewire\Livewire::mount('instructor.lesson-description',['lesson' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('lesson-description-' .$item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>

                </div>
                <?php endif; ?>


            </div>


        </article>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    <div class="mt-4" x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true"  class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva lección
        </a>    

        <article class="card"x-show="open"> 
            <div class="card-body ">
                <h1 class="text-xl font-blod mb-4">Agreagr nueva Leccion</h1>
            <div class="mb-4">
                <div class="flex items-center">
                    <label class="w-32">Nombre:</label>
                    <input class="form-input w-full" wire:model="name">
                </div>

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

                <div class="flex items-center mt-4">
                    <label for="" class="w-32">Plataforma</label>
                    <select wire:model="platform_id">
                        <?php $__currentLoopData = $platforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($platform->id); ?>"><?php echo e($platform->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <?php $__errorArgs = ['platform_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-xs text-red-500"><?php echo e($message); ?></span>

                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                <div class="flex items-center mt-4  ">
                    <label class="w-32">URl:</label>
                    <input wire:model="url" class="form-input w-full">
                </div>

                <?php $__errorArgs = ['url'];
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
                <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
            </div>
            
            </div>  

        </article>
    </div>


</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/instructor/courses-lesson.blade.php ENDPATH**/ ?>