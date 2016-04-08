<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service Package'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicePackages index large-9 medium-8 columns content">
    <h3><?= __('Service Packages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('service_id') ?></th>
                <th><?= $this->Paginator->sort('package_name') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicePackages as $servicePackage): ?>
            <tr>
                <td><?= $this->Number->format($servicePackage->id) ?></td>
                <td><?= $servicePackage->has('service') ? $this->Html->link($servicePackage->service->name, ['controller' => 'Services', 'action' => 'view', $servicePackage->service->id]) : '' ?></td>
                <td><?= h($servicePackage->package_name) ?></td>
                <td><?= $this->Number->format($servicePackage->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servicePackage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicePackage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicePackage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicePackage->id)]) ?>
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
