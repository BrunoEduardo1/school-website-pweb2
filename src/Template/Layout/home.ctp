<?php
$titulopag = 'Crime School';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bruno Eduardo -->
    <title>
        <?= $titulopag ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>    
    <!-- Custom fonts for this template -->
    <link href="<?=$this->Url->build('/webroot/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?=$this->Url->build('/webroot/vendor/magnific-popup/magnific-popup.css')?>" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <?= $this->Html->css('creative.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top">
        <?= $this->element('topbar') ?>
        <?= $this->Flash->render() ?>
        <div>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <?= $this->element('footer') ?>

<?= $this->Html->script('jquery.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('bootstrap.bundle.min.js') ?>
<?= $this->Html->script('popper.min.js') ?>
<!-- Plugin JavaScript -->
<script src="<?=$this->Url->build('/webroot/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
<script src="<?=$this->Url->build('/webroot/vendor/scrollreveal/scrollreveal.min.js')?>"></script>
<script src="<?=$this->Url->build('/webroot/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
<?= $this->Html->script('creative.min.js') ?>

</body>
</html>
