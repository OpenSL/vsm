<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Service Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="serviceTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($serviceType) ?>
    <fieldset>
        <legend><?= __('Add Service Type') ?></legend>
        <?php
            echo $this->Form->input('service_type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
