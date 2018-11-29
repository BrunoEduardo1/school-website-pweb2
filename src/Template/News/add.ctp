<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar Notícia</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($news, ['type' => 'file']) ?>
            <div class="form-group">
                <label for="question">Título</label>
                <input type="text" name="title" class="form-control" placeholder="Título da notícia" required>
            </div>
            <div class="form-group">
                <label for="answer">Conteúdo</label>
                <textarea name="content" placeholder="Conteúdo..." class="form-control" style="resize: none;" rows="5" required></textarea>
            </div>
            <div class="form-group text-center">
                <label class="btn btn-outline-secondary" for="photos">
                 
                  <i class="fas fa-upload"></i> Outras fotos<input type="file" name="extra[]" id="photos" accept="image/*" onchange="print_(this.files)" multiple hidden>
                </label>
                <div id="imgs"></div>

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

