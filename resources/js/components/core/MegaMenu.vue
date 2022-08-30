<template>
  <div class="mega-menu d-none d-xl-flex">
    <div class="container">
      <ul v-for="(list, index) in 5" :key="index" class="mega-menu__list">
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
  name: "mega-menu",
};
</script>

<style lang="scss" scoped>
.mega-menu {
  background: #fff;
  padding: 20px 10px;

  &__list {
    display: inline-flex;
    flex-direction: column;
    list-style: none;
    margin-bottom: 0;

    &:not(:last-child) {
      padding-right: 50px;
    }

    &-item {
      margin: 5px 0;
      font-weight: 200;

      &--primary {
        position: relative;
        font-weight: 700;

        &:after {
          content: "";
          position: absolute;
          border-bottom: 2px solid #f35711;
          width: 29px;
          left: 0;
          bottom: -2px;
        }
      }

      a {
        text-decoration: none;
      }
    }
  }
}
</style>