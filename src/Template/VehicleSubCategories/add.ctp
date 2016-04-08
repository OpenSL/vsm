<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['controller' => 'VehicleCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Category'), ['controller' => 'VehicleCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicleSubCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicleSubCategory) ?>
    <fieldset>
        <legend><?= __('Add Vehicle Sub Category') ?></legend>
        <?php
            echo $this->Form->input('vehicle_category_id', ['options' => $vehicleCategories]);
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
