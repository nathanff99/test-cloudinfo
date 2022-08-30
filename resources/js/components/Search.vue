<template>
  <div class="search container-fluid text-center">
    <h1 class="search__title">A sua Farmácia nunca esteve tão perto de si!</h1>
    <div class="search__form">
      <input type="text" />
      <button>O que sente?</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "search",
};
</script>

<style lang="scss" scoped>
.search {
  max-width: 1700px;

  &__title {
    color: var(--bs-primary);
    font-weight: 600;
  }
}
</style>