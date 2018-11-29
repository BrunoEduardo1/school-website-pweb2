<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaleriesPhoto[]|\Cake\Collection\CollectionInterface $galeriesPhotos
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Galerias de fotos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/galeries-photos/add')?>">Nova Foto</a>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Col table -->
    <div class="col-12 mx-auto mb-5 mt-5">
     <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Adicionado em</th>
            <th>Atualização</th>
            <th>Nome</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($galeries as $galery): ?>
            <tr>
                <td><?= h($galery->creted_at->format('d/m/Y H:i:s')) ?></td>
                <td><?= h(!empty($galery->updated_at) ? $galery->updated_at->format('d/m/Y H:i:s') : 'Sem atualização recente') ?></td>
                <td><?= h($galery->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-eye']), ['controller'=>'galeries','action' => 'view', $galery->id], ['class' => 'btn btn-info btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Ver', 'escape' => false]) ?>

                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-edit']), ['controller'=>'galeries','action' => 'edit', $galery->id], ['class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Editar', 'escape' => false]) ?>

                    <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['controller'=>'galeries','action' => 'delete', $galery->id,1],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar galeria "{0}"?', $galery->name)]) ?>
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
</div>

</main>
<!-- FIM Conteúdo da página -->