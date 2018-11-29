<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pages Photos'), ['controller' => 'PagesPhotos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pages Photo'), ['controller' => 'PagesPhotos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pages view large-9 medium-8 columns content">
    <h3><?= h($page->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($page->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($page->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($page->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creted At') ?></th>
            <td><?= h($page->creted_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($page->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $page->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($page->text)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pages Photos') ?></h4>
        <?php if (!empty($page->pages_photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Creted At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Page Id') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($page->pages_photos as $pagesPhotos): ?>
            <tr>
                <td><?= h($pagesPhotos->id) ?></td>
                <td><?= h($pagesPhotos->creted_at) ?></td>
                <td><?= h($pagesPhotos->updated_at) ?></td>
                <td><?= h($pagesPhotos->page_id) ?></td>
                <td><?= h($pagesPhotos->photo) ?></td>
                <td><?= h($pagesPhotos->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PagesPhotos', 'action' => 'view', $pagesPhotos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PagesPhotos', 'action' => 'edit', $pagesPhotos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PagesPhotos', 'action' => 'delete', $pagesPhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesPhotos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
