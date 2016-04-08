<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['controller' => 'VehicleCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['controller' => 'VehicleCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['controller' => 'VehicleSubCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['controller' => 'VehicleSubCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Vehicle Number') ?></th>
            <td><?= h($vehicle->vehicle_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $vehicle->has('customer') ? $this->Html->link($vehicle->customer->name, ['controller' => 'Customers', 'action' => 'view', $vehicle->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle Category') ?></th>
            <td><?= $vehicle->has('vehicle_category') ? $this->Html->link($vehicle->vehicle_category->id, ['controller' => 'VehicleCategories', 'action' => 'view', $vehicle->vehicle_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Vehicle Sub Category') ?></th>
            <td><?= $vehicle->has('vehicle_sub_category') ? $this->Html->link($vehicle->vehicle_sub_category->id, ['controller' => 'VehicleSubCategories', 'action' => 'view', $vehicle->vehicle_sub_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Additional Description') ?></th>
            <td><?= h($vehicle->additional_description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Service Date') ?></th>
            <td><?= h($vehicle->last_service_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
    </table>
</div>
