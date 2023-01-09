<?php if (isset($component)) { $__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InstructorLayout::class, ['course' => $course] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('instructor-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\InstructorLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('instructor.courses-goals', [ 'course' => $course])->html();
} elseif ($_instance->childHasBeenRendered('courses-goals' .$course->id)) {
    $componentId = $_instance->getRenderedChildComponentId('courses-goals' .$course->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('courses-goals' .$course->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('courses-goals' .$course->id);
} else {
    $response = \Livewire\Livewire::mount('instructor.courses-goals', [ 'course' => $course]);
    $html = $response->html();
    $_instance->logRenderedChild('courses-goals' .$course->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>

    <div class="my-8">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('instructor.courses-requirements', [ 'course' => $course])->html();
} elseif ($_instance->childHasBeenRendered('courses-requirements' .$course->id)) {
    $componentId = $_instance->getRenderedChildComponentId('courses-requirements' .$course->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('courses-requirements' .$course->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('courses-requirements' .$course->id);
} else {
    $response = \Livewire\Livewire::mount('instructor.courses-requirements', [ 'course' => $course]);
    $html = $response->html();
    $_instance->logRenderedChild('courses-requirements' .$course->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>

    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('instructor.courses-audiences', [ 'course' => $course])->html();
} elseif ($_instance->childHasBeenRendered('courses-audiences' .$course->id)) {
    $componentId = $_instance->getRenderedChildComponentId('courses-audiences' .$course->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('courses-audiences' .$course->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('courses-audiences' .$course->id);
} else {
    $response = \Livewire\Livewire::mount('instructor.courses-audiences', [ 'course' => $course]);
    $html = $response->html();
    $_instance->logRenderedChild('courses-audiences' .$course->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5)): ?>
<?php $component = $__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5; ?>
<?php unset($__componentOriginal7bb489bab0e37f83489c86b0eec0f539e64bbdc5); ?>
<?php endif; ?><?php /**PATH C:\xampp\Trend\platform\resources\views/instructor/courses/goals.blade.php ENDPATH**/ ?>