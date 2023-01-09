<div class="mt-8">
      <div class="container grid grid-cols-1 gap-8 lg:grid-cols-3">
         <div class="lg:col-span-2">
           <div class="embed-responsive">
            <?php echo $current->iframe; ?>

           </div>
           <p><?php echo e($course->id); ?></p>
           <h1 class="mt-4 text-3xl font-bold text-gray-600">
               <?php echo e($current->name); ?>

           </h1>
           <?php if($current->description): ?>

           <div class="text-gray-600">
           <?php echo e($current->description->name); ?>

            </div>

            <?php endif; ?>

            <div class="flex items-center mt-4 cursor-pointer " wire:click="completed">
              <?php if($current->completed): ?>
                  <i class="text-2xl text-blue-600 fas fa-toggle-on"></i>
               <?php else: ?>
                  <i class="text-2xl text-gray-600 fas fa-toggle-off"></i>
              <?php endif; ?>
               <p class="ml-2 text-sm">Marcar esta unidad como culminada</p>
            </div>

            <div class="card">
               <div class="flex font-bold text-gray-500 card-body">

                  <?php if($this->previous): ?>
                     <a wire:click="changeLesson(<?php echo e($this->previous); ?>)" class="cursor-pointer">Tema anterior</a>
                  <?php endif; ?>

                  <?php if($this->next): ?>

                  <a wire:click="changeLesson(<?php echo e($this->next); ?>)" class="ml-auto cursor-pointer">Siguiente Tema</a>
                  <?php endif; ?>
               </div>
            </div>



         </div>


         <div class="card">
            <div class="card-body">
               <h1 class="mb-4 text-2xl leading-8 text-center"><?php echo e($course->title); ?></h1>

               <!--<div class="flex items-center">
                  <figure>
                     <img class="object-cover w-12 h-12 mr-4 rounded-full" src="<?php echo e($course->teacher->profile_photo_url); ?>" alt="">
                  </figure>

                  <div>
                     <p><?php echo e($course->teacher->name); ?></p>
                     <a class="text-sm text-blue-500" href=""><?php echo e('@'.Str::slug($course->teacher->name,'')); ?></a>
                  </div>

               </div>-->

               <p class="mt-2 text-sm text-gray-600"><?php echo e($this->advance .'%'); ?> completado</p>
               <div class="relative pt-1">
                  <div class="flex h-2 mb-4 overflow-hidden text-xs bg-pink-200 rounded">
                    <div style="width:<?php echo e($this->advance .'%'); ?>" class="flex flex-col justify-center text-center text-white transition-all duration-500 bg-pink-500 shadow-none whitespace-nowrap"></div>
                  </div>
                </div>

               <ul>
                  <?php $__currentLoopData = $course->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="mb-4 text-gray-600">
                        <a class="inline-block mb-2 text-base font-bold" href=""><?php echo e($section->name); ?></a>
                        <ul>
                           <?php $__currentLoopData = $section->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <li class="flex">
                                    <div>
                                       <?php if($lesson->completed): ?>
                                          <?php if($current->id == $lesson->id): ?>
                                             <span class="inline-block w-4 h-4 mt-1 mr-2 border-2 border-yellow-500 rounded-full"></span>
                                          <?php else: ?>
                                             <span class="inline-block w-4 h-4 mt-1 mr-2 bg-yellow-500 rounded-full"></span>
                                          <?php endif; ?>


                                       <?php else: ?>
                                          <?php if($current->id == $lesson->id): ?>
                                             <span class="inline-block w-4 h-4 mt-1 mr-2 border-2 border-gray-500 rounded-full"></span>
                                          <?php else: ?>
                                             <span class="inline-block w-4 h-4 mt-1 mr-2 bg-gray-500 rounded-full"></span>
                                          <?php endif; ?>
                                       <?php endif; ?>
                                    </div>

                                    <a class="cursor-pointer" wire:click="changeLesson(<?php echo e($lesson); ?>)" ><?php echo e($lesson->name); ?>


                                       </li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>


            </div>

         </div>


      </div>


</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/course-status.blade.php ENDPATH**/ ?>