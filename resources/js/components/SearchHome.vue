<template>
  <div class="search-home canidelo-container py-5 text-center">
    <h1 class="search-home__title mb-5 text-primary">
      A sua Farmácia nunca esteve tão perto de si!
    </h1>
    <div class="search-home__form">
      <div class="row justify-content-center row">
        <div class="col-12 col-lg-9 col-xxl-10">
          <div class="input-group mb-3">
            <span class="input-group-text text-primary bg-white border-0">
              <i class="iconify rotate" data-icon="mdi-magnify"></i>
            </span>
            <input
              type="text"
              class="form-control fs-5 bg-white border-0 shadow-none"
              placeholder="PESQUISA"
              aria-label="Pesquisa"
            />
          </div>
        </div>
        <div class="col-12 col-lg-3 col-xxl-2 mb-3">
          <button class="btn btn-primary fs-3 h-100 text-white w-100">
            O que sente?
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "search-home",
};
</script>

<style lang="scss" scoped>
.search-home {
  &__title {
    font-weight: 600;
  }

  &__form {
    .input-group-text {
      font-size: 40px;
      border-radius: 18px 0 0 18px;
    }

    .form-control {
      height: 76px;
      border-radius: 0 18px 18px 0;
    }

    .btn {
      border-radius: 18px;
    }
  }
}
</style>