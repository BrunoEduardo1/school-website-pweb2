<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaleriesVideo $galeriesVideo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galeries Video'), ['action' => 'edit', $galeriesVideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galeries Video'), ['action' => 'delete', $galeriesVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galeriesVideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galeries Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galeries Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galeries'), ['controller' => 'Galeries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galery'), ['controller' => 'Galeries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galeriesVideos view large-9 medium-8 columns content">
    <h3><?= h($galeriesVideo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Galery') ?></th>
            <td><?= $galeriesVideo->has('galery') ? $this->Html->link($galeriesVideo->galery->name, ['controller' => 'Galeries', 'action' => 'view', $galeriesVideo->galery->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($galeriesVideo->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caption') ?></th>
            <td><?= h($galeriesVideo->caption) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($galeriesVideo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($galeriesVideo->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($galeriesVideo->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $galeriesVideo->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
