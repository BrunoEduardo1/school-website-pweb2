<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery[]|\Cake\Collection\CollectionInterface $galeries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Galery'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galeries Photos'), ['controller' => 'GaleriesPhotos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeries Photo'), ['controller' => 'GaleriesPhotos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galeries Videos'), ['controller' => 'GaleriesVideos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeries Video'), ['controller' => 'GaleriesVideos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galeries index large-9 medium-8 columns content">
    <h3><?= __('Galeries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creted_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galeries as $galery): ?>
            <tr>
                <td><?= $this->Number->format($galery->id) ?></td>
                <td><?= h($galery->creted_at) ?></td>
                <td><?= h($galery->updated_at) ?></td>
                <td><?= h($galery->name) ?></td>
                <td><?= h($galery->type) ?></td>
                <td><?= h($galery->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $galery->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $galery->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $galery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galery->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
