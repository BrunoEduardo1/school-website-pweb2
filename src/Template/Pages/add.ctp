<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Adicionar Página</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>
    <div class="row">
        <div class="col-10 mx-auto">
            <?= $this->Form->create($page, ['type' => 'file']) ?>   
                <div class="form-group">
                    <?= $this->Form->control('title',[ 'label' => 'Título *','class'=>'form-control', 'required' => 'required', 'placeholder' => 'Digite o título'])?>
                     <div class="invalid-feedback text-center">Por favor insira o título da página</div>
                </div>

                <div class="form-group">
                    <input type="file" class="dropify" name="photo" data-max-file-size="2M"  data-min-width="640" data-height="300" data-allowed-file-extensions="jpg jpeg png psd" accept="image/*">
                 </div>

                <div class="form-group">
                    <label for="text">Texto da página *</label>
                    <textarea class="form-control mb-2" name="text" id="text" style="resize: none;" rows="5" required></textarea>
                </div>
                
                <div class="form-group">
                  <?= $this->Form->control('slug', ['label'=> 'Fácil acesso *', 'class'=>'form-control', 'required' => 'required', 'placeholder' => 'https://seusite.com/facil-acesso']) ?>
                </div>

                <div class="form-group">
                    <label class="btn btn-outline-secondary" for="photos">
                        <i class="fas fa-upload"></i> Outras fotos <input type="file" name="extra[]" id="photos" accept="image/*" onchange="$('#upload-file-info').html(this.files[files.length-1].name);$('#upload-file-info').fadeIn();" multiple hidden>
                    </label>
                    <span class='label label-info' id="upload-file-info" style="display: none;"></span>
                    <?php /*<label for="photos">Outras fotos</label> <input type="file" name="photos" id="photos" multiple> */ ?>  
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Salvar</button>
                    <a class="btn btn-primary" href="javascript:history.back(-1);">Voltar</a>
                </div>
            <?= $this->Form->end() ?>
        </div>     
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
