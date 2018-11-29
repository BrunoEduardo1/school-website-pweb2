<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaleriesPhoto $galeriesPhoto
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar foto</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($galeriesPhoto, ['type'=>'file']) ?>
           <div class="form-group">
                <input type="file" class="dropify" name="photo" data-max-file-size="2M"  data-min-width="640" data-height="300" data-allowed-file-extensions="jpg jpeg png psd" accept="image/*" required>
             </div>
            <div class="form-group">
                <label for="caption">Legenda</label>
                <textarea name="caption" class="form-control" style="resize: none;" rows="3" required></textarea>
            </div> 
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="galery_id">Galerias</label>
                        <select class="form-control" name="galery_id">
                            <option selected value=''>Selecione uma galeria ou crie um nova.</option>
                            <?php foreach ($galeries as $galery) : ?>
                                <option value="<?=$galery->id?>"><?=$galery->name?></option>
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
               <button class="btn btn-success">Salvar</button>
                <a href="javascript:history.back(-1);" class="btn btn-primary">Voltar </a>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
