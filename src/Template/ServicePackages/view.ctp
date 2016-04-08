<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service Package'), ['action' => 'edit', $servicePackage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service Package'), ['action' => 'delete', $servicePackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicePackage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Service Packages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Package'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servicePackages view large-9 medium-8 columns content">
    <h3><?= h($servicePackage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Service') ?></th>
            <td><?= $servicePackage->has('service') ? $this->Html->link($servicePackage->service->name, ['controller' => 'Services', 'action' => 'view', $servicePackage->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Package Name') ?></th>
            <td><?= h($servicePackage->package_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($servicePackage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($servicePackage->price) ?></td>
        </tr>
    </table>
</div>
