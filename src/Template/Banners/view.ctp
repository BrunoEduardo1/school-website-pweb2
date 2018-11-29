<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Banner</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/banners/edit/'.$banner->id)?>">Editar Banner</a>  
      </div>
  </div>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <div id="banners" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-responsive" src="<?=$this->Url->build('/public/banners/'.$banner->photo)?>" alt="<?= h($banner->title) ?>">
              <div class="carousel-caption d-none d-md-block">
                <h5><?= h($banner->title) ?></h5>
                <p><?= h($banner->subtitle) ?></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-responsive" src="<?=$this->Url->build('/public/banners/'.$banner->photo)?>" alt="<?= h($banner->title) ?>">
              <div class="carousel-caption d-none d-md-block">
                <h5>Título: <?= h($banner->title) ?></h5>
                <p>Subtitulo: <?= h($banner->subtitle) ?></p>
              </div>
            </div>

          </div>
              <a class="carousel-control-prev" href="#banners" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#banners" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

    </div> 
</div>
<!-- /row -->
<div class="row mb-3 mt-3">
    <div class="col-12 text-center">
        <a href="javascript:history.back(-1);" class="btn btn-primary">Voltar</a>
    </div> 
</div> 


</main>
<!-- FIM Conteúdo da página -->
