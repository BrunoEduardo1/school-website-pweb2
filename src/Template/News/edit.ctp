<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Notícia</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-trash']), ['action' => 'delete', $news->id],['class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar a página "{0}"?', $news->title)]) ?>
      </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($news, ['type' => 'file']) ?>
            <div class="form-group">
                <label for="question">Título</label>
                <input type="text" name="title" class="form-control" placeholder="Título da notícia" value="<?=$news->title?>" required>
            </div>
            <div class="form-group">
                <label for="answer">Conteúdo</label>
                <textarea name="content" placeholder="Conteúdo..." class="form-control" style="resize: none;" rows="5" required><?=$news->content?></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
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
                <div class="col">
                    <div class="row">
                        <?php foreach ($news->news_photos as $e_photo) : ?>
                            <div class="col-12 col-md-4 text-center">
                                <img src="<?= $this->Url->build('/public/news_pic/'.$e_photo->photo)?>" class="img-thumbnail">
                                <div class="text-center">
                                    <?= $this->Form->postLink($this->Html->tag('i', '', ['class' => 'fas fa-times text-danger']), ['controller' => 'NewsPhotos','action' => 'delete', $e_photo->id, $news->id],['class' => '', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom','title' => 'Excluir', 'escape' => false, 'confirm' => __('Deletar a Foto "{0}"?', $e_photo->photo)]) ?>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
