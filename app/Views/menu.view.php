<?php
$cssPath = './public/css/menu.css';
$jsPath = './public/js/menu.js';
$title = 'Cardápio';
require VIEW_PATH .  'components/header.php'
?>

<main>
  <section>
    <div class="ctn-image text-center">
      <div class="txt-img my-5">
        <h2 class="text-center font-satisfy" id="h2-img">
          Descubra Sabores Surpreendentes <br />
          em Nosso <span class="text-yellow">Cardápio</span>
        </h2>
        <p id="p-top">
          Explore uma jornada culinária repleta de pratos <br />incríveis,
          preparados com ingredientes frescos e <br />
          paixão pela culinária. Deixe-se levar pela delícia de <br />
          cada sabor que oferecemos.
        </p>
      </div>
    </div>
  </section>

  <section>
    <ul class="d-flex gap-2 align-items-center justify-content-center list-unstyled my-5" id="menu-itens">
      <li class="px-3 btn item-active">Mais vendidos</li>
      <li class="px-3 btn">Espaguetes</li>
      <li class="px-3 btn">Saladas</li>
      <li class="px-3 btn">Churrasco</li>
      <li class="px-3 btn">Bebidas</li>
      <li class="px-3 btn">Sobremesas</li>
    </ul>
  </section>

  <section class="container-fluid" id="cardapio">
    <div class="row my-5 row-items">
      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-items">
      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-center">
          <div class="card-img card-img-top">
            <img class="img-fluid"
              src="https://imgs.search.brave.com/9Y2DU7X7TEIdKE6x_uUsBUTp9v10QLN30YFnsddgUus/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9yZWNl/aXRpbmhhcy5jb20u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTYvMDYvYW1pcmFs/aS1taXJoYXNoZW1p/YW4tSnFudVdsSG1E/ZkUtdW5zcGxhc2gt/MS1zY2FsZWQuanBn"
              alt="Hambúrguer Francês" />
          </div>
          <div class="card-body">
            <p class="card-text text-center font-satisfy">
              Hambúrguer Francês
            </p>
            <p class="text-center text-yellow price">R$ 12,90</p>
            <p class="selected-quantity"></p>

            <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline">
                <i class="bi bi-dash"></i>
              </button>
              <button type="button" class="btn btn-middle" disabled>
                0
              </button>
              <button type="button" class="btn btn-outline">
                <i class="bi bi-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <button class="btn btn-yellow item-active px-5 py-2" id="btn-finalizar" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-bag-check-fill mr-2"></i> Finalizar pedido
      </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">
              ...
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                class="bi bi-x-lg"></i></button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-success">
              Prosseguir
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container my-5">
      <div class="row">
        <img src="img/Img-Delivery.png" alt="Imagem de Delivery" class="col col-md-5" id="img-delivery">
        <div class="col col-md-7" id="delivery-details">
          <h3 class="font-satisfy text-yellow">
            Serviço de Delivery: Uma Experiência de Qualidade
          </h3>
          <p class="mt-5">Oferecemos um serviço de delivery que vai além da simples entrega de alimentos. Valorizamos a
            qualidade, a rapidez e a segurança em cada pedido que entregamos à sua porta. Nossa equipe de funcionários
            altamente capacitados é dedicada a garantir que sua experiência de delivery seja tão satisfatória quanto a
            refeição em si. Entregamos não apenas comida, mas também a promessa de um serviço de alta qualidade e a
            garantia de sabor e conveniência em cada pedido.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid" id="ctn-qualidades">
      <div class="row my-5 text-center justify-content-center">
        <div class="card-qualidades col-12 col-md-3">
          <div>
            <h3 class="font-satisfy text-yellow py-3">
              Qualidade Superior
            </h3>
            <i class="bi bi-hand-thumbs-up"></i>
            <p class="py-3">
              Nossa busca incessante pela excelência reflete-se na qualidade
              de cada prato que entregamos. Com ingredientes frescos e
              preparo cuidadoso, garantimos que sua refeição mantenha o
              mesmo padrão elevado que você encontra em nosso restaurante.
              Experimente a diferença da qualidade superior em cada pedaço.
            </p>
          </div>
        </div>

        <div class="card-qualidades col-12 col-md-3">
          <div>
            <h3 class="font-satisfy text-yellow py-3">
              Segurança e Confiança
            </h3>
            <i class="bi bi-lock"></i>
            <p class="py-3">
              Sua segurança é nossa prioridade. Garantimos que todas as
              medidas de higiene e segurança sejam rigorosamente seguidas,
              desde a preparação até a entrega de sua refeição. Com
              funcionários capacitados e protocolos de segurança sólidos,
              você pode confiar em nós para uma experiência de delivery sem
              preocupações.
            </p>
          </div>
        </div>

        <div class="card-qualidades col-12 col-md-3">
          <div>
            <h3 class="font-satisfy text-yellow py-3">
              Rapidez e Conveniência
            </h3>
            <i class="bi bi-lightning-charge"></i>
            <p class="py-3">
              A vida moderna exige praticidade, e nosso serviço de delivery
              é a solução perfeita. Com uma entrega rápida e eficiente, você
              pode desfrutar de nossos pratos deliciosos no conforto de sua
              casa. Não comprometemos a qualidade, mesmo quando a
              conveniência é a prioridade.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid" id="ctn-form-reserva">
      <form action="" class="my-5" id="form-reserva">
        <h2 class="text-center font-satisfy text-yellow pt-5">
          Reserve uma mesa
        </h2>

        <div class="row col-12 mt-5 mb-3">
          <div class="col-12 col-md-4">
            <label for="nome" class="form-label">Nome completo:</label>
            <input required type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="telefone" class="form-label">Telefone:</label>
            <input required type="text" inputmode="tel" name="telefone" id="telefone" class="form-control"
              placeholder="Informe seu telefone..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="email" class="form-label">E-mail:</label>
            <input required type="email" class="form-control" name="email" id="email"
              placeholder="Informe seu endereço de e-mail..." />
          </div>
        </div>

        <div class="row col-12">
          <div class="col-12 col-md-4">
            <label for="data" class="form-label">Data:</label>
            <input required type="date" name="data" id="data" class="form-control" placeholder="Escolha uma data..." />
          </div>

          <div class="col-12 col-md-4">
            <label for="hora" class="form-label">Horário:</label>
            <input required type="time" name="hora" id="hora" class="form-control" placeholder="Escolha um horário..."
              min="11:00" />
          </div>

          <div class="col-12 col-md-4">
            <label for="num-pessoas" class="form-label">Número de pessoas:</label>
            <input required type="number" class="form-control" name="num-pessoas" id="num-pessoas"
              placeholder="Informe o número de pessoas..." min="1" />
          </div>
        </div>

        <div class="row col-12 my-3">
          <div class="col-12">
            <label for="observacoes" class="form-label">Informações adicionais ou preferências:</label>
            <textarea rows="5" class="form-control" name="observacoes" id="observacoes"
              placeholder="(Opcional) adicione informações extras sobre sua reserva, como decoração especial, necessidades dietéticas, tipo de ocasião, etc."></textarea>
          </div>
        </div>

        <div class="row flex align-items-center justify-content-center">
          <button type="submit" class="px-3 py-1 btn mt-4 item-active btn-yellow">
            Verificar disponibilidade
          </button>
        </div>
      </form>
    </div>
  </section>
</main>

<?php require VIEW_PATH .  'components/footer.php'?>