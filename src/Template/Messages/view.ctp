<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mensagem</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
     <!-- acoes Mensagens -->
    <div class="card-body text-right">
        <div class="btn-group m-b-5" role="group" aria-label="Acões das Mensagens">
            <button type="button" class="btn btn-outline-secondary font-18"><i class="fa fa-exclamation-circle"></i></button>
            <a href="<?=$this->Url->build('/messages/add')?>" class="btn btn-outline-secondary font-18"><i class="fa fa-pencil-alt"></i></a>
            <button type="button" class="btn btn-outline-secondary font-18"><i class="fa fa-trash-alt"></i></button>
        </div>
        <button type="button " class="btn btn-outline-secondary m-r-10 m-b-10"><i class="fa fa-sync-alt"></i></button>
        <div class="btn-group m-b-10" role="group">
            <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Mais </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Marcar Todas Como Lida</a></div>
        </div>
    </div>
    <!-- acoes Mensagens -->
</div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <?= h($message->subject) ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4 col-md-2 col-lg-1">
                        <h2 class="display-4"><i class="fas fa-user-circle"></i></h2>
                    </div>
                    <div class="col text-left my-auto">
                        <?= h($message->sender_name) ?><br>
                        <?= h($message->sender_email) ?>
                    </div>
                  
                </div>
                <div class="row mt-3">
                    <div class="col-md-11 text-justify mx-auto">
                        <p> <?= h($message->content) ?></p>
                    </div>
                </div>
                 <div class="row">
                    <div class="col"><a href="mailto:<?= h($message->sender_email)?>" class="btn btn-sm btn-outline-secondary"><i class="fas fa-reply"></i> Responder</a></div>
                    <div class="col text-right"> <a href="javascript:history.back(-1);" class="btn btn-outline-secondary btn-sm">Voltar </a>    </div> 
                </div>
        </div>

    </div>
</div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
