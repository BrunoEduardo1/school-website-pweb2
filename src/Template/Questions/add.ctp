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
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($question) ?>
            <div class="form-group">
                <label for="question">Pergunta</label>
                <input type="text" name="question" class="form-control" placeholder="Ex: Como se cadastrar no site" required>
            </div>
            <div class="form-group">
                <label for="answer">Resposta</label>
                <textarea name="answer" placeholder="Resposta Para A Pergunta" class="form-control" style="resize: none;" rows="5" required></textarea>
            </div> 
            <div class="form-group">
               <button class="btn btn-success">Salvar</button>
                <a href="javascript:history.back(-1);" class="btn btn-primary">Voltar </a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
