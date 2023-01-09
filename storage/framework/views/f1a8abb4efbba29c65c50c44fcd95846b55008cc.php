<div class="container">
    <!-- component -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.table-responsive','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="flex px-4 py-6">
                    <input wire:keydown="limpiar_page" wire:model="search" class="flex-1 shadow-sm form-input" placeholder="Ingrese el nombre de un curso">
                    <a class="ml-2 text-white bg-orange-500 btn" href="<?php echo e(route('instructor.courses.create')); ?>">Crear Nuevo Curso </a>

                </div>
                <?php if($courses->count()): ?>
                <table class="w-11/12 pl-4 ml-4 lg:w-5/5">
                    <thead>
                        <tr class="ml-6 text-base leading-normal text-gray-600 uppercase bg-gray-200">
                            <th class="px-6 py-3 text-left">Nombre</th>
                            <th class="px-6 py-3 text-left">Usuarios Inscritos</th>
                            <th class="px-6 py-3 text-center">Calificacion</th>
                            <th class="px-6 py-3 text-center">Estado</th>
                            <th class="px-6 py-3 text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-light text-gray-600">
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="px-6 py-3 text-left">
                                <div class="flex items-center">
                                    <div class="mr-3">
                                        <?php if(isset($course->image)): ?>
                                            <img class="object-cover object-center w-6 h-6 rounded-full" src="<?php echo e(Storage::url($course->image->url)); ?>"/>
                                            <?php else: ?>
                                            <img class="object-cover object-center w-6 h-6 rounded-full" src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?cs=srgb&dl=pexels-katerina-holmes-5905709.jpg&fm=jpg"/>
                                        <?php endif; ?>

                                    </div>
                                    <span><?php echo e($course->title); ?></span>

                                    <!--<div class="">
                                        <?php echo e($course->category->name); ?>

                                    </div>-->
                                </div>
                            </td>

                            <td class="px-6 py-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://media.istockphoto.com/vectors/orange-design-check-mark-vector-id473345918?k=20&m=473345918&s=170667a&w=0&h=lLx1xzRMExafPDZeng81nYWO0jCiZHHyzV_200mGhYU="/>
                                    </div>
                                    <span class="font-medium"> <?php echo e($course->students->count()); ?> </span>
                                    <span class="ml-2 font-medium "> Usuarios inscritos </span>
                                </div>
                            </td>

                            <td class="px-12 py-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 transform border border-gray-200 rounded-full hover:scale-125" src="https://img.freepik.com/vector-premium/ilustracion-vector-estrella-mar-amarillo-naranja_490811-393.jpg?w=2000"/>
                                    <img class="w-6 h-6 -m-1 transform border border-gray-200 rounded-full hover:scale-125" src="https://img.freepik.com/vector-premium/ilustracion-vector-estrella-mar-amarillo-naranja_490811-393.jpg?w=2000"/>
                                    <img class="w-6 h-6 -m-1 transform border border-gray-200 rounded-full hover:scale-125" src="https://img.freepik.com/vector-premium/ilustracion-vector-estrella-mar-amarillo-naranja_490811-393.jpg?w=2000"/>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-center">
                                <?php switch($course->status):
                                    case (1): ?>
                                    <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full"> Borrador </span>
                                        <?php break; ?>
                                    <?php case (2): ?>
                                    <span class="px-3 py-1 text-xs text-yellow-600 bg-yellow-200 rounded-full"> Revision </span>
                                        <?php break; ?>
                                    <?php case (3): ?>
                                    <span class="px-3 py-1 text-xs text-green-600 bg-green-200 rounded-full"> Publicado </span>
                                        <?php break; ?>

                                    <?php default: ?>

                                <?php endswitch; ?>

                            </td>
                            <td class="px-6 py-3 text-center">
                                <!--<div class="flex justify-center item-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>-->
                                    <div class="w-5 transform ml-9 hover:text-orange-500 hover:scale-110">
                                        <a href="<?php echo e(route('instructor.courses.edit',$course)); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg></a>

                                    </div>
                                    <!--<div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>-->
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>

                <div class="px-6 py-4">
                        <?php echo e($courses->links()); ?>

                </div>

                <?php else: ?>

                    <div class="px-6 py-4">
                        No hay ningun registro coincidente
                    </div>


                <?php endif; ?>

      <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</div>
<?php /**PATH C:\xampp\Trend\platform\resources\views/livewire/instructor/courses-index.blade.php ENDPATH**/ ?>