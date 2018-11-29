<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List News Photos'), ['controller' => 'NewsPhotos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News Photo'), ['controller' => 'NewsPhotos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($news->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($news->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $news->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($news->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related News Photos') ?></h4>
        <?php if (!empty($news->news_photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Creted At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('News Id') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($news->news_photos as $newsPhotos): ?>
            <tr>
                <td><?= h($newsPhotos->id) ?></td>
                <td><?= h($newsPhotos->creted_at) ?></td>
                <td><?= h($newsPhotos->updated_at) ?></td>
                <td><?= h($newsPhotos->news_id) ?></td>
                <td><?= h($newsPhotos->photo) ?></td>
                <td><?= h($newsPhotos->description) ?></td>
                <td><?= h($newsPhotos->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'NewsPhotos', 'action' => 'view', $newsPhotos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'NewsPhotos', 'action' => 'edit', $newsPhotos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'NewsPhotos', 'action' => 'delete', $newsPhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsPhotos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
