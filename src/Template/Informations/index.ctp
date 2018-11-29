<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Information[]|\Cake\Collection\CollectionInterface $informations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Information'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informations index large-9 medium-8 columns content">
    <h3><?= __('Informations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creted_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instgram') ?></th>
                <th scope="col"><?= $this->Paginator->sort('youtube') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informations as $information): ?>
            <tr>
                <td><?= $this->Number->format($information->id) ?></td>
                <td><?= h($information->creted_at) ?></td>
                <td><?= h($information->updated_at) ?></td>
                <td><?= h($information->email) ?></td>
                <td><?= h($information->phone) ?></td>
                <td><?= h($information->adress) ?></td>
                <td><?= h($information->twitter) ?></td>
                <td><?= h($information->instgram) ?></td>
                <td><?= h($information->youtube) ?></td>
                <td><?= h($information->facebook) ?></td>
                <td><?= h($information->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $information->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $information->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $information->id], ['confirm' => __('Are you sure you want to delete # {0}?', $information->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} de {{count}} registro(s).')]) ?></p>
    </div>
</div>
