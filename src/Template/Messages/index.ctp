<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mensagens</h1>
    <!-- acoes Mensagens -->
    <div class="card-body text-right">
        <div class="btn-group m-b-5" role="group" aria-label="Acões das Mensagens">
            <button type="button" class="btn btn-outline-secondary font-18"><i class="fa fa-exclamation-circle"></i></button>
            <a href="<?=$this->Url->build('/messages/add')?>" class="btn btn-outline-secondary font-18"><i class="fa fa-pencil-alt"></i></a>
            <button type="button" class="btn btn-outline-secondary font-18"><i class="fa fa-trash-alt"></i></button>
        </div>
        <button type="button " class="btn btn-outline-secondary m-r-10 m-b-10"><i class="fa fa-sync-alt"></i></button>
        <div class="btn-group m-b-10" role="group">
            <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Mais </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Marcar Todas Como Lida</a></div>
        </div>
    </div>
    <!-- acoes Mensagens -->
  </div>

  <div class="row">
    <!-- Col table -->
    <div class="col-12 mx-auto mb-5 mt-5">
     <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Enviada em</th>
            <th>Remetente</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Acões</th>
          </tr>
        </thead>
        <tbody>
             <?php foreach ($messages as $message): ?>
            <tr>
                <?php /*<td><?= $this->Number->format($message->id) ?></td>*/ ?>
                <td><?= h($message->creted_at) ?></td>
                <?php /*<td><?= h($message->updated_at) ?></td> */ ?>
                <td><?= h($message->sender_name) ?></td>
                <td><?= h($message->sender_email) ?></td>
                <td><?= h($message->subject) ?></td>
               <td class="actions">
                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-eye']), ['action' => 'view', $message->id], ['class' => 'btn btn-info btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Ver', 'escape' => false]) ?>
                    <?php /* ?>
                    <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fas fa-edit']), ['action' => 'edit', $message->id], ['class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Editar', 'escape' => false]) ?>
                    <?php */ ?>

                    <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $message->id],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar a mensagem "{0}"?', $message->subject)]) ?>
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