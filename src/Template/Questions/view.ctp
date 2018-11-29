<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Perguntas Frequentes</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/questions/edit/'.$question->id)?>"><i class="fas fa-edit"></i> Editar</a>
    </div>
</div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <?= h($question->question) ?>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p> <?= h($question->answer) ?></p>
              </blockquote>
              <div class="text-right">
                <a href="javascript:history.back(-1);" class="btn btn-outline-secondary btn-sm">Voltar </a>                   
            </div>
        </div>

    </div>
</div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
