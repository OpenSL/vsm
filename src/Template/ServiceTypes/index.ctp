<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="serviceTypes index large-9 medium-8 columns content">
    <h3><?= __('Service Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('service_type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($serviceTypes as $serviceType): ?>
            <tr>
                <td><?= $this->Number->format($serviceType->id) ?></td>
                <td><?= h($serviceType->service_type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $serviceType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->id)]) ?>
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
