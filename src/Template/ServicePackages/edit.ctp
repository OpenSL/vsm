<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicePackage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicePackage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Service Packages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicePackages form large-9 medium-8 columns content">
    <?= $this->Form->create($servicePackage) ?>
    <fieldset>
        <legend><?= __('Edit Service Package') ?></legend>
        <?php
            echo $this->Form->input('service_id', ['options' => $services]);
            echo $this->Form->input('package_name');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
