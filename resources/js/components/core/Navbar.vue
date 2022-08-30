<template>
  <header class="custom-navbar fixed-top">
    <div class="custom-navbar__features">
      <ul class="mb-0">
        <li>
          <i class="iconify" data-icon="mdi-truck-fast-outline"></i> Portes
          Grátis a partir de 50€ *
        </li>
        <li>
          <i class="iconify" data-icon="mdi-cart-outline"></i> Expedição em
          24/48h
        </li>
        <li>
          <i class="iconify rotate" data-icon="mdi-phone-outline"></i> 913 213
          321
        </li>
      </ul>
    </div>

    <nav class="navbar container-fluid py-3 bg-white">
      <a class="navbar-brand" href="#">
        <img src="/images/logo.webp" alt="Farmácia Canidelo" />
      </a>

      <ul class="nav justify-content-center d-none d-xl-flex">
        <li class="nav-item">
          <a class="nav-link" @click="showMegaMenu = !showMegaMenu">
            Categorias
            <i class="iconify" data-icon="mdi-chevron-down"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promoções</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Receita Médica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Blog</a>
        </li>
      </ul>

      <div class="custom-navbar__right d-none d-xl-flex">
        <ul class="mb-0">
          <li>
            <a href="#">
              <i class="iconify" data-icon="mdi-account"></i> Olá Nelma
            </a>
          </li>
          <li>
            <a href="#">
              <i class="iconify" data-icon="mdi-cart-outline"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="iconify" data-icon="mdi-cards-heart-outline"> </i
            ></a>
          </li>
        </ul>
      </div>

      <button
        class="navbar-toggler d-flex d-xl-none"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <mobile-off-canvas />
    </nav>

    <transition name="fade">
      <mega-menu v-if="showMegaMenu" />
    </transition>
  </header>
</template>

<script>
import MobileOffCanvas from "./MobileOffCanvas.vue";
import MegaMenu from "./MegaMenu.vue";

export default {
  name: "custom-navbar",

  components: {
    MobileOffCanvas,
    MegaMenu,
  },

  data() {
    return {
      showMegaMenu: false,
    };
  },
};
</script>

<style lang="scss" scoped>
.custom-navbar {
  background: #fff;

  &__features {
    background: var(--bs-primary);
    width: 100%;

    ul {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 6px 0;

      @media (min-width: 531px) {
        flex-direction: row;
        padding: 16px 0;
      }

      li {
        display: inline-flex;
        color: #fff;
        font-size: 13px;
        font-weight: 300;

        &:not(:last-child) {
          margin-right: 0;
        }

        @media (min-width: 532px) {
          margin-right: 20px !important;
        }

        svg {
          font-size: 20px;
          margin-right: 5px;

          &[class*="rotate"] {
            transform: rotate(260deg) !important;
          }
        }
      }
    }
  }

  &__right {
    ul {
      display: flex;

      li {
        list-style: none;
        margin-right: 40px;

        a {
          display: flex;
          flex-direction: column;
          align-items: center;
          color: var(--bs-primary);
          font-weight: 300;
          text-decoration: none;

          svg {
            font-size: 20px;
          }
        }
      }
    }
  }

  .navbar {
    max-width: 1700px;

    &-brand {
      img {
        max-height: 60px;
      }
    }

    &-toggler {
      border: 0;
      box-shadow: none;
    }

    .nav-item {
      .nav-link {
        text-transform: uppercase;
        cursor: pointer;
      }
    }
  }

  .fade-enter-active,
  .fade-leave-active {
    transition: opacity 1s;
  }
  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
}
</style>