<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page[]|\Cake\Collection\CollectionInterface $pages
 */
?>
<!-- Conteúdo da página -->
<!-- Header -->
<?php if(!empty($principal)): ?>
  <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>
              <?= !empty($principal->text) ? mb_substr($principal->title ,0,40,'UTF-8') : ''; ?></strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">
              <?= !empty($principal->text) ? mb_substr($principal->text ,0,164,'UTF-8') : ''; ?>
            </p>

            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Mais Informações</a>
          </div>
        </div>
      </div>
    </header>
    <?php else: ?>
      <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>Your Favourite School is right next to you</strong>
              </h1>
              <hr>
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Mais Informações</a>
            </div>
          </div>
        </div>
      </header>
    <?php endif; ?>    
    <!-- Header -->
    <!-- Temos -->
    <?php if(!empty($temos)): ?>
      <section class="bg-primary" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <h2 class="section-heading text-white">
                <?= !empty($temos->title) ? mb_substr($temos->title ,0,32,'UTF-8') : '';?>
              </h2>
              <hr class="light my-4">
              <p class="text-faded mb-4"><?= !empty($temos->text) ? mb_substr($temos->text ,0,296,'UTF-8') : '';?></p>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Serviços!</a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <!-- /Temos -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Serviços</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
       
        <div class="row">
           <?php if(!empty($servicos)): ?>
            <?php foreach ($servicos as $servico) :?>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fa-4x <?= $servico->icon ?> text-primary mb-3 sr-icon-1"></i>
                <h3 class="mb-3"><?= $servico->name ?></h3>
                <p class="text-muted mb-0"><?= $servico->description ?></p>
              </div>
            </div>
            <?php endforeach; ?>
           <?php else: ?>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Galeria
                  </div>
                  <div class="project-name">
                    Descrição
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Confira Mais Imagens dos Projetos</h2>
        <a class="btn btn-light btn-xl sr-button disabled" href="#">Ver Mais</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Entre em contato!</h2>
            <hr class="my-4">
            <?php /* ?>
            <!-- <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p> -->
            <?php */ ?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?= $this->Form->create() ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Seu Nome *" required="required" data-validation-required-message="Please enter your name." name="nome">
                  
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Please enter your email address." name="email">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Assunto *" required="required" data-validation-required-message="Please enter your the subject." name="assunto">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Please enter a message." name="mensagem"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar</button>
              </div>
            </div>
            <?= $this->Form->end() ?>  
          </div>
        </div>
        
      </div>
    </section>
    <!-- Map -->
    <style type="text/css">
    /* Map */.map{height:36rem;}@media(max-width:992px){.map{height:75%;}}/*.map iframe{pointer-events: none;}*/
  </style>
  <section class="map pt-0">
   <div class="container">
    <div class="row">
     <div class="col-lg-12 text-center">
       <h2 class="section-heading">Onde Estamos</h2>
       <hr class="my-4">
     </div>
   </div>
 </div>
 <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
 <br/>
 <small>
  <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
</small>
</section>

<!-- FIM Conteúdo da página -->
