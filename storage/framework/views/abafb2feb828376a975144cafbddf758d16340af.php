<div>
    <div class="card">

        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Escriba un nombre ...">
        </div>
        <?php if($users->count()): ?>

        <div class="card-body">
            <table class="table text-center table-striped">

                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sede</th>
                        <th>Ubicación física</th>
                        <th>Puesto</th>

                        <th></th>
                    </tr>



                </thead>

                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->sede); ?></td>
                            <td><?php echo e($user->area); ?></td>
                            <td><?php echo e($user->puesto); ?></td>
                            <td width="10px">
                                <a class="btn btn-info" href="<?php echo e(route('admin.users.edit',$user)); ?>">+Rol</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>


            </table>
        </div>

        <div class="card-footer">
            <?php echo e($users->links()); ?>

        </div>

        <?php else: ?>
         <div class="card-body">
            <strong>No hay registros</strong>
         </div>

        <?php endif; ?>


    </div>


</div>
<?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/livewire/admin/users-index.blade.php ENDPATH**/ ?>