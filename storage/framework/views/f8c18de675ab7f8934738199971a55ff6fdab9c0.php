<div class="mb-4">
    <?php echo Form::label('title', 'titulo del curso'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-input block w-full mt-1'.($errors->has('title') ? ' border-red-600' : ''  ) ]); ?>

    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 


</div>

<div class="mb-4">
  <?php echo Form::label('slug', 'Slug del curso'); ?>

  <?php echo Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-input block w-full mt-1' .($errors->has('slug') ? ' border-red-600' : '' ) ]); ?>

  <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
</div>

<div class="mb-4">
<?php echo Form::label('subtitle', 'Subtitulo del curso'); ?>

<?php echo Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1' .($errors->has('subtitle') ? ' border-red-600' : '') ]); ?>

<?php $__errorArgs = ['subtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

</div>

<div class="mb-4">
  <?php echo Form::label('description', 'Description del curso'); ?>

  <?php echo Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']); ?>

</div>   

<div class="grid grid-cols-3 gap-4">
  <div>
      <?php echo Form::label('category_id', 'Categoria:'); ?>

      <?php echo Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1' ]); ?>

  </div>

  <!--<div>
      <?php echo Form::label('level_id', 'Niveles:'); ?>

      <?php echo Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1' ]); ?>

  </div>

   -->

</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid grid-cols-2 gap-4">
  <figure>
     <?php if(isset($course->image)): ?>
     <img id="picture" class="w-full h-64 object-cover object-center" src="<?php echo e(Storage::url($course->image->url)); ?>" alt="">
     <?php else: ?>
     <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?cs=srgb&dl=pexels-katerina-holmes-5905709.jpg&fm=jpg" alt="">
     <?php endif; ?>
  </figure>
  <div>
      <p class="mb-2">Ingresar una imagen referencial al módulo.</p>
      
          <?php echo Form::file('file', ['class' => 'form-input w-full' .($errors->has('file') ? ' border-red-600' : ''), 'id'=> 'file', 'accept' => 'image/*']); ?>

          <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
    
      </div>
    
</div>
<?php /**PATH C:\xampp\Trend\platform\resources\views/instructor/courses/partials/form.blade.php ENDPATH**/ ?>