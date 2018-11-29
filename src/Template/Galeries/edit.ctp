<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Galery $galery
 */
$galeryType = ($galery->type == 'VIDEOS') ? 0 : 1;
?>

<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar galeria</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $galery->id, $galeryType],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','galeriesVideos' => 'Excluir', 'escape' => false, 'confirm' => __('Deseja deletar a galeria "{0}"?', $galery->name)]) ?>
    </div>
</div>
</div>
<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($galery) ?>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control"required value="<?=h($galery->name) ?>">
            </div>
            <div class="form-group">
                <label for="content">Descrição</label>
                <textarea name="content" class="form-control" style="resize: none;" rows="5"><?=$galery->content ?></textarea>
            </div> 
            <div class="form-group">
               <button class="btn btn-success" type="submit">Salvar</button>
                <a href="javascript:history.back(-1);" class="btn btn-primary">Voltar </a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
