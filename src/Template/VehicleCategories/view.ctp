<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle Category'), ['action' => 'edit', $vehicleCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle Category'), ['action' => 'delete', $vehicleCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['controller' => 'VehicleSubCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['controller' => 'VehicleSubCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicleCategories view large-9 medium-8 columns content">
    <h3><?= h($vehicleCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($vehicleCategory->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicleCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicleCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($vehicleCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vehicle Sub Categories') ?></h4>
        <?php if (!empty($vehicleCategory->vehicle_sub_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Vehicle Category Id') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicleCategory->vehicle_sub_categories as $vehicleSubCategories): ?>
            <tr>
                <td><?= h($vehicleSubCategories->id) ?></td>
                <td><?= h($vehicleSubCategories->vehicle_category_id) ?></td>
                <td><?= h($vehicleSubCategories->type) ?></td>
                <td><?= h($vehicleSubCategories->created) ?></td>
                <td><?= h($vehicleSubCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VehicleSubCategories', 'action' => 'view', $vehicleSubCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VehicleSubCategories', 'action' => 'edit', $vehicleSubCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VehicleSubCategories', 'action' => 'delete', $vehicleSubCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleSubCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($vehicleCategory->vehicles)): ?>
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
            <?php foreach ($vehicleCategory->vehicles as $vehicles): ?>
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
