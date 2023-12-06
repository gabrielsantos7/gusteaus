<?php
$cssPath = PUBLIC_PATH . 'css/home.css';
$jsPath = PUBLIC_PATH . 'js/home.js';
$title = 'Home';

require VIEW_PATH .  'components/header.php'
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?=PUBLIC_PATH?>img/Home/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Gusteau’s</span> Restaurante</h2>
                <p class="animate__animated animate__fadeInUp">A verdadeira culinária francêsa, está mais perto de você. Conheça nosso serviço de pedidos e garanta a experiencia origiral</p>
                <div>
                  <a href="cardapio" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Cardápio</a>
                  <a href="cardapio#reserva" class="btn-book animate__animated animate__fadeInUp scrollto">Reserve uma Mesa</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?=PUBLIC_PATH?>img/Home/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Gusteau’s</span> Restaurante</h2>
                <p class="animate__animated animate__fadeInUp">A verdadeira culinária francêsa, está mais perto de você. Conheça nosso serviço de pedidos e garanta a experiencia origiral.</p>
                <div>
                    <a href="cardapio" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Cardápio</a>
                    <a href="cardapio#reserva" class="btn-book animate__animated animate__fadeInUp scrollto">Reserve uma Mesa</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?=PUBLIC_PATH?>img/Home/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Gusteau’s</span> Restaurante</h2>
                <p class="animate__animated animate__fadeInUp">A verdadeira culinária francêsa, está mais perto de você. Conheça nosso serviço de pedidos e garanta a experiencia origiral</p>
                <div>
                    <a href="cardapio" class="btn-menu animate__animated animate__fadeInUp scrollto">Nosso Cardápio</a>
                    <a href="cardapio#reserva" class="btn-book animate__animated animate__fadeInUp scrollto">Reserve uma Mesa</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Sobre Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?=PUBLIC_PATH?>/img/Home/about.jpg");'>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Sobre o <strong>Gusteau’s</strong></h3>
              <p>
              No Gusteau’s, valorizamos a excelência culinária, a paixão pela gastronomia e a satisfação dos clientes.  Cada prato é uma expressão de nossa dedicação à qualidade e à inovação, e cada refeição é uma celebração da boa comida e da hospitalidade calorosa. Venha compartilhar conosco essa experiência única e descubra o sabor da verdadeira hospitalidade
              </p>
              <p class="fst-italic">
              No Gusteau’s, valorizamos a excelência culinária, a paixão pela gastronomia e a satisfação dos clientes.  Cada prato é uma expressão de nossa dedicação à qualidade e à inovação, e cada refeição é uma celebração da boa comida e da hospitalidade calorosa. Venha compartilhar conosco essa experiência única e descubra o sabor da verdadeira hospitalidade
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Alta culinária Francesa.</li>
                <li><i class="bx bx-check-double"></i> Ambiente representativo e acolhedor.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
              Como dizia o historiador filósofo inglês Theodore Zeldin, "Para ser feliz e ter confiança em si mesmo, é preciso comer bem, saborear, provar e degustar pratos de prestígio e delicados."
              </p>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- ======= Porque nós Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Por que Excolher <span>Nosso Restaurante</span></h2>
          <p>O que podemos oferecer como parte da experiencia em nosso Gusteau’s</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Culinária Única</h4>
              <p>O Gusteau's oferece uma experiência culinária autêntica francesa, desde pratos clássicos renomados, como coq au vin e boeuf bourguignon, até sobremesas refinadas como crème brûlée e macarons. A qualidade dos ingredientes e a técnica culinária refletem a tradição francesa, proporcionando aos clientes uma verdadeira viagem gastronômica à França.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Ambiente Acolhedor</h4>
              <p>Além da comida excepcional, o ambiente do Gusteau's é projetado para oferecer uma experiência acolhedora e encantadora. A decoração remete à atmosfera parisiense, com uma combinação de elegância e charme. O serviço atencioso e a atmosfera convidativa fazem com que os clientes se sintam bem-vindos e confortáveis durante toda a refeição.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Compromisso e Qualidade</h4>
              <p>No Gusteau's, há um compromisso inabalável com a qualidade dos pratos oferecidos. Os ingredientes frescos e sazonais são cuidadosamente selecionados para garantir o sabor autêntico e a excelência em cada prato servido. Os clientes podem confiar na consistência e na qualidade dos pratos em cada visita.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Especiais Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check nosso <span>Especiais</span></h2>
          <p>Descubra o sabor da temporada em cada garfada - Experimente os nossos pratos especiais que estão conquistando paladares agora mesmo!</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Entrada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Prato Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Salada</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Sobremesa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Drinks</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Escalope de Foie Gras</h3>
                    <p class="fst-italic">Foie gras (patê de fígado de pato/ganso) · 1 figo em calda · 4 rabanete mini · 30 gramas de Chocolate · 50 mililitros de suco de laranja</p>
                    <p>O foie gras, ou o fígado de ganso (ou pato), é patrimônio cultural e gastronômico francês. Ele foi descoberto pelos egípcios, na França, era comum que os camponeses de antigamente se alimentassem de foie gras durante todo o ano por causa da fácil conservação e para se aquecerem nos dias frios, graças à gordura do alimento. Depois que caiu no gosto de alguns reis, como Luis XVI, ele virou uma iguaria gourmet.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?=PUBLIC_PATH?>img/Home/Especiais/Especial-FoieGras.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Eventos Section ======= -->
    <section id="events" class="events">
      <div class="container" style='background-image: url("<?=PUBLIC_PATH?>/img/Home/Events/events-bg.jgp")'>

        <div class="section-title">
          <h2>Organize seu <span>Evento</span> em nosso Restaurante</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="<?=PUBLIC_PATH?>img/Home/Events/event-private.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Festas Particulares</h3>
                  <div class="price">
                    <p><span>R$2860</span></p>
                  </div>
                  <p class="fst-italic">
                  Celebre em Grande Estilo - Alugue o Nosso Espaço
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Local Espaçoso Disponível para Eventos Privados</li>
                    <li><i class="bi bi-check-circle"></i> Buffet a combinar</li>
                    <li><i class="bi bi-check-circle"></i> Entre em contato conosco hoje para reservar o seu evento inesquecível!</li>
                  </ul>
                  <p>Destaque recursos especiais, como decoração incluída, equipamento de som, iluminação, etc.</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Imagens Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Algumas fotos do <span>Nosso Restaurante</span></h2>
          <p>Buscamos proporcionar o ambiente acolhedor, lembrando e trazendo caracteristicas da velha cozinha francesa </p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-1.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-2.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-3.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-4.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-5.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-5.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-6.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-7.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-8.png" class="gallery-lightbox">
                <img src="<?=PUBLIC_PATH?>img/Home/Gallery/gallery-8.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Nossos <span>Chefs </span>Profissionais</h2>
          <p>Chefs Capacitados e empenhados a recriar a melhor colinária francesa.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?=PUBLIC_PATH?>img/Home/Chefs/Colette-Tatou.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Colette Tatou</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?=PUBLIC_PATH?>img/Home/Chefs/Alfredo-Linguini.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Alfredo Linguini</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?=PUBLIC_PATH?>img/Home/Chefs/Host.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Host</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Avaliações Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?=PUBLIC_PATH?>img/Home/Assessment/Ego.png" class="testimonial-img" alt="">
                <h3>Anton Ego</h3>
                <h4>Crítico</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Em muitos aspectos, o trabalho de um crítico é fácil. Arriscamos muito pouco, mas desfrutamos de uma posição sobre aqueles que oferecem seu trabalho e a si mesmos ao nosso julgamento. Nós prosperamos com críticas negativas, que são divertidas de escrever e de ler Mas a amarga verdade que nós, críticos, devemos enfrentar é que, no grande esquema das coisas, o pedaço médio de lixo é provavelmente mais significativo do que a nossa crítica que o designa assim. Mas há momentos em que um crítico realmente arrisca alguma coisa, e isso é em a descoberta e defesa do novo. O mundo muitas vezes não é gentil com novos talentos, novas criações. O novo precisa de amigos."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>


    <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </main><!-- End #main -->


<?php require VIEW_PATH .  'components/footer.php'?>