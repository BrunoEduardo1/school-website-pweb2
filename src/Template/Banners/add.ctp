<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar banner</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($banner, ['type'=>'file']) ?>
           <div class="form-group">
                <input type="file" class="dropify" name="photo" data-max-file-size="2M"  data-min-width="640" data-height="300" data-allowed-file-extensions="jpg jpeg png psd" accept="image/*" required>
             </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="col">  
                        <label for="subtitle">Subtítulo</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <label for="link">Link <small> (Opcional)</small></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-external-link-alt"></i></div>
                    </div>
                     <input type="text" name="link" id="link" class="form-control" placeholder="">
                  </div>
            </div>
            <?= $this->Form->control('active', ['label' => 'público']);?>
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
