<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service Type'), ['action' => 'edit', $serviceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service Type'), ['action' => 'delete', $serviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Service Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="serviceTypes view large-9 medium-8 columns content">
    <h3><?= h($serviceType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Service Type') ?></th>
            <td><?= h($serviceType->service_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($serviceType->id) ?></td>
        </tr>
    </table>
</div>
