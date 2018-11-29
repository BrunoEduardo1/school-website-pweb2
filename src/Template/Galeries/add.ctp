<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery $galery
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galeries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galeries Photos'), ['controller' => 'GaleriesPhotos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeries Photo'), ['controller' => 'GaleriesPhotos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galeries Videos'), ['controller' => 'GaleriesVideos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Galeries Video'), ['controller' => 'GaleriesVideos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galeries form large-9 medium-8 columns content">
    <?= $this->Form->create($galery) ?>
    <fieldset>
        <legend><?= __('Add Galery') ?></legend>
        <?php
            echo $this->Form->control('creted_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('name');
            echo $this->Form->control('content');
            echo $this->Form->control('type');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
