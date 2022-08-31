<template>
  <article class="product-grid bg-white">
    <div
      v-if="product.discount > 0"
      class="product-grid__discount bg-primary text-center text-white"
    >
      {{ product.discount }}%
    </div>

    <div class="product-grid__favorite">
      <i class="iconify" data-icon="mdi-heart-outline"></i>
    </div>

    <img
      class="product-grid__image"
      :src="product.img_src"
      :alt="product.title"
    />

    <div class="product-grid__details text-center">
      <h5 class="product-grid__details-title">
        {{ product.title }}
      </h5>

      <span class="product-grid__details-price">
        <small
          v-if="product.discount > 0"
          class="product-grid__details-price--through"
        >
          {{ formatPrice(product.price) }}€
        </small>
        {{
          formatPrice(product.price - (product.price * product.discount) / 100)
        }}€
      </span>

      <span
        class="product-grid__details-stock d-block"
        :class="{ 'product-grid__details-stock--red': product.stock === 0 }"
      >
        {{ product.stock > 0 ? "Disponível" : "Indisponível" }}
      </span>

      <button
        class="
          product-grid__details-button
          btn btn-primary
          text-white
          w-100
          mt-2
        "
        :class="{ 'product-grid__details-button--orange': product.stock === 0 }"
      >
        {{ product.stock > 0 ? "Comprar" : "Reservar" }}
      </button>
    </div>
  </article>
</template>

<script>
export default {
  name: "product-grid",

  props: {
    product: {
      type: Object,
      required: true,
    },
  },

  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(2);
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
  },
};
</script>

<style lang="scss" scoped>
@import "../../../sass/components/productGrid.scss";
</style>