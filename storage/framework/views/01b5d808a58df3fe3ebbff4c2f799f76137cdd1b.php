<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 x-on:click="open = !open" class="cursor-pointer">
                    Description de la Lección
                </h1>
            </header>
            <div>
                <hr class="my-2">

                <?php if($lesson->description): ?>
                    <form wire:submit.prevent="update">
                        
                        <textarea  wire:model="description.name" class="form-input w-full" ></textarea>
                        <?php $__errorArgs = ['description.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-sm text-red-500"><?php echo e($message); ?></span>
                            
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                        <div class="flex  justify-end">
                            <button  wire:click="destroy" class="btn btn-danger text-sm" type="button">Eliminar</button>
                            <button class="btn btn-primary text-sm ml-2" type="submit">Actualizar</button>
                        </div>
                    
                    
                    </form>
                

                <?php else: ?>
                <div>
                        
                    <textarea  wire:model="name" class="form-input w-full" placeholder="Agregue una descripcion de la Leccion" ></textarea>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-sm text-red-500"><?php echo e($message); ?></span>
                        
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                    <div class="flex  justify-end">
                       
                        <button wire:click="store" class="btn btn-primary text-sm ml-2" >Agregar</button>
                    </div>
                
                
                </div>


                <?php endif; ?>

            </div>



        </div>
    </article>


</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/instructor/lesson-description.blade.php ENDPATH**/ ?>