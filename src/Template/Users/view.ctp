<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Conteúdo da página -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuários</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="<?=$this->Url->build('/users/edit/'.$user->id)?>"><i class="fas fa-edit"></i> Editar</a>
    </div>
</div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="h5"><i class="fas fa-address-card mr-2"></i>Informações do usuário</h5>
            </div>
            <div class="card-body p-5">
               <div class="row">
                    <div class="col-4 col-md-2 col-lg-1">
                        <h2 class="display-4"><i class="fas fa-user-circle"></i></h2>
                    </div>
                    <div class="col text-left my-auto">
                        <p class="h4"><?= h($user->login) ?></p>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li>Conta cadastrada em <?= h($user->creted_at->format('d/m/Y H:i')) ?>
                    <?= !empty($user->updated_at)? 'e atualizada em '. h($user->updated_at->format('d/m/Y H:i')) : '.' ?>
                    </li>
                </ul>
                <div class="text-right">
                    <a href="javascript:history.back(-1);" class="btn btn-outline-secondary btn-sm">Voltar </a>                   
                </div>
            </div>
                
        </div>
    </div>
</div>
<!-- /row -->


</main>
<!-- FIM Conteúdo da página -->
