    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Crime School 2018</span>
          </div>
        <?php if(!empty($informacao)): ?>
          <div class="col-md-4 text-center">
            <ul class="l;ist-inline social-buttons">
            <?php if(!empty($informacao->twitter)): ?>
              <li class="list-inline-item">
                <a href="#" title="<?= $informacao->twitter ?>" data-toggle="tooltip" data-placement="top" >
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if(!empty($informacao->facebook)): ?>
              <li class="list-inline-item">
                <a href="#" title="<?= $informacao->facebook ?>" data-toggle="tooltip" data-placement="top" >
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if(!empty($informacao->phone)): ?>
              <li class="list-inline-item">
                <a href="#" title="<?= $informacao->phone ?>" data-toggle="tooltip" data-placement="top" >
                  <i class="fas fa-phone"></i>
                </a>
              </li>
            <?php endif; ?>
            <?php if(!empty($informacao->instgram)): ?>
              <li class="list-inline-item">
                <a href="#" title="<?= $informacao->instgram ?>" data-toggle="tooltip" data-placement="top" >
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            <?php endif; ?>
            </ul>
          </div>
        <?php else: ?>
            <div class="col-md-4"></div>
        <?php endif; ?>

          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Política de Privacidade</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Termos de Uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
