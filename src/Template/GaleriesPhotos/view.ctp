<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaleriesPhoto $galeriesPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galeries Photo'), ['action' => 'edit', $galeriesPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galeries Photo'), ['action' => 'delete', $galeriesPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeriesPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galeries Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeries Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galeries'), ['controller' => 'Galeries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galery'), ['controller' => 'Galeries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galeriesPhotos view large-9 medium-8 columns content">
    <h3><?= h($galeriesPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Galery') ?></th>
            <td><?= $galeriesPhoto->has('galery') ? $this->Html->link($galeriesPhoto->galery->name, ['controller' => 'Galeries', 'action' => 'view', $galeriesPhoto->galery->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($galeriesPhoto->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caption') ?></th>
            <td><?= h($galeriesPhoto->caption) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($galeriesPhoto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($galeriesPhoto->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($galeriesPhoto->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $galeriesPhoto->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
