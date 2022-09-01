<template>
  <div class="mega-menu d-none d-xl-flex">
    <div class="container">
      <ul
        v-for="(list, index) in 5"
        :key="index"
        class="mega-menu__list"
      >
        <li class="mega-menu__list-item mega-menu__list-item--primary">
          <strong> Categoria </strong>
        </li>
        <li class="mega-menu__list-item">
          <a href="#">Nome da subcategoria</a>
        </li>
        <li class="mega-menu__list-item">
          <a href="#">Nome da subcategoria</a>
        </li>
        <li class="mega-menu__list-item">
          <a href="#">Nome da subcategoria</a>
        </li>
        <li class="mega-menu__list-item">
          <a href="#">Nome da subcategoria</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MegaMenu'
}
</script>

<style lang="scss" scoped>
@import '../../../sass/components/megaMenu.scss';
</style>