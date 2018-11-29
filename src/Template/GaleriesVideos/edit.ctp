<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaleriesVideo $galeriesVideo
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar vídeo</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($galeriesVideo) ?>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-external-link-alt"></i></div>
                    </div>
                     <input type="text" name="link" id="link" class="form-control" placeholder="Embed para o vídeo" required value="<?=h($galeriesVideo->link) ?>">
                  </div>
            </div>
            <div class="form-group">
                <label for="caption">Legenda</label>
                <textarea name="caption" class="form-control" style="resize: none;" rows="5" required><?=$galeriesVideo->caption ?></textarea>
            </div> 
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="galery_id">Galerias</label>
                        <select class="form-control" name="galery_id">
                            <option value=''>Criar Nova Galeria</option>
                            <?php foreach ($galeries as $galery) : ?>
                                <option value="<?=$galery->id?>" <?= ($galeriesVideo->galery_id == $galery->id) ? 'selected': '';?> ><?=$galery->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col">  
                        <label for="new_galery">Nova galeria</label>
                        <input type="text" name="new_galery" id="new_galery" class="form-control">
                    </div>
                </div>
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
