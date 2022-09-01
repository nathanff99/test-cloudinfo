<template>
  <footer class="canidelo-footer">
    <div class="canidelo-container px-9 py-6 text-white">
      <div class="row text-center text-xl-start">
        <div class="col-12 col-md-6 col-xl-3">
          <h5 class="text-uppercase fw-semibold mb-4">A Farmácia</h5>

          <ul class="list-unstyled mb-4">
            <li class="fw-semibold"><a href="#">Sobre Nós</a></li>
            <li class="fw-semibold"><a href="#">Serviços</a></li>
            <li class="fw-semibold mt-2">
              Rua da Fitela, 24/26<br />
              4400-710 Canidelo
            </li>
          </ul>

          <h5 class="text-uppercase fw-semibold mb-4">Contactos Loja Online</h5>

          <ul class="list-unstyled mb-4">
            <li class="fw-semibold">914 064 192</li>
            <li class="fw-semibold">(2ª a 6ª Feira das 10h-12h e 14h-18h)</li>
            <li class="fw-semibold">geral@farmaciadecanidelo.pt</li>
          </ul>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
          <h5 class="text-uppercase fw-semibold mb-4">Apoio ao Cliente</h5>

          <ul class="list-unstyled">
            <li class="fw-semibold"><a href="#">Como encomendar</a></li>
            <li class="fw-semibold"><a href="#">Envio de encomendas</a></li>
            <li class="fw-semibold"><a href="#">Métodos de pagamento</a></li>
            <li class="fw-semibold"><a href="#">Perguntas frequentes</a></li>
            <li class="fw-semibold"><a href="#">Termos e Condições</a></li>
            <li class="fw-semibold"><a href="#">Política de Privacidade</a></li>
          </ul>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
          <h5 class="text-uppercase fw-semibold mb-4">Infarmed</h5>

          <ul class="list-unstyled">
            <li class="fw-semibold">
              Autorizado a disponibilizar<br />medicamentos não sujeitos a
              receita<br />
              médica através da internet pelo<br />INFARMED, I.P.
            </li>
            <li class="fw-semibold mt-2 mb-4">
              <a href="#">
                <img src="/images/authorization.webp" alt="Autorização" />
              </a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
          <h5 class="text-uppercase fw-semibold mb-4">
            Receba as nossas novidades e promoções
          </h5>

          <div class="input-group mb-4">
            <input
              type="text"
              class="form-control fw-semibold"
              placeholder="EMAIL"
            />
            <button class="btn text-white" type="button">
              <i class="iconify" data-icon="mdi-send-outline"></i>
            </button>
          </div>

          <h5 class="text-uppercase fw-semibold mb-4">SIGA-NOS</h5>

          <ul
            class="
              canidelo-footer__social
              list-unstyled
              d-flex
              justify-content-center justify-content-xl-start
            "
          >
            <li class="me-3">
              <a href="#">
                <i class="iconify" data-icon="mdi-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="iconify" data-icon="mdi-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "canidelo-footer",
};
</script>

<style lang="scss" scoped>
.canidelo-footer {
  background: #50ae32;

  &__social {
    li {
      border: 1px solid #fff;
      border-radius: 50%;
      width: 43px;
      height: 43px;
      line-height: 42px;
      font-size: 24px;
      text-align: center;
    }
  }

  a {
    color: #fff;
  }

  .input-group {
    height: 50px;

    .form-control {
      border-radius: 0;
    }
    .btn {
      border-radius: 0;
      width: 60px;
      background-color: #377d22 !important;
      border-color: #377d22 !important;

      svg {
        transform: rotate(-45deg) !important;
        font-size: 22px;
      }
    }
  }
}
</style>