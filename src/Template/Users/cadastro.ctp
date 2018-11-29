<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
              <?= $this->Form->create($Login,['class' => 'form-signin']) ?>
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Usuário" required autofocus>
                <label for="inputEmail">Usuário</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
               <div class="row">
                <div class="col">
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembrar senha</label>
                  </div>
                </div>
              </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Cadastrar</button>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase " href="<?= $this->url->build('/admin/login'); ?>">Voltar</a>
            <?= $this->Form->end() ?>
          </div>
        </div>
      </div>
    </div>
  </div>