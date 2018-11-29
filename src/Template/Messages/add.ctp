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
              
            </div>   
            <?= $this->Form->create($message) ?>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" name="sender_name" placeholder="Remetente" required class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" name="sender_email" placeholder="Email do Remetente" required class="form-control">
                        </div>
                    </div>
                     <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Assunto" required class="form-control">
                        </div>
                    </div>
                     <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="Conteúdo Da Mensagem"  style="resize: none;" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button type="submit" class="btn btn-success btn-sm">Salvar</button></div>
                    <div class="col text-right"> <a href="javascript:history.back(-1);" class="btn btn-outline-secondary btn-sm">Voltar </a>    </div>
                </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
</div>
 <div class="row">
        <div class="col text-right"><small>*Página apenas para testes</small> </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->

