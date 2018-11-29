<?php $currentpage = $this->request->param('controller'); ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
   <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Pages')? 'active': '';?>" href="<?= $this->Url->build('/pages')?>">
        <i class="fa fa-home"></i>
        Páginas
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Users')? 'active': '';?>" href="<?= $this->Url->build('/users')?>">
        <i class="fa fa-users"></i>
        Usuários
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'News')? 'active': '';?>" href="<?= $this->Url->build('/news')?>">
        <i class="fa fa-newspaper"></i>
        Notícias
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'GaleriesVideos')? 'active': '';?>" href="<?= $this->Url->build('/galeries-videos')?>">
        <i class="fa fa-video"></i>
        Galeria de vídeos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'GaleriesPhotos')? 'active': '';?>" href="<?= $this->Url->build('/galeries-photos')?>">
        <i class="fa fa-image"></i>
        Galeria de fotos
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Informations')? 'active': '';?>" href="<?= $this->Url->build('/informations')?>">
        <i class="fa fa-info"></i>
        Informações básicas
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Messages')? 'active': '';?>" href="<?= $this->Url->build('/messages')?>">
        <i class="fa fa-envelope"></i>
        Fale conosco
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Questions')? 'active': '';?>" href="<?= $this->Url->build('/questions')?>">
        <i class="fa fa-question"></i>
        FAQ
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Banners')? 'active': '';?>" href="<?= $this->Url->build('/Banners')?>">
        <i class="fa fa-images"></i>
        Banners <!-- <span class="sr-only">(current)</span> -->
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link <?= (!empty($currentpage) && $currentpage == 'Services')? 'active': '';?>" href="<?= $this->Url->build('/services')?>">
        <i class="fas fa-desktop"></i>
        Serviços <!-- <span class="sr-only">(current)</span> -->
      </a>
    </li>
  </ul>
</div>
</nav>
<?php
//collapse sidebar 
//navbar-expand-lg
//collapse navbar-collapse" id="naveee" ?>