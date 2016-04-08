<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicleCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicle Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Sub Categories'), ['controller' => 'VehicleSubCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Sub Category'), ['controller' => 'VehicleSubCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicleCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicleCategory) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle Category') ?></legend>
        <?php
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
