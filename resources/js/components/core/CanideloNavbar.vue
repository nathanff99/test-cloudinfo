<template>
  <header class="canidelo-navbar fixed-top">
    <div class="canidelo-navbar__features">
      <ul class="mb-0">
        <li>
          <i
            class="iconify"
            data-icon="mdi-truck-fast-outline"
          /> Portes
          Grátis a partir de 50€ *
        </li>
        <li>
          <i
            class="iconify"
            data-icon="mdi-cart-outline"
          /> Expedição em
          24/48h
        </li>
        <li>
          <i
            class="iconify rotate"
            data-icon="mdi-phone-outline"
          /> 913 213
          321
        </li>
      </ul>
    </div>

    <nav class="navbar canidelo-container py-3 bg-white">
      <a
        class="navbar-brand"
        href="#"
      >
        <img
          src="/images/logo.webp"
          alt="Farmácia Canidelo"
        >
      </a>

      <ul class="nav justify-content-center d-none d-xl-flex">
        <li class="nav-item">
          <a
            class="nav-link"
            @click="showMegaMenu = !showMegaMenu"
          >
            Categorias
            <i
              class="iconify"
              data-icon="mdi-chevron-down"
            />
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="#"
          >Promoções</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="#"
          >Marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Receita Médica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Blog</a>
        </li>
      </ul>

      <div class="canidelo-navbar__right d-none d-xl-flex">
        <ul class="mb-0">
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
              />
            </a>
          </li>
          <li>
            <a href="#">
              <i
                class="iconify"
                data-icon="mdi-cards-heart-outline"
              /></a>
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
        <span class="navbar-toggler-icon" />
      </button>

      <MobileOffCanvas />
    </nav>

    <transition name="fade">
      <MegaMenu v-if="showMegaMenu" />
    </transition>
  </header>
</template>

<script>
import MobileOffCanvas from './MobileOffCanvas.vue'
import MegaMenu from './MegaMenu.vue'

export default {
  name: 'CanideloNavbar',

  components: {
    MobileOffCanvas,
    MegaMenu
  },

  data() {
    return {
      showMegaMenu: false
    }
  }
}
</script>

<style lang="scss" scoped>
@import '../../../sass/components/navbar.scss';
</style>