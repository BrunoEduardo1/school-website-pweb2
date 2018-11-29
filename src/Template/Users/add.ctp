<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar Usuário</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($user) ?>
            <?= $this->Form->control('login',[ 'label' => 'Usuário','class'=>'form-control', 'required' => 'required', 'placeholder' => 'Ex: hood2018'])?>
            <div class="invalid-feedback text-center">Por favor insira o nome do usuário</div>
            <?= $this->Form->control('password', ['label'=> 'Senha', 'class'=>'form-control', 'required' => 'required', 'placeholder' => 'Senha']) ?>
            <div class="form-group">
             <button class="btn btn-success">Salvar</button>
             <a class="btn btn-primary" href="javascript:history.back(-1);">Voltar</a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
