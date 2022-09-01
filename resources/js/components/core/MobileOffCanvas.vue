<template>
  <div
    id="offcanvasNavbar"
    class="offcanvas offcanvas-start d-flex d-xl-none"
    tabindex="-1"
    aria-labelledby="offcanvasNavbarLabel"
  >
    <div class="offcanvas-header">
      <img
        src="/images/logo-white.webp"
        alt="Farmácia Canidelo"
      >
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      />
    </div>
    <div class="offcanvas-body">
      <ul class="offcanvas__list list-unstyled">
        <li>
          <a href="#">
            <i
              class="iconify"
              data-icon="mdi-account-outline"
            /> Olá Nelma
          </a>
        </li>
        <li>
          <a href="#">
            <i
              class="iconify"
              data-icon="mdi-cart-outline"
            /> Carrinho
          </a>
        </li>
        <li>
          <a href="#">
            <i
              class="iconify"
              data-icon="mdi-cards-heart-outline"
            />
            Favoritos
          </a>
        </li>
      </ul>

      <ul class="offcanvas__list list-unstyled">
        <li>
          <a
            href="#"
            @click="showCategories = !showCategories"
          >
            Categorias
            <i
              class="iconify"
              data-icon="mdi-chevron-down"
            />
          </a>
        </li>
        <transition name="fade">
          <li v-if="showCategories">
            <ul class="offcanvas__categories list-unstyled">
              <li
                v-for="(category, index) in 5"
                :key="index"
              >
                <a href="#">&bull; Categoria</a>
              </li>
            </ul>
          </li>
        </transition>
        <li>
          <a href="#"> Promoções </a>
        </li>
        <li>
          <a href="#"> Marcas </a>
        </li>
        <li>
          <a href="#"> Receita Médica </a>
        </li>
        <li>
          <a href="#"> Blog </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MobileOffCanvas',

  data() {
    return {
      showCategories: false
    }
  }
}
</script>

<style lang="scss" scoped>
.offcanvas {
  &-header {
    background-color: var(--bs-primary);
  }

  .btn-close {
    position: absolute;
    right: 20px;
    top: 20px;
  }

  &__list {
    font-size: 16px;

    &:first-child:after {
      content: "";
      border-bottom: 1px solid #dbd9d9;
      height: 1px;
      width: 100%;
      display: block;
      margin: 16px 0;
    }

    li {
      margin: 10px 0;

      a {
        align-items: center;
        display: flex;

        svg {
          margin-right: 10px;
          font-size: 20px;
        }
      }
    }
  }

  &__categories {
    background: #ebebeb;
    padding: 5px 20px;
  }
}
</style>