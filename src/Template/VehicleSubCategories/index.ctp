<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['controller' => 'VehicleCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['controller' => 'VehicleCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicleSubCategories index large-9 medium-8 columns content">
    <h3><?= __('Vehicle Sub Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('vehicle_category_id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicleSubCategories as $vehicleSubCategory): ?>
            <tr>
                <td><?= $this->Number->format($vehicleSubCategory->id) ?></td>
                <td><?= $vehicleSubCategory->has('vehicle_category') ? $this->Html->link($vehicleSubCategory->vehicle_category->id, ['controller' => 'VehicleCategories', 'action' => 'view', $vehicleSubCategory->vehicle_category->id]) : '' ?></td>
                <td><?= h($vehicleSubCategory->type) ?></td>
                <td><?= h($vehicleSubCategory->created) ?></td>
                <td><?= h($vehicleSubCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehicleSubCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicleSubCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicleSubCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleSubCategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
