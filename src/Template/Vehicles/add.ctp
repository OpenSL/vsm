<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['controller' => 'VehicleCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['controller' => 'VehicleCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['controller' => 'VehicleSubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['controller' => 'VehicleSubCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle) ?>
    <fieldset>
        <legend><?= __('Add Vehicle') ?></legend>
        <?php
            echo $this->Form->input('vehicle_number');
            echo $this->Form->input('last_service_date');
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('vehicle_category_id', ['options' => $vehicleCategories]);
            echo $this->Form->input('vehicle_sub_category_id', ['options' => $vehicleSubCategories]);
            echo $this->Form->input('additional_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
