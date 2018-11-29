<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Usuário</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $user->id],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar o usuário "{0}"?', $user->login)]) ?>
    </div>
</div>
</div>
<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($user) ?>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" placeholder="Nome do usuário" required value="<?= $user->login ?>">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha para o usuário" required value="<?= $user->password ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Salvar </button>
                <a href="javascript:history.back(-1);" class="btn btn-primary">Voltar </a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
