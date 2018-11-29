<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Notícias</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/news/add')?>">Nova notícia</a>
     </div>
</div>
</div>

<div class="row">
     <!-- Col table -->
    <div class="col-12 mx-auto mb-5 mt-5">
      <table class="table table-striped table-lg table-responsive-md">
        <thead>
          <tr>
            <th>Adicionado em</th>
            <th>Atualizada em</th>
            <th>Título</th>
           <!--  <th>Publica</th> -->
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= h($news->creted_at) ?></td>
                <td><?= h($news->updated_at) ?></td>
                <td><?= h($news->title) ?></td>
                <?php /* <td><?= h($news->active) ?></td>*/ ?>
                <td class="actions">
                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-eye']), ['action' => 'edit', $news->id], ['class' => 'btn btn-info btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Preview', 'escape' => false]) ?>

                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-edit']), ['action' => 'edit', $news->id], ['class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Editar', 'escape' => false]) ?>

                    <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $news->id],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar a página "{0}"?', $news->title)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
          <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Próxima') . ' >') ?>
                <?= $this->Paginator->last(__('Última') . ' >>') ?>
            </ul>
              <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} de {{count}} registro(s).')]) ?></p>
          </div>
    </div>
    <!-- /Col table -->
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
