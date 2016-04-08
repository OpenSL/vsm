<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['controller' => 'VehicleSubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['controller' => 'VehicleSubCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicleCategories index large-9 medium-8 columns content">
    <h3><?= __('Vehicle Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicleCategories as $vehicleCategory): ?>
            <tr>
                <td><?= $this->Number->format($vehicleCategory->id) ?></td>
                <td><?= h($vehicleCategory->type) ?></td>
                <td><?= h($vehicleCategory->created) ?></td>
                <td><?= h($vehicleCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vehicleCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicleCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicleCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleCategory->id)]) ?>
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
