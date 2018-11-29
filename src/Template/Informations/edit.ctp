<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Information $information
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Informações básicas</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        
    </div>
</div>
</div>
<div class="row">
    <div class="col-10 mx-auto">
        <?= $this->Form->create($information) ?>
        <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <div class="col-auto">
                          <label class="sr-only" for="email">Email</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="far fa-envelope"></i></div>
                            </div>
                             <input type="text" name="email" id="email" class="form-control" placeholder="Email" <?= !empty($information->email) ? 'value="'.$information->email.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>

                 </div>
                 <div class="col-12 col-md-6">
                    <div class="form-group">
                         <div class="col-auto">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                            </div>
                              <input type="text" name="twitter" class="form-control" placeholder="Twitter" <?= !empty($information->twitter) ? 'value="'.$information->twitter.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                     <div class="form-group">
                        <div class="col-auto">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                            </div>
                              <input type="text" name="instgram" class="form-control" placeholder="Instagram" <?= !empty($information->instgram) ? 'value="'.$information->instgram.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <div class="col-auto">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                            </div>
                              <input type="text" name="facebook" class="form-control" placeholder="Facebook" <?= !empty($information->facebook) ? 'value="'.$information->facebook.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                         <div class="col-auto">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fab fa-youtube"></i></div>
                            </div>
                             <input type="text" name="youtube" class="form-control" placeholder="youtube" <?= !empty($information->youtube) ? 'value="'.$information->youtube.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">            
                    <div class="form-group">
                        <div class="col-auto">
                          <label class="sr-only" for="phone">Número</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-phone"></i></div>
                            </div>
                              <input type="text" name="phone" class="form-control" placeholder="Número" <?= !empty($information->phone) ? 'value="'.$information->phone.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">           
                    <div class="form-group">
                        <div class="col-auto">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                            </div>
                               <input type="text" name="adress" class="form-control" placeholder="Endereço" <?= !empty($information->adress) ? 'value="'.$information->adress.'"' : '' ;?>>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="form-group">
                <button class="btn btn-success" type="submit">Salvar</button>
            </div> 
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- /row -->
</main>
<!-- FIM Conteúdo da página -->
