<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle Sub Category'), ['action' => 'edit', $vehicleSubCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle Sub Category'), ['action' => 'delete', $vehicleSubCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleSubCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['controller' => 'VehicleCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['controller' => 'VehicleCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicleSubCategories view large-9 medium-8 columns content">
    <h3><?= h($vehicleSubCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Vehicle Category') ?></th>
            <td><?= $vehicleSubCategory->has('vehicle_category') ? $this->Html->link($vehicleSubCategory->vehicle_category->id, ['controller' => 'VehicleCategories', 'action' => 'view', $vehicleSubCategory->vehicle_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($vehicleSubCategory->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleSubCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleSubCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicleSubCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($vehicleSubCategory->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Vehicle Number') ?></th>
                <th><?= __('Last Service Date') ?></th>
                <th><?= __('Customer Id') ?></th>
                <th><?= __('Vehicle Category Id') ?></th>
                <th><?= __('Vehicle Sub Category Id') ?></th>
                <th><?= __('Additional Description') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicleSubCategory->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->vehicle_number) ?></td>
                <td><?= h($vehicles->last_service_date) ?></td>
                <td><?= h($vehicles->customer_id) ?></td>
                <td><?= h($vehicles->vehicle_category_id) ?></td>
                <td><?= h($vehicles->vehicle_sub_category_id) ?></td>
                <td><?= h($vehicles->additional_description) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
