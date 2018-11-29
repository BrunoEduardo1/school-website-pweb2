<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuários</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/users/add')?>">Novo Usuário</a>
     </div>
</div>
</div>

<div class="row">
     <!-- Col table -->
    <div class="col-12 mx-auto mb-5 mt-5">
      <table class="table table-striped table-lg table-responsive-md">
        <thead>
          <tr>
            <th>Código</th>
            <th>Adicionado em</th>
            <th>Login</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
             <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->creted_at) ?></td>
                <!-- <td><?= h($user->updated_at) ?></td> -->
                <td><?= h($user->login) ?></td>
                <td class="actions">
                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-eye']), ['action' => 'view', $user->id], ['class' => 'btn btn-info btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Ver', 'escape' => false]) ?>

                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-edit']), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Editar', 'escape' => false]) ?>

                    <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $user->id],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar Usuário "{0}"?', $user->login)]) ?>
                </td>
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
