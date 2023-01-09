<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('first-component')->html();
} elseif ($_instance->childHasBeenRendered('AOgMTDx')) {
    $componentId = $_instance->getRenderedChildComponentId('AOgMTDx');
    $componentTag = $_instance->getRenderedChildComponentTagName('AOgMTDx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AOgMTDx');
} else {
    $response = \Livewire\Livewire::mount('first-component');
    $html = $response->html();
    $_instance->logRenderedChild('AOgMTDx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH C:\xampp\htdocs\Trend\platform\resources\views/auth/register.blade.php ENDPATH**/ ?>