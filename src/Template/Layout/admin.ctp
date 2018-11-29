<?php
$titulocms = 'Área Administrativa';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $titulocms ?> - 
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <?= $this->Html->css('style.css') ?> -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('dashboard.css') ?>
    <link href="<?=$this->Url->build('/font/dropify/dropify.ttf')?>" rel="stylesheet"> 
    <link href="<?=$this->Url->build('/font/dropify/dropify.woff')?>" rel="stylesheet"> 
    <?= $this->Html->css('dropify.css') ?>
    <!-- Icones fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   
    <div class="container-fluid">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow navbar-expand-lg">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Crime School Admin</a>
            <div class="collapse navbar-collapse" id="navHide">
                    <div class="col-12 col-md-10 col-lg-11">
                        <input class="form-control pt-2" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
                    </div>
                    <div class="col">
                        <ul class="navbar-nav px-3">
                            <li class="nav-item text-nowrap">
                            <a class="nav-link" href="<?=$this->Url->build('/users/logout')?>">Sair</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navHide" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </nav>   

        <!-- side bar -->
        <?= $this->element('sidebar')?>
        <!-- [fim] side bar -->
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
<footer>
</footer>
<?= $this->Html->script('feather.min.js') ?>
<?= $this->Html->script('jquery.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('popper.min.js') ?>
<?= $this->Html->script('dropify.js') ?>
<?= $this->Html->script('basics.js') ?>
  <script type="text/javascript">
    feather.replace()
  </script>
</body>
</html>
