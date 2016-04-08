<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Packages'), ['controller' => 'ServicePackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Package'), ['controller' => 'ServicePackages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view large-9 medium-8 columns content">
    <h3><?= h($service->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($service->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($service->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Unit Price') ?></th>
            <td><?= $this->Number->format($service->unit_price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Service Packages') ?></h4>
        <?php if (!empty($service->service_packages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Service Id') ?></th>
                <th><?= __('Package Name') ?></th>
                <th><?= __('Price') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->service_packages as $servicePackages): ?>
            <tr>
                <td><?= h($servicePackages->id) ?></td>
                <td><?= h($servicePackages->service_id) ?></td>
                <td><?= h($servicePackages->package_name) ?></td>
                <td><?= h($servicePackages->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ServicePackages', 'action' => 'view', $servicePackages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ServicePackages', 'action' => 'edit', $servicePackages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServicePackages', 'action' => 'delete', $servicePackages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicePackages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
