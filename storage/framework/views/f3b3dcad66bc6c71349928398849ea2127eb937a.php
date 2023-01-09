<div>
     <?php $__env->slot('course', null, []); ?> 
            <?php echo e($course->slug); ?>

     <?php $__env->endSlot(); ?>

    <h1 class="text-2xl font-bold mb-4">ESTUDIANTE DEL CURSO</h1>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.table-responsive','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="px-6 py-8 flex">
            <input  wire:model="search" class="form-input flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso">
          

        </div>
        <?php if($students->count()): ?>
        <table class="min-w-max w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Email</th>
                   
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    
                <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <div class="mr-2">
                           
                                    <img class="w-6 h-6 rounded-full object-cover object-center" src="<?php echo e($student->profile_photo_url); ?>"/>
                                
                               
                            </div>
                            <span><?php echo e($student->name); ?></span>
                            
                           
                        </div>
                    </td>

                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/php.png"/>
                            </div>
                            <span class="font-medium"><?php echo e($student->email); ?></span>
                           
                        </div>
                    </td>
                        
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <div class="mr-2">
                                <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/php.png"/>
                            </div>
                          
                           
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <a href="" class="text-indigo-600 hover:text-indigo-900">Ver</a>
                    </td>
                  
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                           
                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg></a>
                                

                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>


        <?php endif; ?>
       
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/instructor/courses-students.blade.php ENDPATH**/ ?>