<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar Serviço</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($service) ?>
            <?= $this->Form->control('name',[ 'label' => 'Nome','class'=>'form-control my-1', 'required' => 'required', 'placeholder' => 'Nome do serviço'])?>
            <?= $this->Form->control('icon', ['label'=> 'Icone', 'class'=>'form-control my-1', 'required' => 'required', 'placeholder' => 'fab fa-twitter']) ?>
            
            <?= $this->Form->control('description', ['label'=> 'Descrição', 'class'=>'form-control my-1', 'required' => 'required', 'placeholder' => 'Descrição do serviço']) ?>
            <div class="form-group my-2">
             <button class="btn btn-success">Salvar</button>
             <a class="btn btn-primary" href="javascript:history.back(-1);">Voltar</a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
